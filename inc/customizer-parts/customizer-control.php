<?php

$orbital_customizer_defaults = array (
	'orbital_link_color' => '#2196f3',
	'orbital_navbar_background' => '#ffffff',
	'orbital_navbar_link_color' => '#000000',
	'orbital_layout_container' => 52,
	'orbital_layout_relation' => 30,
	'orbital_layout_sidebar_order' => 0,
	'orbital_layout_sidebar_sticky' => false,
	'orbital_layout_menu_orbital' => false,
	'orbital_layout_search_navbar' => false,
	'orbital_cookies_active' => false,
	'orbital_cookies_type' => 'info',
	'orbital_cookies_deny' => esc_html__('Decline', 'orbital'),
	'orbital_cookies_allow' => esc_html__('Allow', 'orbital'),
	'orbital_cookies_minimize' => esc_html__('Cookie Policy', 'orbital'),
	'orbital_cookies_enable_hook' => '',
	'orbital_cookies_disable_hook' => '',
	'orbital_cookies_message' => esc_html__('This website uses cookies to ensure you get the best experience on our website.', 'orbital'),
	'orbital_cookies_dismiss' => esc_html__('Got it!', 'orbital'),
	'orbital_cookies_text_link' => esc_html__('Learn more', 'orbital'),
	'orbital_cookies_link' => esc_html__('#', 'orbital'),
	'orbital_seo_analytics' => '',
	'orbital_typo_logo' => false,
	'orbital_typo_headings' => false,
	'orbital_typo_body' => false,
	'orbital_loop_columns' => 'column-third',
	'orbital_loop_thumbnail' => true,
	'orbital_loop_excerpt' => true,
	'orbital_loop_excerpt_lenght' => 12,
	'orbital_loop_read_more' => esc_html__('Read more', 'orbital'),
	'orbital_loop_date' => true,
	'orbital_loop_category' => true,
	'orbital_loop_author' => false,
	'orbital_loop_cluster_img_width' => 390,
	'orbital_loop_cluster_img_height' => 200,
	'orbital_advertisment_device' => 'all',
	'orbital_performance_render_blocking_css' => false,
	'orbital_performance_render_blocking_js' => false,
	'orbital_performance_render_blocking_jquery' => false,
	'orbital_performance_lazy_load' => false,
	'orbital_cluster_columns' => 'column-third',
	'orbital_posts_default_thumbnail' => true,
	'orbital_posts_default_related' => true,
	'orbital_posts_show_category' => true,
	'orbital_quicklink_active' => false,
	'orbital_quicklink_default_urls' => '',
);


