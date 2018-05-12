<?php
/** 
 * Bites4WP Display Customizer Options
 *  
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 */

add_action( 'customize_register' ,'bites4wp_colors_register_customizer'  );

    function bites4wp_colors_register_customizer($wp_customize) {

        $wp_customize->add_section( 
          'bites4wp_color_settings_section', 
              array(
                  'title' => __( 'Style Options', 'bites4wp' ),
                  'description' => __( 'Customize the colors and style of the Book+Main Link Button, and (optionally) add custom CSS', 'bites4wp' ),
                  'priority' => 20,
                  'panel' => 'bites4wp_panel',
            ) );

        //Custom CSS
        $wp_customize->add_setting(
          'bites4wp[color_custom_css]', 
              array(
                  'default'           => '',
                  'type'              => 'option',
                  'capability'        => 'manage_options',
                  'transport'         => 'postMessage',
                  'sanitize_callback' => 'bites4wp_color_sanitize_textarea'
            ) );

        
        $wp_customize->add_control( 
          'bites4wp_color_custom_css_input', 
              array(
                  'label'      => __( 'Custom CSS', 'bites4wp' ),
                  'section'  => 'bites4wp_color_settings_section',
                  'settings' => 'bites4wp[color_custom_css]',
                  'type'     => 'textarea',
                  'priority'   => 100
            ) );

        //Background Color 
        $wp_customize->add_setting(
          'bites4wp[color_button_background]', 
              array(
                  'default'           => '#f4f4f4',
                  'type'              => 'option',
                  'capability'        => 'manage_options',
                  'transport'         => 'postMessage',
            ) );

        
        $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
          'bites4wp_color_button_background_input', 
              array(
                  'label'      => __( 'Background color', 'bites4wp' ),
                  'section'    => 'bites4wp_color_settings_section',
                  'settings'   => 'bites4wp[color_button_background]',
                  'priority'   => 20
                ) 
            ) );

        //Text Color 
        $wp_customize->add_setting(
          'bites4wp[color_button_text_color]', 
              array(
                  'default'           => '#e74360',
                  'type'              => 'option',
                  'capability'        => 'manage_options',
                  'transport'         => 'postMessage',
            ) );

        
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'bites4wp_color_button_text_color_input', 
              array(
                  'label'      => __( 'Icon + Text color', 'bites4wp' ),
                  'section'    => 'bites4wp_color_settings_section',
                  'settings'   => 'bites4wp[color_button_text_color]',
                  'priority'   => 10
              ) ) 
              );

        //Hover State Background
        $wp_customize->add_setting(
          'bites4wp[color_button_hover_background]', 
            array(
                'default'           => '#f4f4f4',
                'type'              => 'option',
                'capability'        => 'manage_options',
                'transport'         => 'postMessage',
                ) );


        $wp_customize->add_control( 
          new WP_Customize_Color_Control( 
          $wp_customize, 
          'bites4wp_color_button_hover_background_input', 
              array(
                  'label'      => __( 'Hover Background color', 'bites4wp' ),
                  'section'    => 'bites4wp_color_settings_section',
                  'settings'   => 'bites4wp[color_button_hover_background]',
                  'priority'   => 40
              ) ) 
              );

        //Hover Text Color 
        $wp_customize->add_setting(
          'bites4wp[color_button_hover_text_color]', 
              array(
                  'default'           => '#e74360',
                  'type'              => 'option',
                  'capability'        => 'manage_options',
                  'transport'         => 'postMessage',
            ) );

        
        $wp_customize->add_control( 
          new WP_Customize_Color_Control( 
          $wp_customize, 
          'bites4wp_color_button_hover_text_color_input', 
              array(
                  'label'      => __( 'Hover Icon + Text color', 'bites4wp' ),
                  'section'    => 'bites4wp_color_settings_section',
                  'settings'   => 'bites4wp[color_button_hover_text_color]',
                  'priority'   => 20
              ) ) 
          );

        //Border Option
        $wp_customize->add_setting( 
          'bites4wp[border_button]', 
            array(
                'default'        => false,
                'type'           => 'option',
                'capability'     => 'manage_options',
                'sanitize_callback' => 'bites4wp_color_sanitize_checkbox',
                'transport'      => 'postMessage'
          ) );

        $wp_customize->add_control( 
        'bites4wp[border_button]', 
            array(
                'label'    => __( 'Add Border?', 'bites4wp' ),
                'section'  => 'bites4wp_color_settings_section',
                'settings' => 'bites4wp[border_button]',
                'type' => 'checkbox',
                'priority' => 42,
        ) );

        //Border Color
        $wp_customize->add_setting(
          'bites4wp[border_color]', 
            array(
                'default'           => '#e74360',
                'type'              => 'option',
                'capability'        => 'manage_options',
                'transport'         => 'postMessage',
        ) );


    
        $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
          'bites4wp[border_color]', 
            array(
              'label'      => __( 'Border color', 'bites4wp' ),
              'section'    => 'bites4wp_color_settings_section',
              'settings'   => 'bites4wp[border_color]',
              'priority'   => 44,
              ) ) 
          );

        //Border Color - Hover
        $wp_customize->add_setting(
          'bites4wp[border_hover_color]', 
            array(
              'default'           => '#e74360',
              'type'              => 'option',
              'capability'        => 'manage_options',
              'transport'         => 'postMessage',
          ) );

        
        $wp_customize->add_control( 
          new WP_Customize_Color_Control( 
          $wp_customize, 
          'bites4wp[border_hover_color]', 
            array(
                'label'      => __( 'Hover border color', 'bites4wp' ),
                'section'    => 'bites4wp_color_settings_section',
                'settings'   => 'bites4wp[border_hover_color]',
                'priority'   => 46,
                ) ) 
          );

        //Grayscale Option
        $wp_customize->add_setting(
          'bites4wp[color_grayscale_button]', 
            array(
              'default'        => false,
              'type'           => 'option',
              'capability'     => 'manage_options',
              'sanitize_callback' => 'bites4wp_color_sanitize_checkbox',
              'transport'      => 'postMessage'
          ) );


        $wp_customize->add_control( 
          'bites4wp_color_grayscale_button_input', 
            array(
              'label'    => __( 'Add grayscale filter?', 'bites4wp' ),
              'description' => __( 'icons appear grayscale, until hovered over, when custom colors appear.'),
              'section'  => 'bites4wp_color_settings_section',
              'settings' => 'bites4wp[color_grayscale_button]',
              'type' => 'checkbox',
              'priority' => 60
          ) );


        //Border Radius
        $wp_customize->add_setting( 
          'bites4wp[color_border_radius]', 
            array(
              'default' => 3,
              'type' => 'option',
              'capability' => 'manage_options',
              'transport' => 'postMessage',
              'sanitize_callback' => 'bites4wp_color_sanitize_integer',
          ) );

        $wp_customize->add_control( 
          'bites4wp_color_border_radius_input', 
            array(
              'label' => __( 'Icon border-radius', 'bites4wp' ),
              'priority' => 50,
              'section' => 'bites4wp_color_settings_section',
              'settings' => 'bites4wp[color_border_radius]',
              'type' => 'range',
              'input_attrs' => array(
                'step' => 1,
                'max' => 40,
                'min' => 0,
              ),
          ) );

        $wp_customize->add_setting( 
          'bites4wp[fontsize]', 
              array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'bites4wp_sanitize_number_absint',
                'type' => 'option',
                'transport' => 'postMessage',
                'default' => 16,
        ) );

        $wp_customize->add_control( 
          'bites4wp[fontsize]', 
              array(
                'description' => __( 'applies to shortcode text.' ),
                'label' => __( 'Font Size' ),
                'priority' => 78,
                'section' => 'bites4wp_color_settings_section',
                'setting' =>  'bites4wp[fontsize]', 
                'type' => 'number',
                'input_attrs' => array(
                  'step' => 1,
                  'max' => 48,
                  'min' => 10,
              ),
        ) );

        $wp_customize->add_setting( 
          'bites4wp[fontweight]',
              array(
                'capability'        => 'edit_theme_options',
                'default'           => 600,
                'sanitize_callback' => 'bites4wp_sanitize_number_absint',
                'transport'         => 'postMessage',
                'type'              => 'option',
              ) );

        $wp_customize->add_control( 
          'bites4wp[fontweight]', 
              array(
                'label'     => __( 'Font Weight:', 'bites4wp' ),
                'description' => __( 'applies to shortcode text.' ),
                'section'   => 'bites4wp_color_settings_section',
                'settings'  => 'bites4wp[fontweight]', 
                'priority'  => 80,
                'type'      => 'number',
                'input_attrs' => array(
                  'step' => 100,
                  'max' => 900,
                  'min' => 100,
              ),
              ) );

        $wp_customize->add_setting( 
          'bites4wp[letterspacing]', 
              array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'bites4wp_sanitize_number_absint',
                'type' => 'option',
                'transport' => 'postMessage',
                'default' => 0,
        ) );

        $wp_customize->add_control( 
          'bites4wp[letterspacing]', 
              array(
                'description' => __( 'applies to shortcode text.' ),
                'label' => __( 'Letter Spacing' ),
                'priority' => 90,
                'section' => 'bites4wp_color_settings_section',
                'setting' =>  'bites4wp[letterspacing]', 
                'type' => 'number',
                'input_attrs' => array(
                  'step' => 1,
                  'max' => 100,
                  'min' => 0,
              ),
        ) );

        $wp_customize->add_setting( 
          'bites4wp[texttransform]',
              array(
                'capability'        => 'edit_theme_options',
                'default'           => 'none',
                'sanitize_callback' => 'bites4wp_sanitize_select',
                'transport'         => 'postMessage',
                'type'              => 'option',
              ) );

        $wp_customize->add_control( 
          'bites4wp[texttransform]', 
              array(
                'label'     => __( 'Text Transform:', 'bites4wp' ),
                'description' => __( 'applies to shortcode text.' ),
                'section'   => 'bites4wp_color_settings_section',
                'settings'  => 'bites4wp[texttransform]', 
                'priority'  => 81,
                'type'      => 'select',
                'choices'   => array(
                    'none'     => 'None',
                    'uppercase'     => 'Uppercase',
                    'lowercase'     => 'Lowercase',
                    'capitalize'     => 'Capitalize',
                    ),
              ) );
        $wp_customize->add_setting( 
          'bites4wp[fontstyle]',
              array(
                'capability'        => 'edit_theme_options',
                'default'           => 'normal',
                'sanitize_callback' => 'bites4wp_sanitize_select',
                'transport'         => 'postMessage',
                'type'              => 'option',
              ) );

        $wp_customize->add_control( 
          'bites4wp[fontstyle]', 
              array(
                'label'     => __( 'Font Style:', 'bites4wp' ),
                'description' => __( 'applies to shortcode text.' ),
                'section'   => 'bites4wp_color_settings_section',
                'settings'  => 'bites4wp[fontstyle]', 
                'priority'  => 79,
                'type'      => 'select',
                'choices'   => array(
                    'normal'     => 'Normal',
                    'italic'     => 'Italic',
                    'initial'     => 'Initial',
                    'inherit' => 'Inherit',
                    ),
              ) );


    }//end register

        