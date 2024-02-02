<?php
/**
 * Reset options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'coast_pro_reset_section', array(
	'title'             => esc_html__('Reset all settings','coast-pro'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'coast-pro' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'coast_pro_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'coast-pro' ),
	'section'           => 'coast_pro_reset_section',
	'type'              => 'checkbox',
) );
