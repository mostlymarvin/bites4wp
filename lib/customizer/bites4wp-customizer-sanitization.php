<?php
/** 
 * Bites4WP Customizer Sanitization Functions
 *  
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 */

//Checkbox
function bites4wp_color_sanitize_checkbox( $input ) {

   if ( $input == 1 ) {
         return 1;
      } else {
         return '';
      }
}

//Color 
function bites4wp_color_sanitize_integer( $input ) {
    
   return absint( $input );
}
 

//Textarea
function bites4wp_color_sanitize_textarea( $text ) {
   $text = strip_tags( $text );
   return wp_kses_post( $text );
}


//Select
function bites4wp_sanitize_select( $input, $setting ) {
   
   // Ensure input is a slug.
   $input = sanitize_key( $input );
   
   // Get list of choices from the control associated with the setting.
   $choices = $setting->manager->get_control( $setting->id )->choices;
   
   // If the input is a valid key, return it; otherwise, return the default.
   return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
   }


//String
function bites4wp_sanitize_string( $input ) {
   return strip_tags( $input );
   }


//Checkbox
function bites4wp_sanitize_checkbox( $checked ) {
   // Boolean check.
   return ( ( isset( $checked ) && true == $checked ) ? true : false );
   }

   
//Number
function bites4wp_sanitize_number_absint( $number, $setting ) {
  // Ensure $number is an absolute integer (whole number, zero or greater).
  $number = absint( $number );

  // If the input is an absolute integer, return it; otherwise, return the default
  return ( $number ? $number : $setting->default );
  }