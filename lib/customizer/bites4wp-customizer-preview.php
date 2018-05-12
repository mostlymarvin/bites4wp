<?php
/** 
 * Bites4WP Customizer Preview
 *  
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 */

 //Add Live Preview to Customizer
add_action( 'customize_preview_init', 'bites4wp_customizer_live_preview' );

    function bites4wp_customizer_live_preview() {
     
        wp_enqueue_script( 
            'bites4wp-customizer',     
            BITES4WP_PLUGIN_URL . '/assets/js/bites4wp-customizer-preview.js',
            array( 'jquery','customize-preview' ),  
            '',           
            false 
          );
      } 