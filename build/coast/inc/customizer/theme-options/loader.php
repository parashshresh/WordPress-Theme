<?php
/**
 * Loader options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

$wp_customize->add_section( 'coast_pro_loader', array(
	'title'            		=> esc_html__( 'Loader','coast' ),
	'description'      		=> esc_html__( 'Loader section options.', 'coast' ),
	'panel'            		=> 'coast_pro_theme_options_panel',
) );

// Loader enable setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[loader_enable]', array(
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
	'default'             	=> $options['loader_enable'],
) );

$wp_customize->add_control(  new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[loader_enable]', array(
	'label'               	=> esc_html__( 'Enable loader', 'coast' ),
	'section'             	=> 'coast_pro_loader',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// Loader icons setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[loader_icon]', array(
	'sanitize_callback' 	=> 'coast_pro_sanitize_select',
	'default'				=> $options['loader_icon'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[loader_icon]', array(
	'label'           		=> esc_html__( 'Icon', 'coast' ),
	'section'         		=> 'coast_pro_loader',
	'type'					=> 'select',
	'choices'				=> coast_pro_get_spinner_list(),
	'active_callback' 		=> 'coast_pro_is_loader_enable',
) );
