<?php get_header(); ?>

<?php

  /*$test = 'additional_contacts';
  if(have_rows($test, 1271)){
    while(have_rows($test, 1271)){
      the_row();
      $test_row = get_row();
      foreach($test_row as $row_key => $row_value){
        $row_object = get_sub_field_object($row_key, 1271);
        $row_label = $row_object['label'];

        if($row_object['type'] == 'checkbox'){
          $checkbox_values = implode(', ', $row_object['value']);
          echo '<p>' . $row_label . '<br />' . $checkbox_values . '</p>';
        }

      }

      print '<pre>';
      //print_r(get_field_object('field_5cd09c9b7a368', 1271));
      //print_r(get_sub_field_object('field_5cd09cd47a369', 1271));
      //print_r(get_sub_field_object('field_5cd09d157a36c', 1271));
      //print_r($row_label);
      print '</pre>';
    }
  }*/



print '<pre>';
//print_r(get_field_object('field_5cd09c9b7a368', 1271));
print_r(get_field_objects(1271));
print '</pre>';

?>

<?php get_footer();


/*
private function get_message_line($field_row, $post_id){
  foreach($field_row as $field_row_key => $field_row_value){
    $field_row_object = get_sub_field_object($field_row_key, $post_id);

    if(have_rows($field_row_object['name'], $post_id) && $field_row_object['type'] != 'checkbox' && $field_row['type'] != 'select'){
      $sub_fields = '';
      while(have_rows($field_row_object['name'], $post_id)){
        the_row();
        $field_row = get_row();

        $this->get_message_line($field_row, $post_id);
        $sub_fields .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
      }
      return $sub_fields;
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

      return '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
    }//end if have_rows
  }//end foreach
}


private function get_message_line($field_row, $post_id){
  //$return_message = '';
      //$sub_fields = '';
  foreach($field_row as $field_row_key => $field_row_value){
    $field_row_object = get_sub_field_object($field_row_key, $post_id);

    if(have_rows($field_row_object['name'], $post_id) && $field_row_object['type'] != 'checkbox' && $field_row['type'] != 'select'){
      while(have_rows($field_row_object['name'], $post_id)){
        the_row();
        $sub_field_row = get_row();

        foreach($sub_field_row as $sub_field_key => $sub_field_value){
          $sub_field_row_object = get_sub_field_object($sub_field_key, $post_id);
          echo $this->get_message_line($sub_field_row_object, $post_id);
        }
        //$sub_fields .= '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
      }
      //return $sub_fields;
    }
    //else{
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

      return '<p><strong>' . $field_row_object['label'] . '</strong><br />' . $field_row_value . '</p>';
    //}//end if have_rows
    //return $return_message;
  }//end foreach
}
*/