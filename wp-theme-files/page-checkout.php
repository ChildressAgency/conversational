<?php get_header(); ?>
<?php $page_id = get_the_ID(); ?>
<main id="main">
  <div class="container-fluid">
    <article class="standard-page">
      <?php get_template_part('partials/page', 'intro'); ?>

      <div class="page-body">
        <div class="alert alert-success" id="alert">
          <?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'alert_order_success', true))); ?>
        </div>

        <div id="orderContainer">

          <div id="plans" class="plan table-responsive-md">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"><?php echo esc_html__('Plan Name', 'conversational'); ?></th>
                  <th scope="col"><?php echo esc_html__('Description', 'conversational'); ?></th>
                  <th scope="col"><?php echo esc_html__('Price', 'conversational'); ?></th>
                  <th scope="col"><?php echo esc_html__('Action', 'conversational'); ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php echo esc_html(get_post_meta($page_id, 'plan_1_name', true)); ?></th>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_1_description', true))); ?></td>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_1_price', true))) ?></td>
                  <td><button class="btn-main btn-square plan" onclick="$('.plan').hide(); $('#plan_auto_reception').val(1); $('#autoreception').show();" type="button"><?php echo esc_html__('Subscribe', 'conversational'); ?></button><input id="plan_auto_reception" type="hidden" value="0" /></td>
                </tr>
                <tr>
                  <th scope="row"><?php echo esc_html(get_post_meta($page_id, 'plan_2_name', true)); ?></th>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_2_description', true))); ?></td>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_2_price', true))); ?></td>
                  <td><button class="btn-main btn-square plan" onclick="$('.plan').hide(); $('#plan_entrepreneur').val(1); $('#entrepreneur').show();" type="button"><?php echo esc_html__('Subscribe', 'conversational'); ?></button><input id="plan_entrepreneur" type="hidden" value="0" /></td>
                </tr>
                <tr>
                  <th scope="row"><?php echo esc_html(get_post_meta($page_id, 'plan_3_name', true)); ?></th>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_3_description', true))); ?></td>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_3_price', true))); ?></td>
                  <td><button class="btn-main btn-square plan" onclick="$('.plan').hide(); $('#plan_business').val(1); $('#business').show();" type="button"><?php echo esc_html__('Subscribe', 'conversational'); ?></button><input id="plan_business" type="hidden" value="0" /></td>
                </tr>
                <tr>
                  <th scope="row"><?php echo esc_html(get_post_meta($page_id, 'plan_4_name', true)); ?></th>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_4_description', true))); ?></td>
                  <td><?php echo apply_filters('the_content', wp_kses_post(get_post_meta($page_id, 'plan_4_price', true))); ?></td>
                  <td><button class="btn-main btn-square plan" onclick="$('.plan').hide(); $('#plan_corporate').val(1); $('#corporate').show();" type="button"><?php echo esc_html__('Subscribe', 'conversational'); ?></button><input id="plan_corporate" type="hidden" value="0" /></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="panel panel-default" id="autoreception" style="display: none;">
            <div class="panel-body">
              <div class="alert alert-success" role="alert"><?php echo esc_html(get_post_meta('plan_1_addon_message', true)); ?></div>

              <h3><?php echo esc_html__('Choose from these great add-ons!', 'conversational'); ?></h3>
              <button class="btn-main btn-square" onclick="$('#addon13').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_1_addon_1_description', true)); ?>
              <br />
              <input id="addon13" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon14').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_1_addon_2_description', true)); ?>
              <br />
              <input id="addon14" type="hidden" value="0" />
            </div>
          </div>

          <div class="panel panel-default" id="entrepreneur" style="display: none;">
            <div class="panel-body">
              <div class="alert alert-success" role="alert"><?php echo esc_html(get_post_meta($page_id, 'plan_2_addon_message', true)); ?></div>

              <h3><?php echo esc_html__('Choose from these great add-ons!', 'conversational'); ?></h3>
              <button class="btn-main btn-square" onclick="$('#addon21').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button>&nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_2_addon_1_description', true)); ?>
              <br />
              <input id="addon21" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon22').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_2_addon_2_description', true)); ?>
              <br />
              <input id="addon22" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon23').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_2_addon_3_description', true)); ?>
              <br />
              <input id="addon23" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon24').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_2_addon_4_description', true)); ?>
              <br />
              <input id="addon24" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon25').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_2_addon_5_description', true)); ?>
              <br />
              <input id="addon25" type="hidden" value="0" />
            </div>
          </div>

          <div class="panel panel-default" id="business" style="display: none">
            <div class="panel-body">
              <div class="alert alert-success" role="alert"><?php echo esc_html(get_post_meta($page_id, 'plan_3_addon_message', true)); ?></div>

              <h3><?php echo esc_html__('Choose from these great add-ons!', 'conversational'); ?></h3>
              <button class="btn-main btn-square" onclick="$('#addon31').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button>&nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_3_addon_1_description', true)); ?>
              <br />
              <input id="addon31" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon32').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_3_addon_2_description', true)); ?>
              <br />
              <input id="addon32" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon33').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_3_addon_3_description', true)); ?>
              <br />
              <input id="addon33" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon34').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_3_addon_4_description', true)); ?>
              <br />
              <input id="addon34" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon35').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_3_addon_5_description', true)); ?>
              <br />
              <input id="addon35" type="hidden" value="0" />
            </div>
          </div>

          <div class="panel panel-default" id="corporate" style="display: none">
            <div class="panel-body">
              <div class="alert alert-success" role="alert"><?php echo esc_html(get_post_meta($page_id, 'plan_4_addon_message', true)); ?></div>

              <h3><?php echo esc_html__('Choose from these great add-ons!', 'conversational'); ?></h3>
              <button class="btn-main btn-square" onclick="$('#addon41').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button>&nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_4_addon_1_description', true)); ?>
              <br />
              <input id="addon41" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon42').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_4_addon_2_description', true)); ?>
              <br />
              <input id="addon42" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon43').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_4_addon_3_description', true)); ?>
              <br />
              <input id="addon43" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon44').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_4_addon_4_description', true)); ?>
              <br />
              <input id="addon44" type="hidden" value="0" />
              <br />
              <button class="btn-main btn-square" onclick="$('#addon45').val(1); $(this).text('Added').addClass('btn-success');" type="button"><?php echo esc_html__('Add This', 'conversational'); ?></button> &nbsp; <?php echo esc_html(get_post_meta($page_id, 'plan_5_addon_5_description', true)); ?>
              <br />
              <input id="addon45" type="hidden" value="0" />
            </div>
          </div>

          <form class="form-horizontal" id="form" role="form">&nbsp;
            <fieldset>
              <legend><?php echo esc_html__('Payment', 'conversational'); ?></legend>

              <div class="form-group">
                <label class="control-label" for="business-name"><?php echo esc_html__('Business Name', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="business-name" name="business-name" placeholder="<?php echo esc_html__('Business Name', 'conversational'); ?>" type="text" required>
              </div>

              <div class="form-group">
                <label class="control-label" for="email-address"><?php echo esc_html__('Email Address', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="email-address" name="email-address" placeholder="<?php echo esc_html__('Email Address', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="phone-number"><?php echo esc_html__('Phone Number', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="phone-number" name="phone-number" placeholder="<?php echo esc_html__('Phone number', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="card-holder-name"><?php echo esc_html__('Name on Card', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="card-holder-name" name="card-holder-name" placeholder="<?php echo esc_html__('Card Holder\'s Name', 'contersational'); ?>'" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="address-line-1"><?php echo esc_html__('Address Line 1', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="address-line-1" name="address-line-1" placeholder="<?php echo esc_html__('Street Address', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="address-line-2"><?php echo esc_html__('Address Line 2', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="address-line-2" name="address-line-2" placeholder="<?php echo esc_html__('Apartment, Unit, Building, Floor, etc', 'conversational'); ?>" type="text" />
              </div>

              <div class="form-group">
                <label class="control-label" for="address-city"><?php echo esc_html__('City/Town', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="address-city" name="address-city" placeholder="<?php echo esc_html__('City or Town Name', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="address-province"><?php echo esc_html__('State/Province/Region', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="address-province" name="address-province" placeholder="<?php echo esc_html__('State, Province, or Region Name', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="address-postal"><?php echo esc_html__('Zip/Postal Code', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="address-postal" name="address-postal" placeholder="<?php echo esc_html__('Zip or Postal Code', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="address-country"><?php echo esc_html__('Country', 'conversational'); ?></label>

                      <select class="form-control form-control-lg" id="address-country" name="address-country">
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TP">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="FX">France, Metropolitan</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US" selected="selected">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                      </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="card-number"><?php echo esc_html__('Card Number', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="card-number" name="card-number" placeholder="<?php echo esc_html__('Debit/Credit Card Number', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="expiry-month"><?php echo esc_html__('Expiration Date', 'conversational'); ?></label>

                  <div class="row">
                    <div class="col-sm-6">
                      <select class="form-control form-control-lg" id="expiry-month" name="expiry-month">
                        <option value="01">Jan (01)</option>
                        <option value="02">Feb (02)</option>
                        <option value="03">Mar (03)</option>
                        <option value="04">Apr (04)</option>
                        <option value="05">May (05)</option>
                        <option value="06">June (06)</option>
                        <option value="07">July (07)</option>
                        <option value="08">Aug (08)</option>
                        <option value="09">Sep (09)</option>
                        <option value="10">Oct (10)</option>
                        <option value="11">Nov (11)</option>
                        <option value="12">Dec (12)</option>
                      </select>
                    </div>

                    <div class="col-sm-6">
                      <select class="form-control form-control-lg" id="expiry-year" name="expiry-year">
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2023">2024</option>
                        <option value="2023">2025</option>
                      </select>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label" for="cvv"><?php echo esc_html__('Card CVV', 'conversational'); ?></label>
                <input class="form-control form-control-lg" id="cvv" name="cvv" placeholder="<?php echo esc_html__('Security Code', 'conversational'); ?>" type="text" required />
              </div>

              <div class="form-group">
                <label class="control-label" for="terms-of-service"><?php printf(wp_kses_post(__('I agree to the <a href="%s" target="_blank">Terms of Service</a>', 'conversational')), esc_url(home_url('terms-of-service'))); ?></label>
                  <input class="" id="terms-of-service" name="terms-of-service" type="checkbox" required />
                </div>
              </div>

              <div class="form-group text-center">
                <button class="btn-main btn-square" id="submit" type="button"><?php echo esc_html__('Sign Me Up!', 'conversational'); ?></button>
              </div>
            </fieldset>
          </form>
        </div>


      </div>
      <img src="http://go.conversational.com/wf/open?upn=xe8RBBz-2BLXgbS69pqxuQqDtldVZ-2Bq4wMl2qpukWL1TNAe5ZV3egaEASde1IIAQKIkaQgcWZvMnSgODhXpoQWMAEJ2HYB2dsVLbtbk1xJAAkgRyaj2qSvlghVBYCQ4ILhqWVmUgCi2I3Xkq56xL4upW8cQm2zp4a5RXEw8wjaYewR7zus7fikdAAgp0paGIAMtr3PLBNlKwBnSt0Ls0vazhoBNHyER4HzXXTCInnVnN0-3D" alt="" width="1" height="1" border="0" style="height:1px !important;width:1px !important;border-width:0 !important;margin-top:0 !important;margin-bottom:0 !important;margin-right:0 !important;margin-left:0 !important;padding-top:0 !important;padding-bottom:0 !important;padding-right:0 !important;padding-left:0 !important;" /></body>
  </div>
    </article>
  </div>
</main>
<?php get_footer();
