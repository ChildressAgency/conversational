jQuery(document).ready(function($){
  $('.cai-submit').on('click', function () {
    var direction = $(this).attr('name');
    //var directionInput = $('<input>').attr('type', 'hidden').attr('name', 'direction').val(direction);
    //$('#cai-mulitstep').append(directionInput);
    $('#direction').val(direction);
    $('#cai-multistep').submit();
  });

  $('.email-form-link').on('click', '.send-email', function(){
    var $button = $(this);
    var emailAddress = $('#email_form_email_address').val();

    var validEmailAddress = validateEmailAddress(emailAddress);

    if(emailAddress.length == 0 || validEmailAddress == false){
      $('#email_form_email_address').css('border', '2px solid red');
      $('.email-response').text(cai_messages.valid_email_address_error);
      return false;
    }

    $button.width($button.width()).text('...').prop('disabled', true);

    var data = {
      'action': 'send_form_link',
      'step': $button.data('step'),
      'post_id': $button.data('post_id'),
      'token': $button.data('token'),
      'nonce': $button.data('nonce'),
      'email_form_email_address': emailAddress,
      'form_location': window.location.href.split('?')[0]
    };

    $.post(cai_acf_multistep.cai_acf_multistep_ajax, data, function(response){
      if(response.success = true){
        $button.remove();
        $('#email_form_email_address').remove();

        $('.email-response').text(response.data);
      }
      else{
        $('.email-response').html(response.data);
      }
    });
  });

  function validateEmailAddress(emailAddress){
    var re = /\S+@\S+\.\S+/;
    if(re.test(emailAddress) == false){
      return false;
    }

    return true;
  }
});