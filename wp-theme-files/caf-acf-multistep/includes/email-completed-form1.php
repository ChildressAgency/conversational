<?php    
    public function email_completed_form($post_id){
      $form_emails = get_option('options_finished_form_email_addresses');
      $to = $this->sanitize_email_addresses($form_emails);

      $subject = get_option('options_finished_form_email_subject');
      $headers = array('Content-Type: text/html; charset=UTF-8');

      $message = '';
      //$form_fields = get_field_objects($post_id);
      //$form_fields = get_fields($post_id);
        //$form_fields = $this->array_orderby($form_fields, 'menu_order', SORT_ASC);
      //$form_fields = acf_get_fields($this->step_ids[0]);

      //print '<pre>';
      //print_r($form_fields);
      //print '</pre>';

      $form_groups = $this->step_ids;
      foreach($form_groups as $form_group){
        $form_fields = acf_get_fields($form_group);

        //form section title
        $message .= '<h3>' . $form_fields[0]['message'] . '</h3>';

        foreach($form_fields as $form_field){
          if($form_field['type'] != 'message'){

            if(have_rows($form_field['name'], $post_id) && $form_field['type'] != 'select' && $form_field['type'] != 'checkbox'){

              while(have_rows($form_field['name'], $post_id)){
                the_row();
                //$field_row = get_sub_field_object($form_field['key'], $post_id);
                $message .= '<h4>' . $form_field['label'] . '</h4>';
                $field_row = get_row();

                foreach($field_row as $field_row_key => $field_row_value){
                  $message .= $this->get_message_line($field_row_key, $field_row_value, $post_id);
                }

                //$message .= $this->get_message_line($field_row, $post_id);

 //////////////////////////////////
 /*
                foreach($field_row as $field_row_key => $field_row_value){
                  $field_row_object = get_sub_field_object($field_row_key, $post_id);

                  if(have_rows($field_row_object['name'], $post_id) && $field_row_object['type'] != 'checkbox'){
                    while(have_rows($field_row_object['name'], $post_id)){
                      the_row();

                      $field_row_row = get_row();
                      //var_dump($field_row_row);
                      foreach($field_row_row as $row_key => $row_value){
                        $row_object = get_sub_field_object($row_key, $post_id);

                        if(have_rows($row_object['name'], $post_id) && $row_object['type'] != 'checkbox' && $row_object['type'] != 'select'){
                          while(have_rows($row_object['name'], $post_id)){
                            the_row();
                            $row_object_row = get_row();

                            foreach($row_object_row as $row_object_key => $row_object_value){
                              $sub_row_object = get_sub_field_object($row_object_key, $post_id);
                              $message .= '<p><strong>' . $sub_row_object['label'] . '</strong><br />' . $sub_row_object['value'] . '</p>';
                            }
                          }
                        }
                        else{
                          $row_label = $row_object['label'];

                          if($row_object['type'] == 'checkbox' || $row_object['type'] == 'select'){
                            if(is_array($row_object['value'])){
                              $row_value = implode(', ', $row_object['value']);
                            }
                          }
                          else{
                            $row_value = $row_object['value'];
                          }//end checkbox check

                          $message .= '<p><strong>' . $row_label . '</strong><br />' . $row_value . '</p>';
                        }

                      }//end foreach field_type_row

                    }//end while field_row
                  }
                  else{
                    if($field_row_object['type'] == 'checkbox'){
                      $field_row_value = implode(', ', $field_row_object['value']);
                    }
                    else{
                      $field_row_value = $field_row_object['value'];
                    }
                    $message .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
                  }//end if field_row
                }//end foreach field_row
*/                
////////////////////////////////

              }//end while form_field

            }
            else{
              $form_field_value = get_field($form_field['name'], $post_id);
              if($form_field['type'] == 'true_false'){
                $form_field_value = $form_field_value == 1 ? 'Yes' : 'No';
              }
              elseif($form_field['type'] == 'select' || $form_field['type'] == 'checkbox'){
                if(is_array($form_field_value)){
                  $form_field_value = implode(', ', $form_field_value);
                }
              }

              $message .= '<p><strong>' . $form_field['label'] . '</strong><br />' . $form_field_value . '</p>';

            }//end if form_field

          }//end if message
        }//end foreach form_fields
      }//end foreach form_groups

      echo $message;
    }//end email_completed_form

    private function array_orderby(){
      $args = func_get_args();
      $data = array_shift($args);
      foreach($args as $n => $field){
        if(is_string($field)){
          $tmp = array();
          foreach($data as $key => $row){
            $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
          }
        }
      }
      $args[] = &$data;
      call_user_func_array('array_multisort', $args);
      return array_pop($args);
    }

