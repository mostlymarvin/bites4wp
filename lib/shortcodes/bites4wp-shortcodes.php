<?php
/**
 * Bites4WP Shortcode
 * 
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 * 
 */

add_shortcode( 'bites_link', 'bites4wp_shortcode' );

   function bites4wp_shortcode( $atts , $content = null ) {
      
      // Attributes
      extract( shortcode_atts(
        array(
          'align' => 'center',
          'class' => false,
          'text' => 'Follow me on Book+Main Bites',
          'username'  => false,
          ), $atts )
      );

      $allow_align = array( 'left', 'right', 'center', 'none' );

      if( in_array( $align, $allow_align ) ) {
        $align = $align;
      } else {
        $align = 'center';
      }

      $bites4wp = get_option( 'bites4wp' );
      $bites_username = esc_attr( $username );

      $sc_class = 'biteslink-shortcode';

      if( $class ) {
        $sc_class .= ' ' . strip_tags( $class );
      }

      if( $align == 'center' ) {
        $sc_class .= ' bites-center center-block';
      } else {
        $sc_class .= ' bites-' . $align;
      }

      if( !$bites_username && isset( $bites4wp[ 'user' ] ) ) {
        $bites_username = $bites4wp[ 'user' ];
      } else {
        $bites_username = '';
      }

      $bites4wp_url = 'https://bookandmainbites.com/' . $bites_username;

      $templates = new Bites4WP_Template_Loader;

      ob_start();
      $templates->get_template_part( 'bites4wp', 'svg' );

      $output = '<div class="' . esc_attr( $sc_class ) . '">';
      $output .= '<div class="biteslink-profile-link">';
      $output .= '<a href="' . esc_url( $bites4wp_url ) . '">';
      $output .= '<span class="biteslink-sc-text">' . stripslashes( wp_kses_post( $text ) ) . '</span>';
      $output .= ob_get_clean();
      $output .= '</a></div></div>';

      return $output;
      
   }

 