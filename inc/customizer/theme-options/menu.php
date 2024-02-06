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

