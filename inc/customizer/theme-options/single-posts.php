<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'coast_pro_single_post_section', array(
	'title'             => esc_html__( 'Single Post','coast-pro' ),
	'description'       => esc_html__( 'Options to change the single posts globally.', 'coast-pro' ),
	'panel'             => 'coast_pro_theme_options_panel',
) );

// Tourableve date meta setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[single_post_hide_date]', array(
	'default'           => $options['single_post_hide_date'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[single_post_hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'coast-pro' ),
	'section'           => 'coast_pro_single_post_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );

// Tourableve author meta setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[single_post_hide_author]', array(
	'default'           => $options['single_post_hide_author'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[single_post_hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'coast-pro' ),
	'section'           => 'coast_pro_single_post_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );

// Tourableve author category setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[single_post_hide_category]', array(
	'default'           => $options['single_post_hide_category'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[single_post_hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'coast-pro' ),
	'section'           => 'coast_pro_single_post_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );

// Tourableve tag category setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[single_post_hide_tags]', array(
	'default'           => $options['single_post_hide_tags'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[single_post_hide_tags]', array(
	'label'             => esc_html__( 'Hide Tag', 'coast-pro' ),
	'section'           => 'coast_pro_single_post_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );
