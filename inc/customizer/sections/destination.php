<?php

/**
 * Destination Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add Destination section
$wp_customize->add_section('coast_pro_destination_section', array(
	'title'             => esc_html__('Destination', 'coast-pro'),
	'description'       => esc_html__('Destination Section options.', 'coast-pro'),
	'panel'             => 'coast_pro_front_page_panel',
));

// Destination content enable control and setting
$wp_customize->add_setting('coast_pro_theme_options[destination_section_enable]', array(
	'default'			=> 	$options['destination_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
));

$wp_customize->add_control(new Coast_Pro_Switch_Control($wp_customize, 'coast_pro_theme_options[destination_section_enable]', array(
	'label'             => esc_html__('Destination Section Enable', 'coast-pro'),
	'section'           => 'coast_pro_destination_section',
	'on_off_label' 		=> coast_pro_switch_options(),
)));

// destination title setting and control
$wp_customize->add_setting('coast_pro_theme_options[destination_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['destination_sub_title'],
	'transport'			=> 'postMessage',
));

$wp_customize->add_control('coast_pro_theme_options[destination_sub_title]', array(
	'label'           	=> esc_html__('Section Sub Title', 'coast-pro'),
	'section'        	=> 'coast_pro_destination_section',
	'active_callback' 	=> 'coast_pro_is_destination_section_enable',
	'type'				=> 'text',
));

// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[destination_sub_title]', array(
		'selector'            => '#coast_pro_destination_section .section-content p',
		'settings'            => 'coast_pro_theme_options[destination_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_destination_sub_title_partial',
	));
}

$wp_customize->add_setting('coast_pro_theme_options[destination_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['destination_title'],
	'transport'			=> 'postMessage',
));

$wp_customize->add_control('coast_pro_theme_options[destination_title]', array(
	'label'           	=> esc_html__('Section Title', 'coast-pro'),
	'section'        	=> 'coast_pro_destination_section',
	'active_callback' 	=> 'coast_pro_is_destination_section_enable',
	'type'				=> 'text',
));

// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[destination_title]', array(
		'selector'            => '#coast_pro_destination_section .section-header h2.section-title',
		'settings'            => 'coast_pro_theme_options[destination_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_destination_title_partial',
	));
}

// Destination content type control and setting
$wp_customize->add_setting('coast_pro_theme_options[destination_content_type]', array(
	'default'          	=> $options['destination_content_type'],
	'sanitize_callback' => 'coast_pro_sanitize_select',
));

$wp_customize->add_control('coast_pro_theme_options[destination_content_type]', array(
	'label'             => esc_html__('Content Type', 'coast-pro'),
	'section'           => 'coast_pro_destination_section',
	'type'				=> 'select',
	'active_callback' 	=> 'coast_pro_is_destination_section_enable',
	'choices'			=> coast_pro_destination_content_type(),
));

for ($i = 1; $i <= 4; $i++) {
	// Add dropdown destination setting and control.
	$wp_customize->add_setting('coast_pro_theme_options[destination_content_destination_' . $i . ']', array(
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control(new Coast_Pro_Dropdown_Taxonomies_Control($wp_customize, 'coast_pro_theme_options[destination_content_destination_' . $i . ']', array(
		'label'             => sprintf(esc_html__('Select Destinations %d ', 'coast-pro'), $i),
		'section'           => 'coast_pro_destination_section',
		'taxonomy'			=> 'travel_locations',
		'type'              => 'dropdown-taxonomies',
		'active_callback'	=> 'coast_pro_is_destination_section_content_destination_enable'
	)));

}


