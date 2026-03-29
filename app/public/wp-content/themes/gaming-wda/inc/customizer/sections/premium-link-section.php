<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'wpdevart_gaming_wda_Section_Premium' );

	$wp_customize->add_section(
		new wpdevart_gaming_wda_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('Gaming WDA','gaming-wda'),
				'pro_text' => esc_html__('Premium','gaming-wda'),
				'pro_url'  => apply_filters( 'parent_wpdevart_gaming_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-gaming-theme')),
				'priority'  => 10,
			)
		)
	);