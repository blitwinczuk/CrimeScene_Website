<?php 
	$wp_customize->add_panel( 'wpdevart_gaming_wda_general_settings_panel', 
    array(
		'title'	=> esc_html__('General','gaming-wda'),			
        'description'	=> esc_html__('General Settings','gaming-wda'),		
		'priority'		=> 21
    ) 
	);

	##################------ Fonts ------##################

	$wp_customize->add_section('wpdevart_gaming_wda_fonts_section',array(
		'title'	=> esc_html__('Fonts','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_general_settings_panel'
	));
		
	$wp_customize->add_setting('wpdevart_gaming_wda_global_fonts',array(
		'default'	=> esc_html('Alegreya'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
  
	$wp_customize->add_control('wpdevart_gaming_wda_global_fonts',array(
			'label'	=> esc_html__('Select the font','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_fonts_section',
			'setting'	=> 'wpdevart_gaming_wda_global_fonts',
			'type' => 'select',
			'choices' => array(
				'Roboto' => esc_html__('Roboto', 'gaming-wda'),
				'Poppins' => esc_html__('Poppins', 'gaming-wda'),
				'Open Sans' => esc_html__('Open Sans', 'gaming-wda'),
				'Alegreya' => esc_html__('Alegreya', 'gaming-wda'),
				'Alegreya Sans' => esc_html__('Alegreya Sans', 'gaming-wda'),
				'Lato' => esc_html__('Lato', 'gaming-wda'),
				'Montserrat' => esc_html__('Montserrat', 'gaming-wda'),
				'Oswald' => esc_html__('Oswald', 'gaming-wda'),
				'Raleway' => esc_html__('Raleway', 'gaming-wda'),
				'Inknut Antiqua' => esc_html__('Inknut Antiqua', 'gaming-wda'),
				)
	));

    ##################------ Primary Button ------##################

	$wp_customize->add_section('wpdevart_gaming_wda_primary_button_settings',array(
		'title'	=> esc_html__('Primary Button','gaming-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_gaming_wda_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_primary_button_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_primary_button_bg_color', array(
        'label' => esc_html__('Primary button background color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'settings' => 'wpdevart_gaming_wda_primary_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_primary_button_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_primary_button_border_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_primary_button_border_color', array(
        'label' => esc_html__('Primary button border color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'settings' => 'wpdevart_gaming_wda_primary_button_border_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_primary_button_link_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_primary_button_link_color', array(
        'label' => esc_html__('Primary button text color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'settings' => 'wpdevart_gaming_wda_primary_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_primary_button_bg_hover_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_primary_button_bg_hover_color', array(
        'label' => esc_html__('Primary button background hover color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'settings' => 'wpdevart_gaming_wda_primary_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_primary_button_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_primary_button_border_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_primary_button_border_hover_color', array(
        'label' => esc_html__('Primary button border hover color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'settings' => 'wpdevart_gaming_wda_primary_button_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_primary_button_link_hover_color', esc_html('#ebebeb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_primary_button_link_hover_color', array(
        'label' => esc_html__('Primary button text hover color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'settings' => 'wpdevart_gaming_wda_primary_button_link_hover_color'
    )));

    ##################------ Colors ------##################

	$wp_customize->add_section('wpdevart_gaming_wda_main_colors_settings',array(
		'title'	=> esc_html__('Colors','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_bg_color', array(
        'label' => esc_html__('Main container background color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_main_colors_settings',
        'settings' => 'wpdevart_gaming_wda_main_container_bg_color'
    )));
	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_heading_color', esc_html('#edb23f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_color', array(
        'label' => esc_html__('Main container heading color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_main_colors_settings',
        'settings' => 'wpdevart_gaming_wda_main_container_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_text_color', array(
        'label' => esc_html__('Main container text color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_main_colors_settings',
        'settings' => 'wpdevart_gaming_wda_main_container_text_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_link_color', esc_html('#edb23f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_link_color', array(
        'label' => esc_html__('Main container link color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_main_colors_settings',
        'settings' => 'wpdevart_gaming_wda_main_container_link_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_link_hover_color', array(
        'label' => esc_html__('Main container link hover color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_main_colors_settings',
        'settings' => 'wpdevart_gaming_wda_main_container_link_hover_color'
    )));

	##################------ Sidebar Colors ------##################

	$wp_customize->add_section('wpdevart_gaming_wda_sidebar_colors_settings',array(
		'title'	=> esc_html__('Sidebar Colors','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_sidebar_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_sidebar_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_sidebar_bg_color', array(
		'label' => esc_html__('Widgets background color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_gaming_wda_main_container_sidebar_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_sidebar_shadow_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_sidebar_shadow_color', esc_html('#343434')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_sidebar_shadow_color', array(
		'label' => esc_html__('Widgets shadow color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_gaming_wda_main_container_sidebar_shadow_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_sidebar_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_sidebar_heading_color', esc_html('#edb23f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_sidebar_heading_color', array(
		'label' => esc_html__('Sidebar headings color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_gaming_wda_main_container_sidebar_heading_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_sidebar_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_sidebar_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_sidebar_text_color', array(
		'label' => esc_html__('Sidebar text color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_gaming_wda_main_container_sidebar_text_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_sidebar_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_sidebar_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_sidebar_link_color', array(
		'label' => esc_html__('Sidebar link color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_gaming_wda_main_container_sidebar_link_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_sidebar_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_main_container_sidebar_link_hover_color', esc_html('#edb23f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_sidebar_link_hover_color', array(
		'label' => esc_html__('Sidebar link hover color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_gaming_wda_main_container_sidebar_link_hover_color'
	)));

	##################------ Typography ------##################

	$wp_customize->add_section('wpdevart_gaming_wda_text_link_typography_settings',array(
		'title'	=> esc_html__('Typography','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_text_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_text_font_size',
		array(
		'label' => esc_html__( 'Main container text font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_link_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_link_font_size',
		array(
		'label' => esc_html__( 'Main container link font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_link_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_link_font_weight',array(
			'label'	=> esc_html__('Link font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_link_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_link_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_link_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_link_font_style',array(
			'label'	=> esc_html__('Link font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_link_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_link_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	

	##################------ Typography H1 ------##################

	$wp_customize->add_section('wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',array(
		'title'	=> esc_html__('Typography H1, H2, H3, H4, H5, H6','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_heading_h1_font_size',
    array(
       'default' => esc_html('40'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Heading H1 font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('70'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h1_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h1_font_weight',array(
			'label'	=> esc_html__('Heading H1 font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h1_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h1_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h1_font_style',array(
			'label'	=> esc_html__('Heading H1 font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h1_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h1_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h1_font_transform',array(
			'label'	=> esc_html__('Heading H1 font transform','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h1_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'capitalize' => esc_html__('Capitalize','gaming-wda'),
				'uppercase' => esc_html__('Uppercase','gaming-wda'),
				'lowercase' => esc_html__('Lowercase','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h1_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h1_font_decoration',array(
			'label'	=> esc_html__('Heading H1 font decoration','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h1_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'underline' => esc_html__('Underline','gaming-wda'),
				'line-through' => esc_html__('Line-through','gaming-wda'),
				'overline' => esc_html__('Overline','gaming-wda'),
				)
	));	

	##################------ Typography H2 ------##################

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_heading_h2_font_size',
    array(
       'default' => esc_html('28'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_h2_font_size',
		array(
		'label' => esc_html__( 'Heading H2 font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h2_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h2_font_weight',array(
			'label'	=> esc_html__('Heading H2 font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h2_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h2_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h2_font_style',array(
			'label'	=> esc_html__('Heading H2 font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h2_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h2_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h2_font_transform',array(
			'label'	=> esc_html__('Heading H2 font transform','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h2_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'capitalize' => esc_html__('Capitalize','gaming-wda'),
				'uppercase' => esc_html__('Uppercase','gaming-wda'),
				'lowercase' => esc_html__('Lowercase','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h2_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h2_font_decoration',array(
			'label'	=> esc_html__('Heading H2 font decoration','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h2_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'underline' => esc_html__('Underline','gaming-wda'),
				'line-through' => esc_html__('Line-through','gaming-wda'),
				'overline' => esc_html__('Overline','gaming-wda'),
				)
	));	

	##################------ Typography H3 ------##################

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_heading_h3_font_size',
    array(
       'default' => esc_html('24'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_h3_font_size',
		array(
		'label' => esc_html__( 'Heading H3 font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h3_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h3_font_weight',array(
			'label'	=> esc_html__('Heading H3 font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h3_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h3_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h3_font_style',array(
			'label'	=> esc_html__('Heading H3 font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h3_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h3_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h3_font_transform',array(
			'label'	=> esc_html__('Heading H3 font transform','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h3_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'capitalize' => esc_html__('Capitalize','gaming-wda'),
				'uppercase' => esc_html__('Uppercase','gaming-wda'),
				'lowercase' => esc_html__('Lowercase','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h3_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h3_font_decoration',array(
			'label'	=> esc_html__('Heading H3 font decoration','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h3_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'underline' => esc_html__('Underline','gaming-wda'),
				'line-through' => esc_html__('Line-through','gaming-wda'),
				'overline' => esc_html__('Overline','gaming-wda'),
				)
	));	

	##################------ Typography H4 ------##################

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_heading_h4_font_size',
    array(
       'default' => esc_html('23'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_h4_font_size',
		array(
		'label' => esc_html__( 'Heading H4 font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h4_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h4_font_weight',array(
			'label'	=> esc_html__('Heading H4 font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h4_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h4_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h4_font_style',array(
			'label'	=> esc_html__('Heading H4 font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h4_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h4_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h4_font_transform',array(
			'label'	=> esc_html__('Heading H4 font transform','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h4_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'capitalize' => esc_html__('Capitalize','gaming-wda'),
				'uppercase' => esc_html__('Uppercase','gaming-wda'),
				'lowercase' => esc_html__('Lowercase','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h4_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h4_font_decoration',array(
			'label'	=> esc_html__('Heading H4 font decoration','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h4_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'underline' => esc_html__('Underline','gaming-wda'),
				'line-through' => esc_html__('Line-through','gaming-wda'),
				'overline' => esc_html__('Overline','gaming-wda'),
				)
	));	

	##################------ Typography H5 ------##################

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_heading_h5_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_h5_font_size',
		array(
		'label' => esc_html__( 'Heading H5 font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h5_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h5_font_weight',array(
			'label'	=> esc_html__('Heading H5 font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h5_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h5_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h5_font_style',array(
			'label'	=> esc_html__('Heading H5 font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h5_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h5_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h5_font_transform',array(
			'label'	=> esc_html__('Heading H5 font transform','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h5_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'capitalize' => esc_html__('Capitalize','gaming-wda'),
				'uppercase' => esc_html__('Uppercase','gaming-wda'),
				'lowercase' => esc_html__('Lowercase','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h5_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h5_font_decoration',array(
			'label'	=> esc_html__('Heading H5 font decoration','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h5_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'underline' => esc_html__('Underline','gaming-wda'),
				'line-through' => esc_html__('Line-through','gaming-wda'),
				'overline' => esc_html__('Overline','gaming-wda'),
				)
	));	

	##################------ Typography H6 ------##################

    $wp_customize->add_setting( 'wpdevart_gaming_wda_main_container_heading_h6_font_size',
    array(
       'default' => esc_html('20'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_main_container_heading_h6_font_size',
		array(
		'label' => esc_html__( 'Heading H6 font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h6_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h6_font_weight',array(
			'label'	=> esc_html__('Heading H6 font weight','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h6_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','gaming-wda'),
				'400' => esc_html__('Normal 400','gaming-wda'),
				'600' => esc_html__('Semi-Bold 600','gaming-wda'),
				'800' => esc_html__('Extra-Bold 800','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h6_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h6_font_style',array(
			'label'	=> esc_html__('Heading H6 font style','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h6_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','gaming-wda'),
				'italic' => esc_html__('Italic','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h6_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h6_font_transform',array(
			'label'	=> esc_html__('Heading H6 font transform','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h6_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'capitalize' => esc_html__('Capitalize','gaming-wda'),
				'uppercase' => esc_html__('Uppercase','gaming-wda'),
				'lowercase' => esc_html__('Lowercase','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_main_container_heading_h6_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_main_container_heading_h6_font_decoration',array(
			'label'	=> esc_html__('Heading H6 font decoration','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_gaming_wda_main_container_heading_h6_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','gaming-wda'),
				'underline' => esc_html__('Underline','gaming-wda'),
				'line-through' => esc_html__('Line-through','gaming-wda'),
				'overline' => esc_html__('Overline','gaming-wda'),
				)
	));