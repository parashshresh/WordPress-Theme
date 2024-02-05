<?php
/**
* Homepage (Static ) options
*
* @package Theme Palace
* @subpackage Coast Pro
* @since Coast Pro 1.0.0
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'coast_pro_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[enable_frontpage_content]', array(
	'label'       	=> esc_html__( 'Enable Content', 'coast' ),
	'description' 	=> esc_html__( 'Check to enable content on static front page only.', 'coast' ),
	'section'     	=> 'static_front_page',
	'type'        	=> 'checkbox',
	'active_callback' => 'coast_pro_is_static_homepage_enable',
) );