<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'coast_pro_excerpt_section', array(
	'title'             => esc_html__( 'Excerpt','coast-pro' ),
	'description'       => esc_html__( 'Excerpt section options.', 'coast-pro' ),
	'panel'             => 'coast_pro_theme_options_panel',
) );


// long Excerpt length setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[long_excerpt_length]', array(
	'sanitize_callback' => 'coast_pro_sanitize_number_range',
	'validate_callback' => 'coast_pro_validate_long_excerpt',
	'default'			=> $options['long_excerpt_length'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[long_excerpt_length]', array(
	'label'       		=> esc_html__( 'Blog Page Excerpt Length', 'coast-pro' ),
	'description' 		=> esc_html__( 'Total words to be displayed in archive page/search page.', 'coast-pro' ),
	'section'     		=> 'coast_pro_excerpt_section',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
	),
) );
