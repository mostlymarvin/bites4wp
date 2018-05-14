<?php
/**
 * Bites4WP - Setup
 * 
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 * 
 */

add_filter( 'plugin_action_links_' . BITES4WP_PLUGIN_BASENAME, 'bites4wp_action_links' );

      function bites4wp_action_links( $links ) {
         $donate_url = 'https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=hellos@memphismckay.com&lc=US&item_name=Bites4WP&no_shipping=2&curency_code=USD&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHosted';

         $documentation_url = 'http://bites4wp.memphismckay.com';
         $setup_url = admin_url( '/customize.php?autofocus[panel]=bites4wp_panel' );

         $links[] = '<a href="' . esc_url( $setup_url ) . '">' . __( 'Settings', 'bites4wp' ) . '</a>';
         $links[] = '<a href="'.  esc_url( $documentation_url ) . '" target="_blank">' . __( 'Support', 'bites4wp') . '</a>';
         $links[] = '<br/><b><a href="'.  esc_url( $donate_url ) . '" target="_blank">' . __( 'Find this plugin useful? Buy me a cup of coffee!', 'bites4wp' ) . '</a></b>';
         
         return $links;
      }

      
 add_action ( 'wp_enqueue_scripts', 'bites4wp_scripts' );
  
    function bites4wp_scripts() {

        $version = BITES4WP_CURRENT_VERSION;

        wp_register_style( 
          'bites4wp', 
          BITES4WP_PLUGIN_URL . 'assets/css/bites4wp.css',
          '', 
          $version 
          );

        wp_enqueue_style( 'bites4wp' );
      }   



//Add a body class just in case we need it
add_filter( 'body_class', 'bites4wp_body_class' );
 
    function bites4wp_body_class( $classes ) {

        $bites4wp_class = 'bites4wp-active';

        $classes[] = esc_attr( $bites4wp_class );
        return $classes;
      }