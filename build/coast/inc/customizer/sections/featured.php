<?php
/**
 * Featured Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add Featured section
$wp_customize->add_section( 'coast_pro_featured_section', array(
	'title'             => esc_html__( 'Featured','coast' ),
	'description'       => esc_html__( 'Featured Section options.', 'coast' ),
	'panel'             => 'coast_pro_front_page_panel',
) );

// Featured content enable control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[featured_section_enable]', array(
	'default'			=> 	$options['featured_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[featured_section_enable]', array(
	'label'             => esc_html__( 'Featured Section Enable', 'coast' ),
	'section'           => 'coast_pro_featured_section',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// blog title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[featured_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['featured_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[featured_sub_title]', array(
	'label'           	=> esc_html__( 'Section Sub Title', 'coast' ),
	'section'        	=> 'coast_pro_featured_section',
	'active_callback' 	=> 'coast_pro_is_featured_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[featured_sub_title]', array(
		'selector'            => '#coast-interest .section-content p',
		'settings'            => 'coast_pro_theme_options[featured_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_featured_sub_title_partial',
    ) );
}

$wp_customize->add_setting( 'coast_pro_theme_options[featured_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['featured_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[featured_title]', array(
	'label'           	=> esc_html__( 'Section Title', 'coast' ),
	'section'        	=> 'coast_pro_featured_section',
	'active_callback' 	=> 'coast_pro_is_featured_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[featured_title]', array(
		'selector'            => '#coast-interest .section-header h2.section-title',
		'settings'            => 'coast_pro_theme_options[featured_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_featured_title_partial',
    ) );
}

// Featured content type control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[featured_content_type]', array(
	'default'          	=> $options['featured_content_type'],
	'sanitize_callback' => 'coast_pro_sanitize_select',
) );

$wp_customize->add_control( 'coast_pro_theme_options[featured_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'coast' ),
	'section'           => 'coast_pro_featured_section',
	'type'				=> 'select',
	'active_callback' 	=> 'coast_pro_is_featured_section_enable',
	'choices'			=> coast_pro_featured_content_type(),
) );

for ($i = 1; $i <= $options['featured_count']; $i++) {
	// featured trips drop down chooser control and setting
	$wp_customize->add_setting( 'coast_pro_theme_options[featured_content_trip_' . $i . ']', array(
		'sanitize_callback' => 'coast_pro_sanitize_page',
	) );

	$wp_customize->add_control( new Coast_Pro_Dropdown_Chooser( $wp_customize, 'coast_pro_theme_options[featured_content_trip_' . $i . ']', array(
		'label'             => sprintf ( esc_html__( 'Select Trip %d', 'coast' ), $i ),
		'section'           => 'coast_pro_featured_section',
		'choices'			=> coast_pro_trip_choices(),
		'active_callback'	=> 'coast_pro_is_featured_section_content_trip_enable',
	) ) );
}

