/*!
 * Chargeover scripts
*/
if(typeof ChargeOver !== 'undefined'){
  ChargeOver.Core.setup({
    'instance': 'conversational-staging.chargeover.com',
    'token': 'dsU51OMfuE8IRhwicPyea6XNA9gS3Vk0'
  });
}

// Our callback function (this gets called after data is sent to ChargeOver)
function my_callback_function(code, message, response) {
  if (code == ChargeOver.Core.CODE_OK) {
    //alert('You have signed up! Thanks ' + response.user.first_name + '!');

    $('#orderContainer').hide();
    $('#alert').show();
  } else {
    alert('An error occurred: ' + message);
  }
}

jQuery(document).ready(function ($) {

  if(typeof ChargeOver !== 'undefined'){
  $("#form").validate(
    {
      rules:
      {
        "business-name":
        {
          required: true,
          minlength: 3
        },
        "address-line-1":
        {
          required: true,
          minlength: 5
        },
        "address-city":
        {
          required: true,
          minlength: 3
        },
        "address-province":
        {
          required: true,
          maxlength: 2
        },
        "address-postal":
        {
          required: true,
          minlength: 5,
          maxlength: 10
        },
        "address-country":
        {
          required: true
        },
        "card-number":
        {
          required: true,
          creditcard: true
        },
        "expiry-month":
        {
          required: true,
          digits: true
        },
        "expiry-year":
        {
          required: true,
          digits: true
        },
        "cvv":
        {
          required: true,
          minlength: 3,
          digits: true
        },
        "card-holder-name":
        {
          required: true,
          minlength: 3
        },
        "email-address":
        {
          required: true,
          email: true
        },
        "phone-number":
        {
          required: true,
          digits: true,
          minlength: 5,
          maxlength: 15,
        }
      },
      messages:
      {
        "business-name":
        {
          required: conversational_checkout.business_name_required,
          minlength: conversational_checkout.business_name_minlength
        },
        "address-line-1":
        {
          required: conversational_checkout.address_line_1_required,
          minlength: conversational_checkout.address_line_1_minlength
        },
        "address-city":
        {
          required: conversational_checkout.address_city_required,
          minlength: conversational_checkout.address_city_minlength
        },
        "address-province":
        {
          required: conversational_checkout.address_province_required,
          maxlength: conversational_checkout.address_province_maxlength
        },
        "address-postal":
        {
          required: conversational_checkout.address_postal_required,
          minlength: conversational_checkout.address_postal_minlength,
          maxlength: conversational_checkout.address_postal_maxlength
        },
        "address-country":
        {
          required: conversational_checkout.address_country_required,
        },
        "card-number":
        {
          required: conversational_checkout.card_number_required,
          creditcard: conversational_checkout.card_number_creditcard
        },
        "expiry-month":
        {
          required: conversational_checkout.expiry_month_required,
          digits: conversational_checkout.expiry_month_digits
        },
        "expiry-year":
        {
          required: conversational_checkout.expiry_year_required,
          digits: conversational_checkout.expiry_year_digits
        },
        "cvv":
        {
          required: conversational_checkout.cvv_required,
          minlength: conversational_checkout.cvv_minlength,
          digits: conversational_checkout.cvv_digits
        },
        "card-holder-name":
        {
          required: conversational_checkout.card_holder_name_required
        },
        "email-address":
        {
          required: conversational_checkout.email_address_required,
          email: conversational_checkout.email_address_email
        },
        "phone-number":
        {
          required: conversational_checkout.phone_number_required,
          minlength: conversational_checkout.phone_number_minlength,
          maxlength: conversational_checkout.phone_number_maxlength,
          digits: conversational_checkout.phone_number_digits
        }
      }
    })

  $('#submit').click(function () {


    if ($("#form").valid() == true) {
      // The data we want to send to ChargeOver
      var my_data = {

        'send_welcome_notice': true, // Default is FALSE. TRUE sends a welcome e-mail to new sign-ups, while FALSE will not send them anything.

        'customer': {
          company: $('#business-name').val(),

          // external_key: '1234abcd1234',     // Use external keys to link your app to ChargeOver data

          bill_addr1: $('#address-line-1').val(),
          bill_addr2: $('#address-line-2').val(),
          bill_addr3: '',
          bill_city: $('#address-city').val(),
          bill_state: $('#address-province').val(),
          bill_postcode: $('#address-postal').val(),
          bill_country: $('#address-country').val(),

          custom_1: '', // Custom field values
          custom_2: '',
          custom_3: ''
        },
        'creditcard': {
          number: $('#card-number').val(),
          expdate_month: $('#expiry-month').val(),
          expdate_year: $('#expiry-year').val(),
          name: $('#card-holder-name').val(),

          // CVV/CSC card security code (used only for card validation, not stored)
          cvv: $('#cvv').val()

          // Optional address information (can be used for address verification)
          // address: '',
          // city: '',
          // state: '',
          // postcode: '',
          // country: ''
        },
        'package': {
          // paycycle: 'mon',       // The paycycle will default to your default payment cycle, but can be specific here instead
          // paycycle: 'yrl',
          // paycycle: 'qtr',

          // external_key: 'abcd12341234'

          // custom_1: '',
          // custom_2: '',
          // custom_3: '',

          // nickname: '',      If customers have multiple subscriptions, you can use nicknames to distinguish them

          // holduntil_datetime: '2015-06-01 00:00:00',     // You can use this to hold/delay billing until a specific date
        },

        'user': {
          name: $('#card-holder-name').val(),
          email: $('#email-address').val(),
          phone: $('#phone-number').val()
        },

        '_comment': 'This is a list of objects for the services to subscribe the customer to',
        'line_items': [
          // This starts empty, and then we fill it from the buttons they've clicked
        ]

        // ... or you can refer to item external_key values instead of item_id values
        // item_external_keys: [ ... ]

        // ... or you can refer to item token values instead of item_id values
        // item_tokens: [ ... ]
      };

      // Auto
      if ($('#plan_auto_reception').val() == 1) {
        my_data.line_items.push({
          item_id: 19
        });

        if ($('#addon13').val() == 1) {
          my_data.line_items.push({
            item_id: 16
          });
        }

        if ($('#addon14').val() == 1) {
          my_data.line_items.push({
            item_id: 17
          });
        }
      }

      // Entrepreneur
      if ($('#plan_entrepreneur').val() == 1) {
        my_data.line_items.push({
          item_id: 9
        });

        if ($('#addon21').val() == 1) {
          my_data.line_items.push({
            item_id: 12
          });
        }

        if ($('#addon22').val() == 1) {
          my_data.line_items.push({
            item_id: 13
          });
        }

        if ($('#addon23').val() == 1) {
          my_data.line_items.push({
            item_id: 16
          });
        }

        if ($('#addon24').val() == 1) {
          my_data.line_items.push({
            item_id: 17
          });
        }

        if ($('#addon25').val() == 1) {
          my_data.line_items.push({
            item_id: 18
          });
        }
      }

      // Business
      if ($('#plan_business').val() == 1) {
        my_data.line_items.push({
          item_id: 10
        });

        if ($('#addon31').val() == 1) {
          my_data.line_items.push({
            item_id: 12
          });
        }

        if ($('#addon32').val() == 1) {
          my_data.line_items.push({
            item_id: 13
          });
        }

        if ($('#addon33').val() == 1) {
          my_data.line_items.push({
            item_id: 16
          });
        }

        if ($('#addon34').val() == 1) {
          my_data.line_items.push({
            item_id: 17
          });
        }

        if ($('#addon35').val() == 1) {
          my_data.line_items.push({
            item_id: 18
          });
        }
      }

      // Corporate
      if ($('#plan_corporate').val() == 1) {
        my_data.line_items.push({
          item_id: 11
        });

        if ($('#addon41').val() == 1) {
          my_data.line_items.push({
            item_id: 12
          });
        }

        if ($('#addon42').val() == 1) {
          my_data.line_items.push({
            item_id: 13
          });
        }

        if ($('#addon43').val() == 1) {
          my_data.line_items.push({
            item_id: 16
          });
        }

        if ($('#addon44').val() == 1) {
          my_data.line_items.push({
            item_id: 17
          });
        }

        if ($('#addon45').val() == 1) {
          my_data.line_items.push({
            item_id: 18
          });
        }
      }

      // Call the signup method
      ChargeOver.Signup.signup(my_data, my_callback_function);
    }
  });

  $('#alert').hide();
  }
});