<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'spa_salon_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'spa-salon' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'spa-salon' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'spa-salon' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'spa_salon_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'spa-salon' ),
	) );

	Kirki::add_section( 'spa_salon_font_style_section', array(
		'title'      => esc_attr__( 'Typography Options',  'spa-salon' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_all_headings_typography',
		'section'     => 'spa_salon_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'spa_salon_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'spa-salon' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'spa-salon' ),
		'section'     => 'spa_salon_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_body_content_typography',
		'section'     => 'spa_salon_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'spa_salon_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'spa-salon' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'spa-salon' ),
		'section'     => 'spa_salon_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'spa_salon_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'spa-salon' ),
	) );

	// Additional Settings

	Kirki::add_section( 'spa_salon_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'spa-salon' ),
	    'description'    => esc_html__( 'Scroll To Top', 'spa-salon' ),
	    'panel'          => 'spa_salon_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'spa_salon_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'spa-salon' ),
		'section'     => 'spa_salon_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_spa_salon',
		'label'       => esc_html__( 'Menus Text Transform', 'spa-salon' ),
		'section'     => 'spa_salon_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'spa-salon' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'spa-salon' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'spa-salon' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'spa_salon_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'spa-salon' ),
		'section'     => 'spa_salon_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// Woocommerce Settings

	Kirki::add_section( 'spa_salon_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'spa-salon' ),
		'description'    => esc_html__( 'Shop Page', 'spa-salon' ),
		'panel'          => 'spa_salon_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'spa_salon_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'spa-salon' ),
		'section'     => 'spa_salon_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'spa_salon_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'spa-salon' ),
		'section'     => 'spa_salon_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	// COLOR SECTION

	Kirki::add_section( 'spa_salon_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'spa-salon' ),
	    'description'    => esc_html__( 'Theme Color Settings', 'spa-salon' ),
	    'panel'          => 'spa_salon_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_global_colors',
		'section'     => 'spa_salon_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'spa_salon_global_color',
		'label'       => __( 'choose your Appropriate Color', 'spa-salon' ),
		'section'     => 'spa_salon_section_color',
		'default'     => '#fb3f75',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'spa_salon_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'spa-salon' ),
		'section'     => 'spa_salon_section_color',
		'default'     => '#2f3235',
	] );


	// POST SECTION

	Kirki::add_section( 'spa_salon_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'spa-salon' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'spa-salon' ),
	    'panel'          => 'spa_salon_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_post_heading',
		'section'     => 'spa_salon_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'spa-salon' ),
		'section'     => 'spa_salon_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'spa-salon' ),
		'section'     => 'spa_salon_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'spa_salon_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'spa-salon' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'spa-salon' ),
	    'panel'          => 'spa_salon_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_phone_icon',
		'section'     => 'spa_salon_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'spa_salon_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'spa-salon' ),
		'section'  => 'spa_salon_section_header',
		'default'  => 'dashicons dashicons-phone',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_phone_number_heading',
		'section'     => 'spa_salon_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'spa_salon_header_phone_number',
		'section'  => 'spa_salon_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_email_icon',
		'section'     => 'spa_salon_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'spa_salon_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'spa-salon' ),
		'section'  => 'spa_salon_section_header',
		'default'  => 'dashicons dashicons-email',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_email_address_heading',
		'section'     => 'spa_salon_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'spa_salon_header_email_address',
		'section'  => 'spa_salon_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_location_icon',
		'section'     => 'spa_salon_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'spa_salon_dashicons_setting_3',
		'label'    => esc_html__( 'Select Appropriate Icon', 'spa-salon' ),
		'section'  => 'spa_salon_section_header',
		'default'  => 'dashicons dashicons-location',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_header_location_address_heading',
		'section'     => 'spa_salon_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Location', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'spa_salon_header_location_address',
		'section'  => 'spa_salon_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_google_translation',
		'section'     => 'spa_salon_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Google Translation Box', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_header_google_translation',
		'section'     => 'spa_salon_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_search',
		'section'     => 'spa_salon_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_search_box_enable',
		'section'     => 'spa_salon_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_socail_link',
		'section'     => 'spa_salon_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'spa_salon_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'spa-salon' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'spa-salon' ),
		'settings'     => 'spa_salon_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'spa-salon' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'spa-salon' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'spa-salon' ),
				'description' => esc_html__( 'Add the social icon url here.', 'spa-salon' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'spa_salon_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'spa-salon' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'spa-salon' ),
        'panel'          => 'spa_salon_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_heading',
		'section'     => 'spa_salon_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_title_unable_disable',
		'label'       => esc_html__( 'Title Enable / Disable', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_text_unable_disable',
		'label'       => esc_html__( 'Content Enable / Disable', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_button_unable_disable',
		'label'       => esc_html__( 'Button Enable / Disable', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'spa-salon' ),
			'off' => esc_html__( 'Disable', 'spa-salon' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_slider_heading',
		'section'     => 'spa_salon_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'spa_salon_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'spa_salon_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'spa-salon' ),
		'priority'    => 10,
		'choices'     => spa_salon_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_slider_xcerpt_heading',
		'section'     => 'spa_salon_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'spa_salon_slide_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'spa_salon_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'spa-salon' ),
		'section'     => 'spa_salon_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'spa-salon' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'spa-salon' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'spa-salon' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'spa-salon' ),

		],
	] );

	// SPA SERVICES SECTION

	Kirki::add_section( 'spa_salon_services_section', array(
        'title'          => esc_html__( 'Spa Services Settings', 'spa-salon' ),
        'description'    => esc_html__( 'You have to select category to show services.', 'spa-salon' ),
        'panel'          => 'spa_salon_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_enable_heading',
		'section'     => 'spa_salon_services_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Service',  'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'spa_salon_service_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'spa-salon' ),
		'section'     => 'spa_salon_services_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'spa-salon' ),
			'off' => esc_html__( 'Disable',  'spa-salon' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_service_heading',
		'section'     => 'spa_salon_services_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Service Section ',  'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', [
        'type'        => 'number',
        'settings'    => 'spa_salon_service_counter',
        'label'       => esc_html__( 'Service Counter Section',  'spa-salon' ),
        'section'     => 'spa_salon_services_section',
        'default'     => 3,
        'choices'     => [
            'min'  => 0,
            'max'  => 80,
            'step' => 1,
        ],
    ] );

    $spa_salon_service_image = get_theme_mod('spa_salon_service_counter','');
    for ( $i = 1; $i <= $spa_salon_service_image; $i++ ) :

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'dashicons',
			'settings' => 'spa_salon_service_icon_setting'.$i,
			'label'    => esc_html__( 'Service image ', 'spa-salon' ).$i,
			'section'  => 'spa_salon_services_section',
			'priority' => 10,
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'text',
			'settings' => 'spa_salon_service_title_text'.$i,
			'label'    => esc_html__( 'Service Title Text ', 'spa-salon' ).$i,
			'section'  => 'spa_salon_services_section',
			'priority' => 10,
	    ] );

	    Kirki::add_field( 'theme_config_id', [
			'type'     => 'textarea',
			'settings' => 'spa_salon_service_content_text'.$i,
			'label'    => esc_html__( 'Service Content ', 'spa-salon' ).$i,
			'section'  => 'spa_salon_services_section',
			'priority' => 10,
	    ] );

	endfor;

	// FOOTER SECTION

	Kirki::add_section( 'spa_salon_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'spa-salon' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'spa-salon' ),
        'panel'          => 'spa_salon_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'spa_salon_footer_text_heading',
		'section'     => 'spa_salon_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'spa-salon' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'spa_salon_footer_text',
		'section'  => 'spa_salon_footer_section',
		'default'  => '',
		'priority' => 10,
	] );
}
