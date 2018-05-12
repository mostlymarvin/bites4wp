<?php
/**
 * Bites4WP - Custom CSS for Icon + Background
 * 
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 * 
 */


add_action( 'wp_head', 'bites4wp_color_custom_css' );

   function bites4wp_color_custom_css(){ 
    
         $bites4wp = get_option( 'bites4wp' );

         $button_bg = isset( $bites4wp['color_button_background'] ) ? esc_html( $bites4wp['color_button_background'] ) : '#f4f4f4';
         $button_color = isset( $bites4wp['color_button_text_color'] ) ? esc_html( $bites4wp['color_button_text_color'] ) : '#e74360';
         $border_color = isset( $bites4wp['border_color'] ) ? esc_html( $bites4wp['border_color'] ) : '#e74360';
         $border_hover_color = isset( $bites4wp['border_hover_color'] ) ? esc_html( $bites4wp['border_hover_color'] ) : '#e74360';

         $hover_bg = isset( $bites4wp['color_button_hover_background'] ) ? $bites4wp['color_button_hover_background'] : '#f4f4f4';
         $hover_color = isset( $bites4wp['color_button_hover_text_color'] ) ? $bites4wp['color_button_hover_text_color'] : '#e74360';

         $bites4wp_grayscale = isset( $bites4wp['color_grayscale_button'] ) ? $bites4wp['color_grayscale_button'] : false;

         $bites4wp_radius = isset( $bites4wp['color_border_radius'] ) ? $bites4wp['color_border_radius'] : 3;

         $bites4wp_border = isset( $bites4wp['border_button'] ) ? $bites4wp['border_button'] : false;

         $letterspacing = isset( $bites4wp['letterspacing'] ) ? $bites4wp['letterspacing'] : 0;

         $fontweight = isset( $bites4wp['fontweight'] ) ? $bites4wp['fontweight'] : 400;
      
         $fontsize = isset( $bites4wp['fontsize'] ) ? $bites4wp['fontsize'] : 16;

         $texttransform = isset( $bites4wp['texttransform'] ) ? $bites4wp['texttransform'] : 'none';

         $fontstyle = isset( $bites4wp['fontstyle'] ) ? $bites4wp['fontstyle'] : 'none';

         $bites4wp_css = isset( $bites4wp['color_custom_css'] ) ? $bites4wp['color_custom_css'] : '';

         ?>
            <style type="text/css">
            .biteslink-profile-link a {
                  <?php echo 'background-color:' . esc_html( $button_bg ) . ';'; ?> 
                  <?php echo 'border-radius:' . intval( $bites4wp_radius ) . 'px;'; ?>   
                  <?php if( $bites4wp_grayscale == true ) { ?>
                  -webkit-filter: grayscale(100%);filter: grayscale(100%); <?php } ?>
                  <?php if( $bites4wp_border == true ) { 
                  echo 'border: 2px solid ' . esc_html( $border_color ) . ';';
                  echo 'border-bottom: 2px solid ' . esc_html( $border_color ) . '!important;';} ?> } 
            .biteslink-profile-link a span {
                  <?php echo 'color:' . esc_html( $button_color ) . ';';  
                        echo 'letter-spacing:' . absint( $letterspacing ) . 'px;'; 
                        echo 'font-weight:' . absint( $fontweight ) . ';'; 
                        echo 'text-transform:' . esc_html( $texttransform ) . ';'; 
                        echo 'font-size:' . absint( $fontsize ) . 'px;'; 
                        echo 'font-style:' . esc_html( $fontstyle ) . ';'; 
                  ?> }
            .biteslink-profile-link a #bites-logo {
                  <?php echo 'fill:' . esc_html( $button_color ) . ';';  ?> }
            .biteslink-profile-link a:hover, 
            .biteslink-profile-link:hover a  {
                  <?php echo 'background-color:' . esc_html( $hover_bg ) . ';';  ?> 
                  <?php if( $bites4wp_grayscale == true ) { ?>
                  -webkit-filter: grayscale(0%);
                  filter: grayscale(0%); <?php } ?>
                  <?php if( $bites4wp_border == true ) { 
                  echo 'border: 2px solid' . esc_html( $border_hover_color ) . ';';
                  echo 'border-bottom: 2px solid' . esc_html( $border_hover_color ) . '!important;'; } ?> } 
            .biteslink-profile-link a:hover #bites-logo, 
            .biteslink-profile-link:hover a #bites-logo {
                  <?php echo 'fill:' . esc_html( $hover_color ) . ';';  ?> } 
            .biteslink-profile-link a:hover span,
            .biteslink-profile-link:hover a span {
                  <?php echo 'color:' . esc_html( $hover_color ) . ';';  ?>}
                  <?php if(!empty( $bites4wp_css ) ) { echo wp_kses_post( $bites4wp_css ); } ?>
            </style>
      <?php 
   }