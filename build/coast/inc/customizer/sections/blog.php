<?php
/**
 * Blog Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add Blog section
$wp_customize->add_section( 'coast_pro_blog_section', array(
	'title'             => esc_html__( 'Blog','coast' ),
	'description'       => esc_html__( 'Blog Section options.', 'coast' ),
	'panel'             => 'coast_pro_front_page_panel',
) );

// Blog content enable control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[blog_section_enable]', array(
	'default'			=> 	$options['blog_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
) );

$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[blog_section_enable]', array(
	'label'             => esc_html__( 'Blog Section Enable', 'coast' ),
	'section'           => 'coast_pro_blog_section',
	'on_off_label' 		=> coast_pro_switch_options(),
) ) );

// blog title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[blog_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[blog_sub_title]', array(
	'label'           	=> esc_html__( 'Section Sub Title', 'coast' ),
	'section'        	=> 'coast_pro_blog_section',
	'active_callback' 	=> 'coast_pro_is_blog_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[blog_sub_title]', array(
		'selector'            => '#coast-blog .section-header p.section-subtitle',
		'settings'            => 'coast_pro_theme_options[blog_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_blog_sub_title_partial',
    ) );
}

// blog title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[blog_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[blog_title]', array(
	'label'           	=> esc_html__( 'Section Title', 'coast' ),
	'section'        	=> 'coast_pro_blog_section',
	'active_callback' 	=> 'coast_pro_is_blog_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[blog_title]', array(
		'selector'            => '#coast-blog .section-header h2.section-title',
		'settings'            => 'coast_pro_theme_options[blog_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_blog_title_partial',
    ) );
}



// blog btn title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[blog_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[blog_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'coast' ),
	'section'        	=> 'coast_pro_blog_section',
	'active_callback' 	=> 'coast_pro_is_blog_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[blog_btn_title]', array(
		'selector'            => '#coast-blog .read-more a.btn',
		'settings'            => 'coast_pro_theme_options[blog_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_blog_btn_title_partial',
    ) );
}



// blog btn title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[blog_alt_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_alt_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'coast_pro_theme_options[blog_alt_btn_title]', array(
	'label'           	=> esc_html__( 'Alt Button Label', 'coast' ),
	'section'        	=> 'coast_pro_blog_section',
	'active_callback' 	=> 'coast_pro_is_blog_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[blog_alt_btn_title]', array(
		'selector'            => '#coast_pro_blog_section .view-more a',
		'settings'            => 'coast_pro_theme_options[blog_alt_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_blog_alt_btn_title_partial',
    ) );
}

// blog btn title setting and control
$wp_customize->add_setting( 'coast_pro_theme_options[blog_alt_btn_url]', array(
	'sanitize_callback' => 'esc_url_raw',
	'default'          	=> $options['blog_alt_btn_url'],
) );

$wp_customize->add_control( 'coast_pro_theme_options[blog_alt_btn_url]', array(
	'label'           	=> esc_html__( 'Alt Button Link', 'coast' ),
	'section'        	=> 'coast_pro_blog_section',
	'active_callback' 	=> 'coast_pro_is_blog_section_enable',
	'type'				=> 'url',
) );

// Blog content type control and setting
$wp_customize->add_setting( 'coast_pro_theme_options[blog_content_type]', array(
	'default'          	=> $options['blog_content_type'],
	'sanitize_callback' => 'coast_pro_sanitize_select',
) );

$wp_customize->add_control( 'coast_pro_theme_options[blog_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'coast' ),
	'section'           => 'coast_pro_blog_section',
	'type'				=> 'select',
	'active_callback' 	=> 'coast_pro_is_blog_section_enable',
	'choices'			=> coast_pro_blog_content_type(),
) );


for ( $i = 1; $i <=3; $i++ ) :
	// blog pages drop down chooser control and setting
	$wp_customize->add_setting( 'coast_pro_theme_options[blog_content_page_' . $i . ']', array(
		'sanitize_callback' => 'coast_pro_sanitize_page',
	) );

	$wp_customize->add_control( new Coast_Pro_Dropdown_Chooser( $wp_customize, 'coast_pro_theme_options[blog_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'coast' ), $i ),
		'section'           => 'coast_pro_blog_section',
		'choices'			=> coast_pro_page_choices(),
		'active_callback'	=> 'coast_pro_is_blog_section_content_page_enable',
	) ) );

	// blog posts drop down chooser control and setting
	$wp_customize->add_setting( 'coast_pro_theme_options[blog_content_post_' . $i . ']', array(
		'sanitize_callback' => 'coast_pro_sanitize_page',
	) );

	$wp_customize->add_control( new Coast_Pro_Dropdown_Chooser( $wp_customize, 'coast_pro_theme_options[blog_content_post_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Post %d', 'coast' ), $i ),
		'section'           => 'coast_pro_blog_section',
		'choices'			=> coast_pro_post_choices(),
		'active_callback'	=> 'coast_pro_is_blog_section_content_post_enable',
	) ) );

endfor;

// Add dropdown category setting and control.
$wp_customize->add_setting(  'coast_pro_theme_options[blog_content_category]', array(
	'sanitize_callback' => 'coast_pro_sanitize_single_category',
) ) ;

$wp_customize->add_control( new Coast_Pro_Dropdown_Taxonomies_Control( $wp_customize,'coast_pro_theme_options[blog_content_category]', array(
	'label'             => esc_html__( 'Select Category', 'coast' ),
	'description'      	=> esc_html__( 'Note: Latest selected no of posts will be shown from selected category', 'coast' ),
	'section'           => 'coast_pro_blog_section',
	'type'              => 'dropdown-taxonomies',
	'active_callback'	=> 'coast_pro_is_blog_section_content_category_enable'
) ) );

// Add dropdown categories setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[blog_category_exclude]', array(
	'sanitize_callback' => 'coast_pro_sanitize_category_list',
) ) ;

$wp_customize->add_control( new Coast_Pro_Dropdown_Category_Control( $wp_customize,'coast_pro_theme_options[blog_category_exclude]', array(
	'label'             => esc_html__( 'Select Excluding Categories', 'coast' ),
	'description'      	=> esc_html__( 'Note: Select categories to exclude. Press Shift key select multilple categories.', 'coast' ),
	'section'           => 'coast_pro_blog_section',
	'type'              => 'dropdown-categories',
	'active_callback'	=> 'coast_pro_is_blog_section_content_recent_enable'
) ) );



