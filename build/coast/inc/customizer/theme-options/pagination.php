<?php
/**
 * pagination options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'coast_pro_pagination', array(
	'title'               => esc_html__('Pagination','coast'),
	'description'         => esc_html__( 'Pagination section options.', 'coast' ),
	'panel'               => 'coast_pro_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'coast' ),
	'section'             => 'coast_pro_pagination',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'coast_pro_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'coast' ),
	'section'             => 'coast_pro_pagination',
	'type'                => 'select',
	'choices'			  => coast_pro_pagination_options(),
	'active_callback'	  => 'coast_pro_is_pagination_enable',
) );
