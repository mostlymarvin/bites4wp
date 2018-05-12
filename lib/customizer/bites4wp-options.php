<?php
/**
 * Bites4WP Options
 *
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 *
 */

add_action( 'customize_register' ,'bites4wp_register_customizer'  );

  function bites4wp_register_customizer($wp_customize) {

      $wp_customize->add_panel( 'bites4wp_panel', array(
          'title' => 'Book+Main Bites',
          'description' => '',
          'priority' => 1,
        ) );


      $wp_customize->add_section( 
        'bites4wp_settings_section', 
            array(
              'title' => 'Profile Settings',
              'description' => 'Profile can be displayed using the Book+Main the floating icon display or by using the shortcode "[bites4wp]"',
              'priority' => 10,
              'panel' => 'bites4wp_panel',
        ) );

      $wp_customize->add_setting( 
        'bites4wp[user]', 
            array(
                'default'           => '',
                'type'              => 'option',
                'capability'        => 'manage_options',
                'transport'         => 'postMessage',
                'sanitize_callback' => 'bites4wp_sanitize_string'
        ) );

      $wp_customize->add_control( 
        'bites4wp[user]', 
            array(
              'settings' => 'bites4wp[user]',
              'label'    => 'Book+Main Bites Profile username',
              'section'  => 'bites4wp_settings_section',
              'type'     => 'text',
        ) );
      
  }//end register

