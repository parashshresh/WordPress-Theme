<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'coast_pro_layout', array(
	'title'               => esc_html__('Layout','coast-pro'),
	'description'         => esc_html__( 'Layout section options.', 'coast-pro' ),
	'panel'               => 'coast_pro_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[site_layout]', array(
	'sanitize_callback'   => 'coast_pro_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Coast_Pro_Custom_Radio_Image_Control ( $wp_customize, 'coast_pro_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'coast-pro' ),
	'section'             => 'coast_pro_layout',
	'choices'			  => coast_pro_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'coast_pro_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Coast_Pro_Custom_Radio_Image_Control ( $wp_customize, 'coast_pro_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'coast-pro' ),
	'section'             => 'coast_pro_layout',
	'choices'			  => coast_pro_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'coast_pro_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Coast_Pro_Custom_Radio_Image_Control ( $wp_customize, 'coast_pro_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'coast-pro' ),
	'section'             => 'coast_pro_layout',
	'choices'			  => coast_pro_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'coast_pro_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Coast_Pro_Custom_Radio_Image_Control( $wp_customize, 'coast_pro_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'coast-pro' ),
	'section'             => 'coast_pro_layout',
	'choices'			  => coast_pro_sidebar_position(),
) ) );