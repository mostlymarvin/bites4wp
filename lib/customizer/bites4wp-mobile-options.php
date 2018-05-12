<?php
/** 
 * Bites4WP Display Options
 *  
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 */


add_action( 'customize_register' ,'bites4wp_mobile_options_register_customizer'  );

   function bites4wp_mobile_options_register_customizer( $wp_customize ) {
  
         $wp_customize->add_section( 
            'bites4wp_display_settings_section', 
               array(
                  'title' => __( 'Display Options', 'bites4wp' ),
                  'description' => 'Customize the display and position of the Book+Main floating icon on desktop and mobile devices. <em>(Fine tune with custom css, targeting ".biteslink .biteslink-profile-link a".)</em>',
                  'priority' => 20,
                  'panel' => 'bites4wp_panel',
               ) );

         //Option to turn on/off the floating icon
         $wp_customize->add_setting( 
            'bites4wp[show_floating_icon]',
               array(
                  'capability'        => 'edit_theme_options',
                  'default'           => 'all',
                  'sanitize_callback' => 'bites4wp_sanitize_select',
                  'transport'         => 'postMessage',
                  'type'              => 'option',
               ) );


         $wp_customize->add_control( 
            'bites4wp[show_floating_icon]', 
               array(
                  'label'    => __( 'Enable floating icon?', 'bites4wp' ),
                  'section' => 'bites4wp_display_settings_section',
                  'settings'  => 'bites4wp[show_floating_icon]', 
                  'priority' => 1,
                  'type'     => 'select',
                  'choices'  => array(
                     'all'     => 'Enable Everywhere',
                     'home'    => 'Enable on Home only',
                     'none'    => 'Disable Floating Icon',
               ),
               ) );


         $wp_customize->add_setting( 
            'bites4wp[position]',
               array(
                  'capability'        => 'edit_theme_options',
                  'default'           => 'right-center',
                  'sanitize_callback' => 'bites4wp_sanitize_select',
                  'transport'         => 'postMessage',
                  'type'              => 'option',
               ) );


         $wp_customize->add_control( 
            'bites4wp[position]', 
               array(
                  'label'    => __( 'Position on desktop:', 'bites4wp' ),
                  'section'  => 'bites4wp_display_settings_section',
                  'priority' => 20,
                  'settings' => 'bites4wp[position]',
                  'type'     => 'select',
                  'choices'  => array(
                     'right-center'   => 'Right Center',
                     'right-top'      => 'Right Top',
                     'bottom-right'   => 'Right Bottom',
                     'bottom-left'    => 'Left Bottom',
                     'left-center'    => 'Left Center',
                     'bottom-center'  => 'Bottom Center',
                  ),
               ) );


         //Option to turn on/off the floating icon on mobile
         $wp_customize->add_setting( 
            'bites4wp[show_floating_icon_mobile]',
               array(
                  'capability'        => 'edit_theme_options',
                  'default'           => 'right',
                  'sanitize_callback' => 'bites4wp_sanitize_select',
                  'transport'         => 'postMessage',
                  'type'              => 'option',
               ) );



         $wp_customize->add_control( 
            'bites4wp[show_floating_icon_mobile]', 
               array(
                  'label'     => __( 'Position on mobile devices:', 'bites4wp' ),
                  'section'   => 'bites4wp_display_settings_section',
                  'settings'  => 'bites4wp[show_floating_icon_mobile]', 
                  'priority'  => 100,
                  'type'      => 'select',
                  'choices'   => array(
                     'right'      => 'Fix to Right Side',
                     'left'   => 'Fix to Left Side',
                     'none'     => 'DISABLE on mobile',
                     ),
               ) );

   }//end register

