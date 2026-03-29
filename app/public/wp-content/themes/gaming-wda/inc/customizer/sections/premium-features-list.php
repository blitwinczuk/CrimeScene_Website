<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_gaming_wda_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'gaming-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'gaming-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'gaming-wda' ),
					esc_html__( 'Preloader', 'gaming-wda' ),
                    esc_html__( 'Button Animation', 'gaming-wda' ),
                    esc_html__( '+13 Beautiful Patterns', 'gaming-wda' ),
					esc_html__( 'Customizable Search Overlay', 'gaming-wda' ),
					esc_html__( 'Back To Top Button', 'gaming-wda' ),
					esc_html__( '... and Other Premium Features', 'gaming-wda' ),
				),
				'panel'         => 'wpdevart_gaming_wda_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_gaming_wda_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'gaming-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'gaming-wda' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'gaming-wda' ),
                    esc_html__( 'Logo Animations', 'gaming-wda' ),
					esc_html__( 'Search Button Animations', 'gaming-wda' ),
                    esc_html__( 'Woo Cart Animations', 'gaming-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'gaming-wda' ),
					esc_html__( '... and Other Premium Features', 'gaming-wda' ),
				),
				'panel'         => 'wpdevart_gaming_wda_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_gaming_wda_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'gaming-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'premium_features_list' => array(
					esc_html__( '+13 Beautiful Patterns', 'gaming-wda' ),
                    esc_html__( 'Post/Page Title Animations', 'gaming-wda' ),
					esc_html__( 'Post/Page Banner Animations', 'gaming-wda' ),
                    esc_html__( '4 Animated Banner Elements', 'gaming-wda' ),
					esc_html__( 'Animated Elements Colors', 'gaming-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'gaming-wda' ),
					esc_html__( '... and Other Premium Features', 'gaming-wda' ),
				),
				'panel'         => 'wpdevart_gaming_wda_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_gaming_wda_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'gaming-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'gaming-wda' ),
					esc_html__( 'Archive/Search Page Title Animations', 'gaming-wda' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'gaming-wda' ),
					esc_html__( '4 Animated Elements', 'gaming-wda' ),
                    esc_html__( 'Animated Elements Colors', 'gaming-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'gaming-wda' ),
					esc_html__( '... and Other Premium Features', 'gaming-wda' ),
				),
				'panel'         => 'wpdevart_gaming_wda_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_gaming_wda_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'gaming-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'premium_features_list' => array(
                    esc_html__( '+7 Beautiful Banner Themes', 'gaming-wda' ),
                    esc_html__( 'Homepage Sections Positions', 'gaming-wda' ),
					esc_html__( 'WooCommerce Section', 'gaming-wda' ),
					esc_html__( 'Sales Section', 'gaming-wda' ),
                    esc_html__( 'Benefits of Ordering Section', 'gaming-wda' ),
                    esc_html__( 'Our Partners Section', 'gaming-wda' ),
                    esc_html__( 'Shop by Category Section', 'gaming-wda' ),
					esc_html__( 'Achievements Section', 'gaming-wda' ),
					esc_html__( 'Advantages Section', 'gaming-wda' ),
					esc_html__( 'Services Section', 'gaming-wda' ),
					esc_html__( 'Team Members Section', 'gaming-wda' ),
					esc_html__( '... and Other Sections', 'gaming-wda' ),
					esc_html__( 'Sections Description Color', 'gaming-wda' ),
					esc_html__( 'Sections Title Lines Color', 'gaming-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'gaming-wda' ),
					esc_html__( '... and Other Premium Features', 'gaming-wda' ),
				),
				'panel'         => 'wpdevart_gaming_wda_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_gaming_wda_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'gaming-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'gaming-wda' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'gaming-wda' ),
					esc_html__( 'WooCommerce Shop/Category Structure', 'gaming-wda' ),
					esc_html__( 'WooCommerce Premium Sections', 'gaming-wda' ),
					esc_html__( 'WooCommerce Breadcrumbs', 'gaming-wda' ),
					esc_html__( 'WooCommerce Header Cart Design', 'gaming-wda' ),
                    esc_html__( 'WooCommerce Button Animation', 'gaming-wda' ),
					esc_html__( 'WooCommerce Sidebar Options', 'gaming-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'gaming-wda' ),
					esc_html__( '... and Other Premium Features', 'gaming-wda' ),
				),
				'panel'         => 'wpdevart_gaming_wda_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_gaming_wda_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Logo Animation', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo Font-size', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo Font Weight', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Site Description Color', 'gaming-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Site Description Font-size', 'gaming-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_gaming_wda_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_gaming_wda_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_primary_button_settings',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Button Animation', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_gaming_wda_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_gaming_wda_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_gaming_wda_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_gaming_wda_woo_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_woo_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'woocommerce_primary_button_colors_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'WooCommerce Button Animation', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_gaming_wda_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+13 Beautiful Patterns', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'gaming-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'gaming-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+13 Beautiful Patterns', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'gaming-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'gaming-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_gaming_wda_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'gaming-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'gaming-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'gaming-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Ordering of Metas', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+7 Beautiful Banner Themes', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_gaming_wda_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_gaming_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_gaming_wda_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'gaming-wda' ),
        'section' => 'wpdevart_gaming_wda_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'gaming-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright Section Image', 'gaming-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'gaming-wda' )
            ),
        )
    )
    ) );