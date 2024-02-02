<?php
/**
 * Menu options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'coast_pro_menu', array(
	'title'             => esc_html__('Header Menu','coast-pro'),
	'description'       => esc_html__( 'Header Menu options.', 'coast-pro' ),
	'panel'             => 'nav_menus',
) );

// Menu sticky setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[menu_sticky]', array(
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
	'default'           => $options['menu_sticky'],
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[menu_sticky]', array(
	'label'             => esc_html__( 'Make Menu Sticky', 'coast-pro' ),
	'section'           => 'coast_pro_menu',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );


$wp_customize->add_setting( 'coast_pro_theme_options[primary_menu_header_button_enable]',
	array(
		'sanitize_callback' => 'coast_pro_sanitize_switch_control',
		'default'           => $options['primary_menu_header_button_enable'],
	)
);

$wp_customize->add_control( new  Coast_Pro_Switch_Control( $wp_customize,
	'coast_pro_theme_options[primary_menu_header_button_enable]',
		array(
			'label'             => esc_html__( 'Show Header Button', 'coast-pro' ),
			'description'       => esc_html__( 'Show Header Button in Primary menu', 'coast-pro' ),
			'section'           => 'coast_pro_menu',
			'on_off_label' 		=> coast_pro_switch_options(),
		)
	)
);

$wp_customize->add_setting('coast_pro_theme_options[menu_first_btn_label]',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport'			=> 'postMessage',
        'default'           => $options['menu_first_btn_label'],
    )
);

$wp_customize->add_control('coast_pro_theme_options[menu_first_btn_label]',
    array(
        'section'			=> 'coast_pro_menu',
        'label'				=> esc_html__( 'First Button Label:', 'coast-pro' ),
        'type'          	=>'text',
		'active_callback'	=> 'coast_pro_is_primary_menu_header_button_enable',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[menu_first_btn_label]',
		array(
			'selector'            => '#masthead .header-button .first a',
			'settings'            => 'coast_pro_theme_options[menu_first_btn_label]',
			'fallback_refresh'    => true,
			'container_inclusive' => false,
			'render_callback'     => 'coast_pro_menu_first_btn_label_partial',
		)
	);
}

// ads link setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[menu_first_btn_url]',
	array(
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	
	$wp_customize->add_control( 'coast_pro_theme_options[menu_first_btn_url]',
	array(
		'label'           	=> esc_html__( 'First Button URL', 'coast-pro' ),
		'section'        	=> 'coast_pro_menu',
		'type'				=> 'url',
		'active_callback'	=> 'coast_pro_is_primary_menu_header_button_enable',

	)
);

$wp_customize->add_setting('coast_pro_theme_options[menu_second_btn_label]',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport'			=> 'postMessage',
        'default'           => $options['menu_second_btn_label'],
    )
);

$wp_customize->add_control('coast_pro_theme_options[menu_second_btn_label]',
    array(
        'section'			=> 'coast_pro_menu',
        'label'				=> esc_html__( 'Second Button Label:', 'coast-pro' ),
		'active_callback'	=> 'coast_pro_is_primary_menu_header_button_enable',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[menu_second_btn_label]',
		array(
			'selector'            => '#masthead .header-button .second a',
			'settings'            => 'coast_pro_theme_options[menu_second_btn_label]',
			'fallback_refresh'    => true,
			'container_inclusive' => false,
			'render_callback'     => 'coast_pro_menu_second_btn_label_partial',
		)
	);
}

$wp_customize->add_setting('coast_pro_theme_options[menu_second_btn_url]',
    array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport'			=> 'postMessage',
    )
);

$wp_customize->add_control('coast_pro_theme_options[menu_second_btn_url]',
    array(
        'section'			=> 'coast_pro_menu',
        'label'				=> esc_html__( 'Second Button URL:', 'coast-pro' ),
        'type'          	=>'text',
		'active_callback'	=> 'coast_pro_is_primary_menu_header_button_enable',
    )
);