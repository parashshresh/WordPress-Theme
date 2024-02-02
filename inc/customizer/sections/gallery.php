<?php
/**
 * gallery Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add gallery section
$wp_customize->add_section( 'coast_pro_gallery_section', array(
	'title'             => esc_html__( 'Gallery','coast-pro' ),
	'description'       => esc_html__( 'Gallery Section options.', 'coast-pro' ),
	'panel'             => 'coast_pro_front_page_panel',
) );

// gallery content enable control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[gallery_section_enable]', array(
	'default'			=> 	$options['gallery_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[gallery_section_enable]', array(
	'label'             => esc_html__( 'Gallery Section Enable', 'coast-pro' ),
	'section'           => 'coast_pro_gallery_section',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[gallery_section_enable]', array(
		'selector'            => '#coast_pro_gallery_section .tooltiptext',
		'settings'            => 'coast_pro_theme_options[gallery_section_enable]',
    ) );
}

// Sub Title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[gallery_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => $options['gallery_sub_title'],
	'transport'			=> 'postMessage',
	) );

$wp_customize->add_control( 'coast_pro_theme_options[gallery_sub_title]', array(
	'label'             => sprintf( esc_html__( 'Section Sub Title', 'coast-pro' ) ),
	'section'        	=> 'coast_pro_gallery_section',
	'active_callback' 	=> 'coast_pro_is_gallery_section_enable',
	'type'				=> 'text',
	) );

	// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[gallery_sub_title]', array(
		'selector'            => '#coast-gallery .section-header p.section-subtitle',
		'settings'            => 'coast_pro_theme_options[gallery_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_gallery_sub_title_partial',
    ) );
}

// Title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[gallery_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default' => $options['gallery_title'],
	'transport'			=> 'postMessage',
	) );

$wp_customize->add_control( 'coast_pro_theme_options[gallery_title]', array(
	'label'             => sprintf( esc_html__( 'Section Title', 'coast-pro' ) ),
	'section'        	=> 'coast_pro_gallery_section',
	'active_callback' 	=> 'coast_pro_is_gallery_section_enable',
	'type'				=> 'text',
	) );

	// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[gallery_title]', array(
		'selector'            => '#coast-gallery h2.section-title',
		'settings'            => 'coast_pro_theme_options[gallery_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_gallery_title_partial',
    ) );
}

//view more label settings and control
$wp_customize->add_setting( 'coast_pro_theme_options[gallery_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field', 
	'default'          	=> $options['gallery_btn_title'],
	) );

$wp_customize->add_control( 'coast_pro_theme_options[gallery_btn_title]', array(
	'label'             => sprintf( esc_html__( 'View More Button Label', 'coast-pro' ) ),
	'section'        	=> 'coast_pro_gallery_section',
	'active_callback' 	=> 'coast_pro_is_gallery_section_enable',
	'type'				=> 'text',
	) );
		// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[gallery_btn_title]', array(
		'selector'            => '#coast-gallery .more-link',
		'settings'            => 'coast_pro_theme_options[gallery_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_gallery_btn_title_partial',
    ) );
}
// view more buton url setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[gallery_btn_url]', array(
	'sanitize_callback' => 'esc_url_raw',
	'default'          	=> $options['gallery_btn_url'],
	) );

$wp_customize->add_control( 'coast_pro_theme_options[gallery_btn_url]', array(
	'label'             => sprintf( esc_html__( 'View More Url', 'coast-pro' ) ),
	'section'        	=> 'coast_pro_gallery_section',
	'active_callback' 	=> 'coast_pro_is_gallery_section_enable',
	'type'				=> 'url',
	) );

	// gallery count is 6 as of now
for ( $i = 1; $i <= $options['gallery_count']; $i++ ) :

	$wp_customize->add_setting( 'coast_pro_theme_options[gallery_image_' .$i. ']', array(
		'sanitize_callback' => 'coast_pro_sanitize_image'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coast_pro_theme_options[gallery_image_' .$i. ']',
			array(
			'label'       		=> esc_html__( 'Gallery Image ', 'coast-pro' ).$i,
			'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'coast-pro' ), 650, 700 ),
			'section'     		=> 'coast_pro_gallery_section',
			'active_callback'	=> 'coast_pro_is_gallery_section_enable',
	) ) );

endfor;