function orbital_customizer_sections()
{

	$sections = array(

        //Sections
		array(
			'name' => 'orbital_layout',
			'title' =>  __('Layout Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1001,
		),
		array(
			'name' => 'orbital_posts',
			'title' =>  __('Posts Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1001,
		),
		array(
			'name' => 'orbital_typo',
			'title' =>  __('Typography Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1001,
		),
		array(
			'name' => 'orbital_loop',
			'title' =>  __('Loops Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1002,
		),
		array(
			'name' => 'orbital_seo',
			'title' =>  __('SEO Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1003,
		),
		array(
			'name' => 'orbital_cookies',
			'title' =>  __('Cookies Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1005,
		),
		array(
			'name' => 'orbital_performance',
			'title' =>  __('Performance Settings', 'orbital'),
			'description' => __('', 'orbital'),
			'priority' => 1006,
		),
	);

	return $sections;
}

function orbital_customizer_settings()
{
	global $orbital_customizer_defaults;
	$settings = array(

        //
        //  COLORS
        //

		array(
			'name' => 'orbital_link_color',
			'default' => $orbital_customizer_defaults['orbital_link_color'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_hex_color',
		),
		array(
			'name' => 'orbital_navbar_background',
			'default' => $orbital_customizer_defaults['orbital_navbar_background'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_hex_color',
		),
		array(
			'name' => 'orbital_navbar_link_color',
			'default' => $orbital_customizer_defaults['orbital_navbar_link_color'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_hex_color',
		),

        //
        //  LAYOUT SETTINGS
        //

		array(
			'name' => 'orbital_layout_container',
			'default' => $orbital_customizer_defaults['orbital_layout_container'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_number_absint',
		),
		array(
			'name' => 'orbital_layout_relation',
			'default' => $orbital_customizer_defaults['orbital_layout_relation'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_number_absint',
		),
		array(
			'name' => 'orbital_layout_sidebar_order',
			'default' => $orbital_customizer_defaults['orbital_layout_sidebar_order'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_number_absint',
		),
		array(
			'name' => 'orbital_layout_sidebar_sticky',
			'default' => $orbital_customizer_defaults['orbital_layout_sidebar_sticky'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_layout_search_navbar',
			'default' => $orbital_customizer_defaults['orbital_layout_search_navbar'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_layout_menu_orbital',
			'default' => $orbital_customizer_defaults['orbital_layout_menu_orbital'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_performance_render_blocking_css',
			'default' => $orbital_customizer_defaults['orbital_performance_render_blocking_css'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_performance_render_blocking_js',
			'default' => $orbital_customizer_defaults['orbital_performance_render_blocking_js'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_performance_render_blocking_jquery',
			'default' => $orbital_customizer_defaults['orbital_performance_render_blocking_jquery'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_performance_lazy_load',
			'default' => $orbital_customizer_defaults['orbital_performance_lazy_load'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),

        //
        // POSTS SETTINGS
        //

		array(
			'name' => 'orbital_posts_default_thumbnail',
			'default' => $orbital_customizer_defaults['orbital_posts_default_thumbnail'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_posts_default_related',
			'default' => $orbital_customizer_defaults['orbital_posts_default_related'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),
		array(
			'name' => 'orbital_posts_show_category',
			'default' => $orbital_customizer_defaults['orbital_posts_show_category'],
			'transport' => 'refresh',
			'sanitize_callback' => '',
		),


        //
        // COOKIES SETTINGS
        //

		array(
			'name' => 'orbital_cookies_active',
			'default' => $orbital_customizer_defaults['orbital_cookies_active'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_cookies_type',
			'default' => $orbital_customizer_defaults['orbital_cookies_type'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_cookies_deny',
			'default' => $orbital_customizer_defaults['orbital_cookies_deny'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_cookies_allow',
			'default' => $orbital_customizer_defaults['orbital_cookies_allow'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_cookies_minimize',
			'default' => $orbital_customizer_defaults['orbital_cookies_minimize'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_cookies_message',
			'default' => $orbital_customizer_defaults['orbital_cookies_message'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),
		array(
			'name' => 'orbital_cookies_dismiss',
			'default' => $orbital_customizer_defaults['orbital_cookies_dismiss'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),
		array(
			'name' => 'orbital_cookies_text_link',
			'default' => $orbital_customizer_defaults['orbital_cookies_text_link'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),
		array(
			'name' => 'orbital_cookies_link',
			'default' => $orbital_customizer_defaults['orbital_cookies_link'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_dropdown_pages',
		),
		array(
			'name' => 'orbital_cookies_enable_hook',
			'default' => $orbital_customizer_defaults['orbital_cookies_enable_hook'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_cookies_disable_hook',
			'default' => $orbital_customizer_defaults['orbital_cookies_disable_hook'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),

        //
        // SEO SETTINGS
        //

		array(
			'name' => 'orbital_seo_analytics',
			'default' => $orbital_customizer_defaults['orbital_seo_analytics'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_scripts',
		),

        //
        //TYPO SETTINGS
        //

		array(
			'name' => 'orbital_typo_logo',
			'default' => $orbital_customizer_defaults['orbital_typo_logo'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),
		array(
			'name' => 'orbital_typo_headings',
			'default' => $orbital_customizer_defaults['orbital_typo_headings'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),
		array(
			'name' => 'orbital_typo_body',
			'default' => $orbital_customizer_defaults['orbital_typo_body'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),

        //
        // LOOP SETTINGS
        //

		array(
			'name' => 'orbital_loop_thumbnail',
			'default' => $orbital_customizer_defaults['orbital_loop_thumbnail'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_loop_excerpt',
			'default' => $orbital_customizer_defaults['orbital_loop_excerpt'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_loop_excerpt_lenght',
			'default' => $orbital_customizer_defaults['orbital_loop_excerpt_lenght'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_number_absint',
		),
		array(
			'name' => 'orbital_loop_read_more',
			'default' => $orbital_customizer_defaults['orbital_loop_read_more'],
			'transport' => 'postMessage',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_loop_date',
			'default' => $orbital_customizer_defaults['orbital_loop_date'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_loop_category',
			'default' => $orbital_customizer_defaults['orbital_loop_category'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_loop_author',
			'default' => $orbital_customizer_defaults['orbital_loop_author'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),
		array(
			'name' => 'orbital_loop_cluster_img_width',
			'default' => $orbital_customizer_defaults['orbital_loop_cluster_img_width'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_number_absint',
		),
		array(
			'name' => 'orbital_loop_cluster_img_height',
			'default' => $orbital_customizer_defaults['orbital_loop_cluster_img_height'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_number_absint',
		),

        //
        // PERFORMANCE SETTINGS
        //

		array(
			'name' => 'orbital_quicklink_active',
			'default' => $orbital_customizer_defaults['orbital_quicklink_active'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_checkbox',
		),

		array(
			'name' => 'orbital_quicklink_default_urls',
			'default' => $orbital_customizer_defaults['orbital_quicklink_default_urls'],
			'transport' => 'refresh',
			'sanitize_callback' => 'orbital_sanitize_nohtml',
		),

	);


return $settings;
}

function orbital_customizer_controls($fonts)
{
	$controls = array(

        //
        //  COLOR CONTROLS
        //

		array(
			'setting' => 'orbital_link_color',
			'info' => array(
				'label' => __('Link Color', 'orbital'),
				'section' => 'colors',
				'settings' => 'orbital_link_color',
				'type' => 'color',
			)
		),
		array(
			'setting' => 'orbital_navbar_background',
			'info' => array(
				'label' => __('Navbar Background Color', 'orbital'),
				'section' => 'colors',
				'settings' => 'orbital_navbar_background',
				'type' => 'color',
			)
		),
		array(
			'setting' => 'orbital_navbar_link_color',
			'info' => array(
				'label' => __('Navbar Link Color', 'orbital'),
				'section' => 'colors',
				'settings' => 'orbital_navbar_link_color',
				'type' => 'color',
			)
		),


        //
        //  LAYOUT CONTROLS
        //

		array(
			'setting' => 'orbital_layout_container',
			'info' => array(
				'label' => __('Container Width', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_layout_container',
				'type' => 'range',
				'input_attrs' => array(
					'min' => 36,
					'max' => 96,
					'step' => 0.5,
				),
			)
		),

		array(
			'setting' => 'orbital_layout_relation',
			'info' => array(
				'label' => __('Content-Sidebar Relation', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_layout_relation',
				'type' => 'range',
				'input_attrs' => array(
					'min' => 25,
					'max' => 50,
					'step' => 0.5,
				),
			)
		),
		array(
			'setting' => 'orbital_layout_sidebar_order',
			'info' => array(
				'type' => 'select',
				'section' => 'orbital_layout',
				'label' => __('Sidebar Order', 'orbital'),
				'settings' => 'orbital_layout_sidebar_order',
				'choices' => array(
					-1 => 'Left',
					0 => 'Right',
				),
			)) ,

		array(
			'setting' => 'orbital_layout_sidebar_sticky',
			'info' => array(
				'label' => __('Sticky Sidebar', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_layout_sidebar_sticky',
				'type' => 'checkbox',
			)
		),


		array(
			'setting' => 'orbital_layout_search_navbar',
			'info' => array(
				'label' => __('Navbar Search', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_layout_search_navbar',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_layout_menu_orbital',
			'info' => array(
				'label' => __('Orbital Menu', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_layout_menu_orbital',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_performance_render_blocking_css',
			'info' => array(
				'label' => __('Fix Render Blocking CSS', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_performance_render_blocking_css',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_performance_render_blocking_js',
			'info' => array(
				'label' => __('Fix Render Blocking JS', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_performance_render_blocking_js',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_performance_render_blocking_jquery',
			'info' => array(
				'label' => __('Exclude jQuery on Fix Render Blocking', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_performance_render_blocking_jquery',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_performance_lazy_load',
			'info' => array(
				'label' => __('Lazy Load (Experimental)', 'orbital'),
				'section' => 'orbital_layout',
				'settings' => 'orbital_performance_lazy_load',
				'description' => __('Es necesario regenerar todas las miniaturas', 'orbital'),
				'type' => 'checkbox',
			)
		),

        //
        //  POSTS CONTROLS
        //

		array(
			'setting' => 'orbital_posts_default_thumbnail',
			'info' => array(
				'label' => __('Show Thumbnails', 'orbital'),
				'section' => 'orbital_posts',
				'settings' => 'orbital_posts_default_thumbnail',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_posts_default_related',
			'info' => array(
				'label' => __('Show Related Posts', 'orbital'),
				'section' => 'orbital_posts',
				'settings' => 'orbital_posts_default_related',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_posts_show_category',
			'info' => array(
				'label' => __('Show Category Link', 'orbital'),
				'section' => 'orbital_posts',
				'settings' => 'orbital_posts_show_category',
				'type' => 'checkbox',
			)
		),

        //
        //  COOKIES CONTROLS
        //

		array(
			'setting' => 'orbital_cookies_active',
			'info' => array(
				'label' => __('Enable Cookies', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_active',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_cookies_type',
			'info' => array(
				'type' => 'select',
				'section' => 'orbital_cookies',
				'label' => __('Cookies Type', 'orbital'),
				'settings' => 'orbital_cookies_type',
				'choices' => array(
					'info' => 'Default',
					'opt-in' => 'Opt In',
					'opt-out' => 'Opt Out',
				),
			)) ,
		array(
			'setting' => 'orbital_cookies_message',
			'info' => array(
				'label' => __('Cookies Message', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_message',
				'type' => 'textarea',
			)
		),
		array(
			'setting' => 'orbital_cookies_dismiss',
			'info' => array(
				'label' => __('Dismiss Text', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_dismiss',
				'type' => 'text',
			)
		),
		array(
			'setting' => 'orbital_cookies_allow',
			'info' => array(
				'label' => __('Allow Text (only for Opt In)', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_allow',
				'type' => 'text',
			)
		),
		array(
			'setting' => 'orbital_cookies_deny',
			'info' => array(
				'label' => __('Deny Text (only for Opt Out)', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_deny',
				'type' => 'text',
			)
		),
		array(
			'setting' => 'orbital_cookies_minimize',
			'info' => array(
				'label' => __('Label Cookie Info (Empty for Disable)', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_minimize',
				'type' => 'text',
			)
		),

		array(
			'setting' => 'orbital_cookies_text_link',
			'info' => array(
				'label' => __('Link Text', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_text_link',
				'type' => 'text',
			)
		),
		array(
			'setting' => 'orbital_cookies_link',
			'info' => array(
				'label' => __('Link Cookies', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_link',
				'type' => 'dropdown-pages',
			)
		),
		array(
			'setting' => 'orbital_cookies_enable_hook',
			'info' => array(
				'label' => __('Enable Hook (only for Opt In and Opt Out)', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_enable_hook',
				'type' => 'textarea',
			)
		),
		array(
			'setting' => 'orbital_cookies_disable_hook',
			'info' => array(
				'label' => __('Disable Hook (only for Opt In and Opt Out)', 'orbital'),
				'section' => 'orbital_cookies',
				'settings' => 'orbital_cookies_disable_hook',
				'type' => 'textarea',
			)
		),

        //
        //  SEO CONTROLS
        //

		array(
			'setting' => 'orbital_seo_analytics',
			'info' => array(
				'label' => __('Analytics Code', 'orbital'),
				'section' => 'position_options_analytics',
				'settings' => 'orbital_seo_analytics',
				'type' => 'textarea',
				'input_attrs' => array(
					'placeholder' => __('Insert Analytics Code with script tag', 'orbital'),
				),
			)
		),

        //
        // LOOPS CONTROLS
        //

		array(
			'setting' => 'orbital_loop_thumbnail',
			'info' => array(
				'label' => __('Show Thumbnails', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_thumbnail',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_loop_excerpt',
			'info' => array(
				'label' => __('Show Excerpt', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_excerpt',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_loop_date',
			'info' => array(
				'label' => __('Show Date', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_date',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_loop_category',
			'info' => array(
				'label' => __('Show Category', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_category',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_loop_author',
			'info' => array(
				'label' => __('Show Author', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_author',
				'type' => 'checkbox',
			)
		),
		array(
			'setting' => 'orbital_loop_excerpt_lenght',
			'info' => array(
				'label' => __('Excerpt Length', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_excerpt_lenght',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 5,
				),
			)
		),
		array(
			'setting' => 'orbital_loop_columns',
			'info' => array(
				'type' => 'select',
				'section' => 'orbital_loop',
				'label' => __('Number of columns', 'orbital'),
				'settings' => 'orbital_loop_columns',
				'choices' => array(
					'column' => 'List Mode',
					'column-half' => '2 columns',
					'column-third' => '3 columns',
					'column-quarter' => '4 columns',
				),
			)) ,
		array(
			'setting' => 'orbital_loop_read_more',
			'info' => array(
				'label' => __('Read More Text', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_read_more',
				'type' => 'text',
			)
		),
		array(
			'setting' => 'orbital_loop_cluster_img_width',
			'info' => array(
				'label' => __('Cluster Image Width', 'orbital'),
				'description' => __('Es necesario regenerar todas las miniaturas', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_cluster_img_width',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
				),
			)
		),
		array(
			'setting' => 'orbital_loop_cluster_img_height',
			'info' => array(
				'label' => __('Cluster Image Height', 'orbital'),
				'description' => __('Es necesario regenerar todas las miniaturas', 'orbital'),
				'section' => 'orbital_loop',
				'settings' => 'orbital_loop_cluster_img_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
				),
			)
		),

        //
        // TYPO CONTROLS
        //

		array('setting' => 'orbital_typo_logo',
			'info' => array(
				'label' => __('Typo Logo', 'orbital'),
				'description' => __('Puedes introducir una URL. Por ejemplo de Google Fonts.', 'orbital'),
				'section' => 'orbital_typo',
				'settings' => 'orbital_typo_logo',
				'type' => 'select',
				'choices' => $fonts,
			)
		),
		array('setting' => 'orbital_typo_headings',
			'info' => array(
				'label' => __('Typo Headings', 'orbital'),
				'description' => __('Puedes introducir una URL. Por ejemplo de Google Fonts.', 'orbital'),
				'section' => 'orbital_typo',
				'settings' => 'orbital_typo_headings',
				'type' => 'select',
				'choices' => $fonts,
			)
		),
		array('setting' => 'orbital_typo_body',
			'info' => array(
				'label' => __('Typo Body', 'orbital'),
				'description' => __('Puedes introducir una URL. Por ejemplo de Google Fonts.', 'orbital'),
				'section' => 'orbital_typo',
				'settings' => 'orbital_typo_body',
				'type' => 'select',
				'choices' => $fonts,
			)
		),


        // PERFORMANCE CONTROL
		array(
			'setting' => 'orbital_quicklink_active',
			'info' => array(
				'label' => __('Enable Quicklink', 'orbital'),
                //'description' => __('', 'orbital'),
				'section' => 'orbital_performance',
				'settings' => 'orbital_quicklink_active',
				'type' => 'checkbox',
			)
		),

		array(
			'setting' => 'orbital_quicklink_default_urls',
			'info' => array(
				'label' => __('Default Prefetch URLs', 'orbital'),
				'section' => 'orbital_performance',
				'settings' => 'orbital_quicklink_default_urls',
				'type' => 'textarea',
				'input_attrs' => array(
					'placeholder' => __('One per line', 'orbital'),
				),
			)
		),
	);
return $controls;
}
