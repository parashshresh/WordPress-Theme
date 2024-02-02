<?php
/**
 * Breadcrumb options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

$wp_customize->add_section( 'coast_pro_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','coast-pro' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'coast-pro' ),
	'panel'             => 'coast_pro_theme_options_panel',
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[breadcrumb_enable]', array(
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
	'default'          	=> $options['breadcrumb_enable'],
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'coast-pro' ),
	'section'          	=> 'coast_pro_breadcrumb',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Separator', 'coast-pro' ),
	'active_callback' 	=> 'coast_pro_is_breadcrumb_enable',
	'section'          	=> 'coast_pro_breadcrumb',
) );
