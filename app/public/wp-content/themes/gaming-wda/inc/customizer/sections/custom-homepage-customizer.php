<?php
	$wp_customize->add_panel( 'wpdevart_gaming_wda_custom_homepage_panel', 
    array(
		'title'	=> esc_html__('Custom Homepage','gaming-wda'),
        'description'	=> esc_html__('Customize the theme custom homepage','gaming-wda'),		
		'priority'		=> 28
    ) 
	);
	$wp_customize->add_section('wpdevart_gaming_wda_custom_homepage_section',array(
		'title'	=> esc_html__('Enable Custom Homepage','gaming-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_custom_homepage_panel'
	));
    $wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_display_option',
    array(
       'default' => esc_html('1'),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_gaming_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_display_option',
        array(
        'label' => esc_html__( 'Enable custom homepage', 'gaming-wda' ),
		'description' => esc_html__( 'Display custom homepage instead of the latest posts', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_section'
        )
    ) );
	
	$wp_customize->add_section('wpdevart_gaming_wda_custom_homepage_banner_section',array(
		'title'	=> esc_html__('Banner Section','gaming-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_custom_homepage_panel'
	));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_theme',array(
		'default'	=> esc_html('banner-first-theme'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_banner_theme',array(
			'label'	=> esc_html__('Banner Theme','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_banner_theme',
			'type' => 'select',
			'choices' => array(
				'banner-first-theme' => esc_html__('First Theme', 'gaming-wda'),
				'banner-second-theme' => esc_html__('Second Theme', 'gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_homepage_large_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_homepage_large_banner_bg_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_homepage_large_banner_bg_color', array(
        'label' => esc_html__('Banner background color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_homepage_large_banner_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_homepage_large_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_homepage_large_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_gaming_wda_homepage_large_banner_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','gaming-wda'),
				'to left' => esc_html__('To left','gaming-wda'),
				'to bottom' => esc_html__('To bottom','gaming-wda'),
				'to top' => esc_html__('To top','gaming-wda'),
				'to bottom right' => esc_html__('To bottom right','gaming-wda'),
				'to bottom left' => esc_html__('To bottom left','gaming-wda'),
				'to top right' => esc_html__('To top right','gaming-wda'),
				'to top left' => esc_html__('To top left','gaming-wda'),
				)
	));
	$wp_customize->add_setting('wpdevart_gaming_wda_homepage_large_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_homepage_large_banner_bg_gradient_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_homepage_large_banner_bg_gradient_color', array(
        'label' => esc_html__('Banner background gradient color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_homepage_large_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_short_description',array(
		'default'	=> esc_html('Gaming is Our Passion, Welcome to the World of Gaming!'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_short_description',
            array(
                'label'    => esc_html__('Banner short description','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_short_description',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_banner_short_description_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_short_description_font_size',
		array(
		'label' => esc_html__( 'Short description font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('35'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_short_description_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_banner_short_description_color', esc_html('#edb23f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_short_description_color', array(
        'label' => esc_html__('Short description color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_short_description_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_title',array(
		'default'	=> esc_html('WDA Gamezone'),'gaming-wda',
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_title',
            array(
                'label'    => esc_html__('Banner title','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_title',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_banner_title_font_size',
    array(
       'default' => esc_html('43'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('90'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_banner_title_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_title_color', array(
        'label' => esc_html__('Banner title color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_title_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_sliding_first_text',array(
		'default'	=> esc_html('Live Streaming'),'gaming-wda',
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_sliding_first_text',
            array(
                'label'    => esc_html__('First sliding text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_sliding_first_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_sliding_second_text',array(
		'default'	=> esc_html('Gaming News'),'gaming-wda',
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_sliding_second_text',
            array(
                'label'    => esc_html__('Second sliding text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_sliding_second_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_sliding_third_text',array(
		'default'	=> esc_html('Community Hub'),'gaming-wda',
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_sliding_third_text',
            array(
                'label'    => esc_html__('Third sliding text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_sliding_third_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_sliding_fourth_text',array(
		'default'	=> esc_html('Games Store'),'gaming-wda',
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_sliding_fourth_text',
            array(
                'label'    => esc_html__('Fourth sliding text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_sliding_fourth_text',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_banner_sliding_text_font_size',
    array(
       'default' => esc_html('37'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_sliding_text_font_size',
		array(
		'label' => esc_html__( 'Sliding text font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('35'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_sliding_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_banner_sliding_text_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_sliding_text_color', array(
        'label' => esc_html__('Sliding text title color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_sliding_text_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_content',array(
		'default'	=> esc_html('WDA Gamezone is a large online community for gamers from all over the world. On our website, you will find live streams, gaming news, a community center, and a game store. Use the navigation buttons below to find out more information about us and our services. Share and tell your friends about it.'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_content',
            array(
                'label'    => esc_html__('Banner content text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_content',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_banner_content_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_content_font_size',
		array(
		'label' => esc_html__( 'Content text font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('35'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_content_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_banner_content_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_content_color', array(
        'label' => esc_html__('Banner content text color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_content_color'
    )));
	$wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_show_banner_first_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_gaming_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_show_banner_first_button',
        array(
        'label' => esc_html__( 'Hide the first button', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_first_button_text',array(
		'default'	=> esc_html('Games Store'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_first_button_text',
            array(
                'label'    => esc_html__('First button text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_first_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_first_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_banner_first_button_url',array(
			'label'	=> esc_html__('First button URL','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_banner_first_button_url'
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_first_button_style',array(
		'default'	=> esc_html('wpdevart_gaming_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_banner_first_button_style',array(
			'label'	=> esc_html__('First button color','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_banner_first_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_gaming_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'gaming-wda'),
				'wpdevart_gaming_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'gaming-wda'),
				'wpdevart_gaming_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'gaming-wda'),
				'wpdevart_gaming_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'gaming-wda'),
				'wpdevart_gaming_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'gaming-wda'),
				'wpdevart_gaming_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'gaming-wda'),
				'wpdevart_gaming_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'gaming-wda'),
				'wpdevart_gaming_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'gaming-wda'),
				'wpdevart_gaming_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'gaming-wda'),
				'wpdevart_gaming_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'gaming-wda'),
				)
	));
	$wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_show_banner_second_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_gaming_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_show_banner_second_button',
        array(
        'label' => esc_html__( 'Hide the second button', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_second_button_text',array(
		'default'	=> esc_html('About Us'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_banner_second_button_text',
            array(
                'label'    => esc_html__('Second button text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_banner_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_second_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_second_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_banner_second_button_url',array(
			'label'	=> esc_html__('Second button URL','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_banner_second_button_url'
	));	
	
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_second_button_style',array(
		'default'	=> esc_html('wpdevart_gaming_wda_secondary_button_slide secondary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_banner_second_button_style',array(
			'label'	=> esc_html__('Second button color','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_banner_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_banner_second_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_gaming_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'gaming-wda'),
				'wpdevart_gaming_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'gaming-wda'),
				'wpdevart_gaming_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'gaming-wda'),
				'wpdevart_gaming_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'gaming-wda'),
				'wpdevart_gaming_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'gaming-wda'),
				'wpdevart_gaming_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'gaming-wda'),
				'wpdevart_gaming_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'gaming-wda'),
				'wpdevart_gaming_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'gaming-wda'),
				'wpdevart_gaming_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'gaming-wda'),
				'wpdevart_gaming_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_bg_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-bg-image.jpg')),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_bg_image', array(
        'label' => esc_html__('Banner Background Image','gaming-wda'),
		'description' => esc_html__( 'Recommended image size ~1920*900', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_bg_image',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','gaming-wda'),
                    'remove' => esc_html__('Remove Image','gaming-wda'),
                    'change' => esc_html__('Change Image','gaming-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_image_1',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-1.jpg')),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_image_1', array(
        'label' => esc_html__('Banner Main Image','gaming-wda'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_image_1',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','gaming-wda'),
                    'remove' => esc_html__('Remove Image','gaming-wda'),
                    'change' => esc_html__('Change Image','gaming-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_image_2',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-2.jpg')),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_image_2', array(
        'label' => esc_html__('Banner Second Image','gaming-wda'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_image_2',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','gaming-wda'),
                    'remove' => esc_html__('Remove Image','gaming-wda'),
                    'change' => esc_html__('Change Image','gaming-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_image_3',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-3.jpg')),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_image_3', array(
        'label' => esc_html__('Banner Third Image','gaming-wda'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_image_3',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','gaming-wda'),
                    'remove' => esc_html__('Remove Image','gaming-wda'),
                    'change' => esc_html__('Change Image','gaming-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_banner_image_4',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image-4.png')),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_image_4', array(
        'label' => esc_html__('Banner Fourth Image','gaming-wda'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_banner_image_4',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','gaming-wda'),
                    'remove' => esc_html__('Remove Image','gaming-wda'),
                    'change' => esc_html__('Change Image','gaming-wda'),
                    )
    )));

	$wp_customize->add_section('wpdevart_gaming_wda_custom_homepage_call_action_section',array(
		'title'	=> esc_html__('Call to Action Section','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_custom_homepage_panel'
	));

	$wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_hide_call_action',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_gaming_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_hide_call_action',
        array(
        'label' => esc_html__( 'Hide Call to Action section', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_section_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_section_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_section_bg_color', array(
		'label' => esc_html__('Section Background Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
		'settings' => 'wpdevart_gaming_wda_call_action_section_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_title',array(
		'default'	=> esc_html('Best Offer'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_call_action_title',
            array(
                'label'    => esc_html__('Call to action title','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_call_action_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_section_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_section_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_section_title_color', array(
		'label' => esc_html__('Section Title Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
		'settings' => 'wpdevart_gaming_wda_call_action_section_title_color'
	)));
	
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_section_title_lines_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_section_title_lines_color', esc_html('#433e37')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_section_title_lines_color', array(
		'label' => esc_html__('Section Title Line Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
		'settings' => 'wpdevart_gaming_wda_call_action_section_title_lines_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_desc',array(
		'default'	=> esc_html('A brief description of the section below.'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_call_action_desc',
            array(
                'label'    => esc_html__('Call to action description','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_call_action_desc',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_section_description_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_section_description_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_section_description_color', array(
		'label' => esc_html__('Section Description Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
		'settings' => 'wpdevart_gaming_wda_call_action_section_description_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_to_action_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/call-to-action.jpg')),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_call_to_action_image', array(
        'label' => esc_html__('Call To Action Image','gaming-wda'),
		'description' => esc_html__( 'Recommended image size ~1200*600', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_call_to_action_image',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','gaming-wda'),
                    'remove' => esc_html__('Remove Image','gaming-wda'),
                    'change' => esc_html__('Change Image','gaming-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_bg_color', esc_html('#121212')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_bg_color', array(
        'label' => esc_html__('Call to action background color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
        'settings' => 'wpdevart_gaming_wda_call_action_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_call_action_gradient_type',array(
			'label'	=> esc_html__('Gradient type','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_call_action_section',
			'setting'	=> 'wpdevart_gaming_wda_call_action_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','gaming-wda'),
				'to left' => esc_html__('To left','gaming-wda'),
				'to bottom' => esc_html__('To bottom','gaming-wda'),
				'to top' => esc_html__('To top','gaming-wda'),
				'to bottom right' => esc_html__('To bottom right','gaming-wda'),
				'to bottom left' => esc_html__('To bottom left','gaming-wda'),
				'to top right' => esc_html__('To top right','gaming-wda'),
				'to top left' => esc_html__('To top left','gaming-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_bg_gradient_color', esc_html('#121212')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_bg_gradient_color', array(
        'label' => esc_html__('Call to action background gradient color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
        'settings' => 'wpdevart_gaming_wda_call_action_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_sub_title',array(
		'default'	=> esc_html('Call to Action Title'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_call_action_sub_title',
            array(
                'label'    => esc_html__('Call to action subtitle','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_call_action_sub_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_sub_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_sub_title_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_sub_title_color', array(
        'label' => esc_html__('Call to action subtitle color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
        'settings' => 'wpdevart_gaming_wda_call_action_sub_title_color'
    )));

    $wp_customize->add_setting( 'wpdevart_gaming_wda_call_action_sub_title_font_size',
    array(
       'default' => esc_html('30'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_sub_title_font_size',
		array(
		'label' => esc_html__( 'Call to action subtitle font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('45'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_text',array(
		'default'	=> esc_html('This is sample text for a call to action section. You can use this section to encourage users to click a button and find out more information about your services.'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_call_action_text',
            array(
                'label'    => esc_html__('Call to action text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_call_action_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_call_action_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_call_action_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_text_color', array(
        'label' => esc_html__('Call to action text color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
        'settings' => 'wpdevart_gaming_wda_call_action_text_color'
    )));

    $wp_customize->add_setting( 'wpdevart_gaming_wda_call_action_text_font_size',
    array(
       'default' => esc_html('16'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_call_action_text_font_size',
		array(
		'label' => esc_html__( 'Call to action text font-size (px)', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('45'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_button_text',array(
		'default'	=> esc_html('Check More Details'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_call_action_button_text',
            array(
                'label'    => esc_html__('Call to action button text','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_call_action_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_call_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_call_action_button_url',array(
			'label'	=> esc_html__('Call to action button URL','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_call_action_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_call_action_button_url'
	));		

	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_call_action_button_style',array(
		'default'	=> esc_html('wpdevart_gaming_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));

	$wp_customize->add_control('wpdevart_gaming_wda_custom_homepage_call_action_button_style',array(
			'label'	=> esc_html__('Call to action button color','gaming-wda'),
			'section'	=> 'wpdevart_gaming_wda_custom_homepage_call_action_section',
			'setting'	=> 'wpdevart_gaming_wda_custom_homepage_call_action_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_gaming_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'gaming-wda'),
				'wpdevart_gaming_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'gaming-wda'),
				'wpdevart_gaming_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'gaming-wda'),
				'wpdevart_gaming_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'gaming-wda'),
				'wpdevart_gaming_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'gaming-wda'),
				'wpdevart_gaming_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'gaming-wda'),
				'wpdevart_gaming_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'gaming-wda'),
				'wpdevart_gaming_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'gaming-wda'),
				'wpdevart_gaming_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'gaming-wda'),
				'wpdevart_gaming_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'gaming-wda'),
				)
	));	
	$wp_customize->add_section('wpdevart_gaming_wda_custom_homepage_latest_posts_section',array(
		'title'	=> esc_html__('Latest Posts Section','gaming-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_gaming_wda_custom_homepage_panel'
	));

	$wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_hide_latest_post_section',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_gaming_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_hide_latest_post_section',
        array(
        'label' => esc_html__( 'Hide Latest Posts section', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_gaming_wda_latest_posts_section_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_latest_posts_section_bg_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_latest_posts_section_bg_color', array(
		'label' => esc_html__('Section Background Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
		'settings' => 'wpdevart_gaming_wda_latest_posts_section_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_latest_post_title',array(
		'default'	=> esc_html('Latest Posts'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_latest_post_title',
            array(
                'label'    => esc_html__('Latest Posts section title','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_latest_post_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_latest_posts_section_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_latest_posts_section_title_color', esc_html('#f5f5f5')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_latest_posts_section_title_color', array(
		'label' => esc_html__('Section Title Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
		'settings' => 'wpdevart_gaming_wda_latest_posts_section_title_color'
	)));
	
	$wp_customize->add_setting('wpdevart_gaming_wda_latest_posts_section_title_lines_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_latest_posts_section_title_lines_color', esc_html('#433e37')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_latest_posts_section_title_lines_color', array(
		'label' => esc_html__('Section Title Line Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
		'settings' => 'wpdevart_gaming_wda_latest_posts_section_title_lines_color'
	)));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_latest_post_desctiption',array(
		'default'	=> esc_html('Latest posts from our blog'),
		'sanitize_callback'	=> 'wpdevart_gaming_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_gaming_wda_custom_homepage_latest_post_desctiption',
            array(
                'label'    => esc_html__('Latest Posts section description','gaming-wda'),
                'section'  => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
                'settings' => 'wpdevart_gaming_wda_custom_homepage_latest_post_desctiption',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_gaming_wda_latest_posts_section_description_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_latest_posts_section_description_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_latest_posts_section_description_color', array(
		'label' => esc_html__('Section Description Color','gaming-wda'),
		'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
		'settings' => 'wpdevart_gaming_wda_latest_posts_section_description_color'
	)));
	$wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_number_of_latest_posts',
    array(
       'default' => esc_html('6'),
       'sanitize_callback' => 'wpdevart_gaming_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_number_of_latest_posts',
		array(
		'label' => esc_html__( 'The number of posts', 'gaming-wda' ),
		'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_latest_posts_block_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_latest_posts_block_color', esc_html('#040303')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_latest_posts_block_color', array(
        'label' => esc_html__('Latest posts block bg color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_block_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_latest_posts_title_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_latest_posts_title_color', esc_html('#edb23f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_latest_posts_title_color', array(
        'label' => esc_html__('Latest posts title color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_title_color'
    )));
	$wp_customize->add_setting('wpdevart_gaming_wda_custom_homepage_latest_posts_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_gaming_wda_custom_homepage_latest_posts_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_latest_posts_text_color', array(
        'label' => esc_html__('Latest posts text color','gaming-wda'),
        'section' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_section',
        'settings' => 'wpdevart_gaming_wda_custom_homepage_latest_posts_text_color'
    )));