<?php
/**
 * Bites4WP - Floating Icon Display
 * 
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 * 
 */

add_action( 'wp_footer', 'bites4wp_display' );

    function bites4wp_display() {

        $show_floating_icon = 'all';

        $bites4wp = get_option( 'bites4wp' );

        if( isset( $bites4wp['show_floating_icon'] ) ) {
            $show_floating_icon = $bites4wp['show_floating_icon'];
        }
        
        $templates = new Bites4WP_Template_Loader;

        if( $show_floating_icon === 'all' ) {

           $templates->get_template_part( 'bites4wp', 'floating-icon' );
           
        } elseif ( $show_floating_icon === 'home' && is_front_page() ) {

            $templates->get_template_part( 'bites4wp', 'floating-icon' );

        } else {

            return;
        }
    }