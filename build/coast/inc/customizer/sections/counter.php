<?php
/**
 * Counter Section options
 *
 * @package Theme Palace
 * @subpackage Blog Diary Pro
 * @since Blog Diary Pro 1.0.0
 */

// Add Counter section
$wp_customize->add_section( 'coast_pro_counter_section', array(
	'title'             => esc_html__( 'Counter','coast' ),
	'description'       => esc_html__( 'Counter Section options.', 'coast' ),
	'panel'             => 'coast_pro_front_page_panel',

) );

// Counter content enable control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[counter_section_enable]', array(
	'default'			=> 	$options['counter_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[counter_section_enable]', array(
	'label'             => esc_html__( 'Counter Section Enable', 'coast' ),
	'section'           => 'coast_pro_counter_section',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[counter_section_enable]', array(
		'selector'            => '#counter-section .tooltiptext',
		'settings'            => 'coast_pro_theme_options[counter_section_enable]',
    ) );
}

// counter background image setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[counter_image]', array(
	'sanitize_callback' => 'coast_pro_sanitize_image'
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coast_pro_theme_options[counter_image]',
		array(
		'label'       		=> esc_html__( 'Counter BG Image', 'coast' ),
		'section'     		=> 'coast_pro_counter_section',
		'active_callback'	=> 'coast_pro_is_counter_section_enable',
) ) );


// counter title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[counter_banner_title]', array(
	'default'			=> $options['counter_banner_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[counter_banner_title]', array(
	'label'           	=> esc_html__( 'Section Title', 'coast' ),
	'section'        	=> 'coast_pro_counter_section',
	'active_callback' 	=> 'coast_pro_is_counter_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[counter_banner_title]', array(
		'selector'            => '#coast_counter h2.entry-title',
		'settings'            => 'coast_pro_theme_options[counter_banner_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_counter_banner_title_partial',
    ) );
}

// counter subtitle setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[counter_banner_sub_title]', array(
	'default'			=> $options['counter_banner_sub_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[counter_banner_sub_title]', array(
	'label'           	=> esc_html__( 'Section Sub Title', 'coast' ),
	'section'        	=> 'coast_pro_counter_section',
	'active_callback' 	=> 'coast_pro_is_counter_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[counter_banner_sub_title]', array(
		'selector'            => '#coast_counter .entry-content p',
		'settings'            => 'coast_pro_theme_options[counter_banner_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_counter_banner_title_partial',
    ) );
}

for ( $i = 1; $i <=3; $i++ ) :
	
// counter title setting and control
	$wp_customize->add_setting( 'coast_pro_theme_options[counter_title_' . $i . ']',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			)
		);

	// counter title setting and control
	$wp_customize->add_setting( 'coast_pro_theme_options[counter_value_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'coast_pro_theme_options[counter_value_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Value %d', 'coast' ), $i ),
		'section'        	=> 'coast_pro_counter_section',
		'active_callback' 	=> 'coast_pro_is_counter_section_enable',
		'type'				=> 'text',
	) );

	// counter position setting and control
	$wp_customize->add_setting( 'coast_pro_theme_options[counter_label_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'coast_pro_theme_options[counter_label_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Label %d', 'coast' ), $i ),
		'section'        	=> 'coast_pro_counter_section',
		'active_callback' 	=> 'coast_pro_is_counter_section_enable',
		'type'				=> 'text',
	) );

	// counter hr setting and control
	$wp_customize->add_setting( 'coast_pro_theme_options[counter_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Coast_Pro_Customize_Horizontal_Line( $wp_customize, 'coast_pro_theme_options[counter_hr_'. $i .']',
		array(
			'section'         => 'coast_pro_counter_section',
			'active_callback' => 'coast_pro_is_counter_section_enable',
			'type'			  => 'hr'
	) ) );
endfor;