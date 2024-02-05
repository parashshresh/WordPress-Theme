<?php
/**
 * subscribe Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add subscribe section
$wp_customize->add_section( 'coast_pro_subscribe_section', array(
	'title'             => esc_html__( 'Subscribe','coast' ),
	'description'       => esc_html__( 'Subscribe Section options.', 'coast' ),
	'panel'             => 'coast_pro_front_page_panel',
) );

// subscribe content enable control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[subscribe_section_enable]', array(
	'default'			=> 	$options['subscribe_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[subscribe_section_enable]', array(
	'label'             => esc_html__( 'Subscribe Section Enable', 'coast' ),
	'section'           => 'coast_pro_subscribe_section',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// subscribe title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[subscribe_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['subscribe_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[subscribe_title]', array(
	'label'           	=> esc_html__( 'Title', 'coast' ),
	'section'        	=> 'coast_pro_subscribe_section',
	'active_callback' 	=> 'coast_pro_is_subscribe_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[subscribe_title]', array(
		'selector'            => '#coast_pro_get_started .wrapper h2.section-title',
		'settings'            => 'coast_pro_theme_options[subscribe_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_subscribe_title_partial',
    ) );
}

// subscribe description setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[subscribe_description]', array(
	'sanitize_callback' => 'wp_kses_post',
	'default'			=> $options['subscribe_description'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[subscribe_description]', array(
	'label'           	=> esc_html__( 'Description', 'coast' ),
	'section'        	=> 'coast_pro_subscribe_section',
	'active_callback' 	=> 'coast_pro_is_subscribe_section_enable',
	'type'				=> 'textarea',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[subscribe_description]', array(
		'selector'            => '#coast_pro_get_started .wrapper p.section-subtitle',
		'settings'            => 'coast_pro_theme_options[subscribe_description]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_subscribe_description_partial',
    ) );
}

// subscribe btn title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[subscribe_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['subscribe_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[subscribe_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'coast' ),
	'section'        	=> 'coast_pro_subscribe_section',
	'active_callback' 	=> 'coast_pro_is_subscribe_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[subscribe_btn_title]', array(
		'selector'            => '#coast_pro_get_started .discover-now a',
		'settings'            => 'coast_pro_theme_options[subscribe_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_subscribe_btn_title_partial',
    ) );
}

// subscribe btn link setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[subscribe_btn_link]', array(
	'sanitize_callback' => 'esc_url_raw',
	'default'			=> $options['subscribe_btn_link'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[subscribe_btn_link]', array(
	'label'           	=> esc_html__( 'Button Link', 'coast' ),
	'section'        	=> 'coast_pro_subscribe_section',
	'active_callback' 	=> 'coast_pro_is_subscribe_section_enable',
	'type'				=> 'url',
) );