private function get_message_line($field_row_key, $field_row_value, $post_id){
  //$return_message = '';
      //$sub_fields = '';
  //foreach($field_row as $field_row_key => $field_row_value){
    $field_row_object = get_sub_field_object($field_row_key, $post_id);

    if(have_rows($field_row_object['name'], $post_id) && $field_row_object['type'] != 'checkbox' && $field_row_object['type'] != 'select'){
      while(have_rows($field_row_object['name'], $post_id)){
        the_row();
        $sub_field_row = get_row();

        foreach($sub_field_row as $sub_field_key => $sub_field_value){
          //$sub_field_row_object = get_sub_field_object($sub_field_key, $post_id);
          return $this->get_message_line($sub_field_key, $sub_field_value, $post_id);
        }
        //$sub_fields .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
      }
      //return $sub_fields;
    }
    else{

      if($field_row_object['type'] == 'true_false'){
        $field_row_value = $field_row_value == 1 ? 'Yes' : 'No';
      }

      if($field_row_object['type'] == 'checkbox' || $field_row_object['type'] == 'select'){
        if(is_array($field_row_value)){
          $field_row_value = implode(', ', $field_row_value);
        }
      }

      //$sub_fields .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
      //return $sub_fields;
var_dump($field_row_value);
      return '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
    }//end if have_rows
    //return $return_message;
  //}//end foreach
}
/*    private function get_form_value($field){
      if(isset($field['sub_fields']) && is_array($field['sub_fields'])){
        $sub_fields = '';
        foreach($field['sub_fields'] as $sub_field){
          $this->get_form_value($sub_field);

          $sub_field_value = $sub_field['value'];
          if($sub_field['type'] == 'true_false'){
            $sub_field_value = ($sub_field_value == 1 ? 'Yes' : 'No');
          }
          $sub_fields .= '<p><strong>' . $sub_field['label'] . '</strong><br />' . $sub_field_value . '</p>';
        }

        return $sub_fields;
      }

      if($field['type'] == 'repeater' || $field['type'] == 'group'){
        foreach($field['sub_fields'] as $key => $value){
          $sub_field_label = $value['label'];
          $sub_field_name = $value['name']
          $sub_field_value = $field['value'][$key][$sub_field_name];
        }
      }

      $field_value = $field['value'];
      if($field['type'] == 'true_false'){
        $field_value = ($field_value == 1 ? 'Yes' : 'No');
      }
      return '<p><strong>' . $field['label'] . '</strong><br />' . $field_value . '</p>';
    }
*/


////////////////////////// v2 ////////////////////////////
    public function email_completed_form(){
      $form_groups = $this->step_ids;

      foreach($form_groups as $form_group){
        $form_fields = acf_get_fields($form_group);

        //form section title
        $this->message .= '<h2>' . $form_fields[0]['message'] . '</h2>';

        foreach($form_fields as $form_field){
          if($form_field['type'] != 'message'){

            $this->message .= $this->get_message_line($form_field);

          }
        }//end foreach form_fields
      }//end foreach field_groups

      //send the email
      echo $this->message;

    }//end email_completed_form

    private function get_message_line($form_field){
      if(have_rows($form_field['name'], $this->post_id) && $form_field['type'] != 'checkbox' && $form_field['type'] != 'select'){
        while(have_rows($form_field['name'], $this->post_id)){
          the_row();
          $this->message .= '<h3>' . $form_field['label'] . '</h4>';

          $field_row = get_row();

          foreach($field_row as $field_row_key => $field_row_value){
            $field_row_object = get_sub_field_object($field_row_key, $this->post_id);

            if(is_array($field_row_value) && $field_row_object['type'] != 'checkbox' && $field_row_object['type'] != 'select'){

              foreach($field_row_value as $field_key => $field_value){
                $field_sub_row_object = get_sub_field_object($field_key, $this->post_id);

                $this->message .= $this->get_message_line($field_sub_row_object);
              }//end foreach field_row_value

            }//end if is_array(field_row_value)
            else{
              if($field_row_object['type'] == 'true_false'){
                $field_row_value = $field_row_value == 1 ? 'Yes' : 'No';
              }

              if($field_row_object['type'] == 'checkbox' || $field_row_object['type'] == 'select'){
                if(is_array($field_row_value)){
                  $field_row_value = implode(', ', $field_row_value);
                }
              }
              $this->message .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';

            }//end else is_array($field_row_value)
          }//end foreach field_row
        }//end while
      }//end if have_rows
      else{
        $form_field_value = $form_field['value'];

        if($form_field['type'] == 'true_false'){
          $form_field_value = $form_field['value'] == 1 ? 'Yes' : 'No';
        }

        if($form_field['type'] == 'checkbox' || $form_field['type'] == 'select'){
          if(is_array($form_field_value)){
            $form_field_value = implode(', ', $form_field_value);
          }
        }

        $this->message .= '<p><strong>' . $form_field['label'] . '</strong><br />' . $form_field_value . '</p>';
      }
    }//end get_meassage_line


///////////////////////////////////// line 85, part of have rows
      elseif(is_array($field_row_object['value']) && $field_row_object['type'] != 'checkbox' && $field_row_object['type'] != 'select'){
        foreach($field_row_object['value'] as $field_row_key => $field_row_value){
          $field_row_sub_field_object = get_sub_field_object($field_row_key, $this->post_id);

          $this->message .= $this->get_message_line($field_row_sub_field_object);
        }
