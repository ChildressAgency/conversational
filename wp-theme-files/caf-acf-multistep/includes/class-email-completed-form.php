<?php
if(!defined('ABSPATH')){ exit; }

if(!class_exists('CAI_Email_Form')){
  class CAI_Email_Form{

    private $post_id;
    private $step_ids;
    private $message;

    public function __construct($param1, $param2){
      $this->post_id = $param1;
      $this->step_ids = $param2;
      $this->message = '';

      $this->email_completed_form();
    }

    public function email_completed_form(){
      $form_emails = get_option('options_finished_form_email_addresses');
      $to = $this->sanitize_email_addresses($form_emails);

      $subject = get_option('options_finished_form_email_subject');
      $headers = array('Content-Type: text/html; charset=UTF-8');
      $headers[] = 'From: Conversational.com <noreply@conversational.com>';

      $form_groups = $this->step_ids;

      foreach($form_groups as $form_group){
        $form_fields = acf_get_fields($form_group);

        //form section title
        $this->message .= '<h2>' . $form_fields[0]['message'] . '</h2>';

        foreach($form_fields as $form_field){
          if($form_field['type'] != 'message' && $this->conditional_met($form_field)){

            if(have_rows($form_field['name'], $this->post_id) && $form_field['type'] != 'checkbox' && $form_field['type'] != 'select'){
              while(have_rows($form_field['name'], $this->post_id)){
                the_row();

                $field_row = get_row();

                $this->message .= '<h3>t1' . $form_field['label'] . '</h3>';

                foreach($field_row as $field_row_key => $field_row_value){
                  
                  $field_row_object = get_sub_field_object($field_row_key, $this->post_id);

                  $this->message .= $this->get_message_line($field_row_object);
                }
              }
            }
            else{
              $form_field_value = get_field($form_field['name'], $this->post_id);

              if($form_field['type'] == 'true_false'){
                $form_field_value = $form_field_value == 1 ? 'Yes' : 'No';
              }

              if($form_field['type'] == 'checkbox' || $form_field['type'] == 'select'){
                if(is_array($form_field_value)){
                  $form_field_value = implode(', ', $form_field_value);
                }
              }

              if($form_field_value != '' && $form_field_value != 'No'){ //don't show empty or no fields
                $this->message .= '<p><strong>' . $form_field['label'] . '</strong><br />' . $form_field_value . '</p>';
              }
            }
          }
        }//end foreach form_fields
      }//end foreach field_groups

      //send the email
      //echo $this->message;
      return wp_mail($to, $subject, $this->message, $headers);

    }//end email_completed_form

    private function get_message_line($field_row_object){
      if(have_rows($field_row_object['name'], $this->post_id) && $field_row_object['type'] != 'checkbox' && $field_row_object['type'] != 'select'){
        while(have_rows($field_row_object['name'], $this->post_id)){
          the_row();

            $this->message .= '<h3>' . $field_row_object['label'] . '</h3>';

            $sub_field_row = get_row();

            foreach($sub_field_row as $sub_field_row_key => $sub_field_row_value){
              $sub_field_row_object = get_sub_field_object($sub_field_row_key, $this->post_id);

                  $this->message .= $this->get_message_line($sub_field_row_object);

            }//end foreach field_row
        }//end while
      }//end if have_rows
      elseif(is_array($field_row_object['value']) && $field_row_object['type'] != 'checkbox' && $field_row_object['type'] != 'select'){
        //acf seems to break its repeater field naming at certain depths so this catches those
        //need to get field by key since the repeater field name in db is wrong
        if( $this->rows_are_not_empty($field_row_object['value'])){
        $field_row_sub_field = get_sub_field_object($field_row_object['key'], $this->post_id);

        $sub_field_values = $field_row_sub_field['value'];

        //if($this->conditional_met($field_row_sub_field)){
          $this->message .= '<h3>' . $field_row_sub_field['label'] . '</h3>';
          for($i = 0; $i < count($sub_field_values); $i++){
            if(!empty($sub_field_values[$i])){
              foreach($sub_field_values[$i] as $sub_field_key => $sub_field_value){
                $sub_field_label = $this->get_sub_field_label($sub_field_key, $field_row_sub_field);

                if(is_bool($sub_field_value)){
                  $sub_field_value = $sub_field_value === true ? 'Yes' : 'No';
                }

                if($sub_field_value != '' && $sub_field_value != 'No'){ //don't show empty or No fields
                  $this->message .= '<p><strong>' . $sub_field_label . '</strong><br />' . $sub_field_value . '</p>';
                }
              }
            }
          }
        //}
        }
      }
      else{
        $form_field_value = $field_row_object['value'];

        if($field_row_object['type'] == 'true_false'){
          $form_field_value = $field_row_object['value'] == 1 ? 'Yes' : 'No';
        }

        if($field_row_object['type'] == 'checkbox' || $field_row_object['type'] == 'select'){
          if(is_array($form_field_value)){
            $form_field_value = implode(', ', $form_field_value);
          }
        }

        if($form_field_value != '' && $form_field_value != 'No'){ //don't show empty or no fields
          $this->message .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $form_field_value . '</p>';
        }
      }
    }//end get_meassage_line

    private function rows_are_not_empty($row_values){
      for($i = 0; $i < count($row_values); $i++){
        if(!empty($row_values[$i])){
          return true;
        }
      }

      return false;
    }

    private function get_sub_field_label($sub_field_key, $field_row_sub_field){
      foreach($field_row_sub_field['sub_fields'] as $sub_field){
        if($sub_field['name'] == $sub_field_key){
          return $sub_field['label'];
        }
      }

      return '';
    }

    private function conditional_met($form_field){
      $conditional_logic = $form_field['conditional_logic'];
      if(!is_array($conditional_logic)){ return true; }

      for($i = 0; $i < count($conditional_logic); $i++){
        $conditions = $conditional_logic[$i];
        for($ii = 0; $ii < count($conditions); $ii++){
          $conditional_field_object = get_field_object($conditions[$ii]['field'], $this->post_id);
          $conditional_field_value = $conditional_field_object['value'];

          $conditional_operator = $conditions[$ii]['operator'];
          $conditional_value = $conditions[$ii]['value'];

          switch($conditional_operator){
            case '!=':
              if($conditional_field_value == $conditional_value){
                return false;
              }
            break;

            case '==':
              if($conditional_field_value != $conditional_value){
                return false;
              }
            break;
          }
        }
      }

      return true;
    }

    private function sanitize_email_addresses($form_emails){
      $email_addresses = explode(',', $form_emails);
      $sanitized_email_addresses = [];
      foreach($email_addresses as $email_address){
        $sanitized_email_addresses[] = sanitize_email($email_address);
      }
  
      return implode(',', $sanitized_email_addresses);
    }
  }//end class
}
