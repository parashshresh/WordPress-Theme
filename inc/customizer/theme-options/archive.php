<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'coast_pro_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','coast-pro' ),
	'description'       => esc_html__( 'Archive section options.', 'coast-pro' ),
	'panel'             => 'coast_pro_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'coast_pro_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'coast-pro' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'coast-pro' ),
	'section'           => 'coast_pro_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'coast_pro_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[hide_btn]', array(
	'default'           => $options['hide_btn'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[hide_btn]', array(
	'label'             => esc_html__( 'Hide Read More', 'coast-pro' ),
	'section'           => 'coast_pro_archive_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );

// Archive category setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[hide_content]', array(
	'default'           => $options['hide_content'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[hide_content]', array(
	'label'             => esc_html__( 'Hide Conetnt', 'coast-pro' ),
	'section'           => 'coast_pro_archive_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );

$wp_customize->add_setting( 'coast_pro_theme_options[hide_image]', array(
	'default'           => $options['hide_image'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[hide_image]', array(
	'label'             => esc_html__( 'Hide Featured Image', 'coast-pro' ),
	'section'           => 'coast_pro_archive_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );

$wp_customize->add_setting( 'coast_pro_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'coast-pro' ),
	'section'           => 'coast_pro_archive_section',
	'on_off_label' 		=> coast_pro_hide_options(),
) ) );