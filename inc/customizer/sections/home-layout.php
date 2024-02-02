<?php 

$wp_customize->add_section( 'coast_pro_home_layout', array(
	'title'             => esc_html__( 'Home Page Layout','coast-pro' ),
	'description'       => esc_html__( 'Home Page Layout option.', 'coast-pro' ),
	'panel'             => 'coast_pro_front_page_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'coast_pro_theme_options[default_sortable]', array(
	'default'			  => $options['default_sortable'],
	'sanitize_callback'   => 'coast_pro_sanitize_sortable',
) );

$wp_customize->add_control( new Coast_Pro_Customize_Sortable_Control ( $wp_customize, 'coast_pro_theme_options[default_sortable]', array(
	'label'               => esc_html__( 'Sortable Homepage', 'coast-pro' ),
	'description'         => esc_html__( 'Drag and Drop to sort the sections according to your preference.', 'coast-pro' ),
	'section'             => 'coast_pro_home_layout',
	'type'                => 'sortable',
	'choices'			  => coast_pro_sortable_sections(),
) ) );
