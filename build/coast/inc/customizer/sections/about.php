<?php
/**
 * About Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add About section
$wp_customize->add_section( 'coast_pro_about_section', array(
	'title'             => esc_html__( 'About Us','coast' ),
	'description'       => esc_html__( 'About Us Section options.', 'coast' ),
	'panel'             => 'coast_pro_front_page_panel',
) );

// About content enable control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[about_section_enable]', array(
	'default'			=> 	$options['about_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[about_section_enable]', array(
	'label'             => esc_html__( 'About Section Enable', 'coast' ),
	'section'           => 'coast_pro_about_section',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// about title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_title]', array(
	'label'           	=> esc_html__( 'Title', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_title]', array(
		'selector'            => '#coast-about-us .content-align-left h2.section-title',
		'settings'            => 'coast_pro_theme_options[about_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_title_partial',
    ) );
}

// about title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_sub_title]', array(
		'selector'            => '#coast-about-us .content-align-left .section-subtitle p',
		'settings'            => 'coast_pro_theme_options[about_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_sub_title_partial',
    ) );
}

// about description setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_description]', array(
	'sanitize_callback' => 'wp_kses_post',
	'default'			=> $options['about_description'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_description]', array(
	'label'           	=> esc_html__( 'Description', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_content_custom_enable',
	'type'				=> 'textarea',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_description]', array(
		'selector'            => '#coast-about-us .content-align-left p.coast-paragraph',
		'settings'            => 'coast_pro_theme_options[about_description]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_description_partial',
    ) );
}

// about btn title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_btn_title]', array(
		'selector'            => '#coast-about-us .content-align-left .more-button a',
		'settings'            => 'coast_pro_theme_options[about_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_btn_title_partial',
    ) );
}

// about btn link setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_btn_link]', array(
	'sanitize_callback' => 'esc_url_raw',
	'default'			=> $options['about_btn_link'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_btn_link]', array(
	'label'           	=> esc_html__( 'Button Link', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_content_custom_enable',
	'type'				=> 'url',
) );

// about_us side image setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_us_background]', array(
	'sanitize_callback' => 'coast_pro_sanitize_image'
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coast_pro_theme_options[about_us_background]',
		array(
		'label'       		=> esc_html__( 'Select Image ', 'coast' ),
		'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'coast' ), 640, 800 ),
		'section'     		=> 'coast_pro_about_section',
		'active_callback'	=> 'coast_pro_is_about_section_content_custom_enable',
) ) );


/***************additional about us**************** */

// Additioanl content enable for additional part control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[about_section_enable_second_section]', array(
	'default'			=> 	$options['about_section_enable_second_section'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[about_section_enable_second_section]', array(
	'label'             => esc_html__( 'More About Us Section', 'coast' ),
	'section'           => 'coast_pro_about_section',
	'on_off_label' 		=> coast_pro_switch_options(),
	'active_callback'   => 'coast_pro_is_about_section_enable',
) ) );

// about title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_title_second]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_title_second'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_title_second]', array(
	'label'           	=> esc_html__( 'Title', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable_second',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_title_second]', array(
		'selector'            => '#coast-about-us .wrapper .content-align-right h2.section-title',
		'settings'            => 'coast_pro_theme_options[about_title_second]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_title_second_partial',
    ) );
}

// Additioanl about title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_sub_title_second]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_sub_title_second'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_sub_title_second]', array(
	'label'           	=> esc_html__( 'Sub Title', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable_second',
	'type'				=> 'text',
) );

// abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_sub_title_second]', array(
		'selector'            => '#coast-about-us .content-align-right .entry-header .section-subtitle p',
		'settings'            => 'coast_pro_theme_options[about_sub_title_second]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_title_partial_second',
    ) );
}

// about description setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_description_second]', array(
	'sanitize_callback' => 'wp_kses_post',
	'default'			=> $options['about_description_second'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_description_second]', array(
	'label'           	=> esc_html__( 'Description', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable_second',
	'type'				=> 'textarea',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_description_second]', array(
		'selector'            => '#coast-about-us .content-align-right p.coast-paragraph',
		'settings'            => 'coast_pro_theme_options[about_description_second]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_description_partial_second',
    ) );
}

// about btn title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_btn_title_second]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['about_btn_title_second'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_btn_title_second]', array(
	'label'           	=> esc_html__( 'Button Label', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable_second',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[about_btn_title_second]', array(
		'selector'            => '#coast-about-us .content-align-right .entry-content a',
		'settings'            => 'coast_pro_theme_options[about_btn_title_second]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_about_btn_title_partial_second',
    ) );
}

// about btn link setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_btn_link_second]', array(
	'sanitize_callback' => 'esc_url_raw',
	'default'			=> $options['about_btn_link'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[about_btn_link_second]', array(
	'label'           	=> esc_html__( 'Button Link', 'coast' ),
	'section'        	=> 'coast_pro_about_section',
	'active_callback' 	=> 'coast_pro_is_about_section_enable_second',
	'type'				=> 'url',
) );

// about_us side image setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[about_us_background_second]', array(
	'sanitize_callback' => 'coast_pro_sanitize_image'
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coast_pro_theme_options[about_us_background_second]',
		array(
		'label'       		=> esc_html__( 'Select Image ', 'coast' ),
		'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'coast' ), 640, 800 ),
		'section'     		=> 'coast_pro_about_section',
		'active_callback'	=> 'coast_pro_is_about_section_enable_second',
) ) );
