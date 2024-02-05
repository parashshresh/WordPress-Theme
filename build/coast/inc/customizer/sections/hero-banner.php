<?php

/**
 * Hero Banner Section options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Add Hero Banner section
$wp_customize->add_section('coast_pro_hero_banner_section', array(
	'title'             => esc_html__('Hero Banner', 'coast'),
	'description'       => esc_html__('Hero Banner Section options.', 'coast'),
	'panel'             => 'coast_pro_front_page_panel',
));

// Hero Banner content enable control and setting
$wp_customize->add_setting('coast_pro_theme_options[hero_banner_section_enable]', array(
	'default'			=> 	$options['hero_banner_section_enable'],
	'sanitize_callback' => 'coast_pro_sanitize_switch_control',
));

$wp_customize->add_control(new Coast_Pro_Switch_Control($wp_customize, 'coast_pro_theme_options[hero_banner_section_enable]', array(
	'label'             => esc_html__('Hero Banner Section Enable', 'coast'),
	'section'           => 'coast_pro_hero_banner_section',
	'on_off_label' 		=> coast_pro_switch_options(),
)));

// hero_banner background image setting and control
$wp_customize->add_setting('coast_pro_theme_options[hero_banner_background]', array(
	'sanitize_callback' => 'coast_pro_sanitize_image'
));

$wp_customize->add_control(new WP_Customize_Image_Control(
	$wp_customize,
	'coast_pro_theme_options[hero_banner_background]',
	array(
		'label'       		=> esc_html__('Background Image ', 'coast'),
		'description' 		=> sprintf(esc_html__('Recommended size: %1$dpx x %2$dpx ', 'coast'), 1000, 1280),
		'section'     		=> 'coast_pro_hero_banner_section',
		'active_callback'	=> 'coast_pro_is_hero_banner_section_enable',
	)
));


$wp_customize->add_setting('coast_pro_theme_options[hero_banner_sub_title]', array(
	'default'			=> $options['hero_banner_sub_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
));

$wp_customize->add_control('coast_pro_theme_options[hero_banner_sub_title]', array(
	'label'           	=> esc_html__('Section Sub Title', 'coast'),
	'section'        	=> 'coast_pro_hero_banner_section',
	'active_callback' 	=> 'coast_pro_is_hero_banner_section_enable',
	'type'				=> 'text',
));

// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[hero_banner_sub_title]', array(
		'selector'            => '#coast_hero_banner p.entry-subtitle',
		'settings'            => 'coast_pro_theme_options[hero_banner_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_hero_banner_sub_title_partial',
	));
}

// Hero Banner title setting and control
$wp_customize->add_setting('coast_pro_theme_options[hero_banner_title]', array(
	'default'			=> $options['hero_banner_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
));

$wp_customize->add_control('coast_pro_theme_options[hero_banner_title]', array(
	'label'           	=> esc_html__('Section Title', 'coast'),
	'section'        	=> 'coast_pro_hero_banner_section',
	'active_callback' 	=> 'coast_pro_is_hero_banner_section_enable',
	'type'				=> 'text',
));

// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[hero_banner_title]', array(
		'selector'            => '#coast_hero_banner h2.entry-title',
		'settings'            => 'coast_pro_theme_options[hero_banner_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_hero_banner_title_partial',
	));
}

// Hero Banner section setting and control
$wp_customize->add_setting('coast_pro_theme_options[hero_banner_content]', array(
	'default'			=> $options['hero_banner_content'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
));

$wp_customize->add_control('coast_pro_theme_options[hero_banner_content]', array(
	'label'           	=> esc_html__('Section Content', 'coast'),
	'section'        	=> 'coast_pro_hero_banner_section',
	'active_callback' 	=> 'coast_pro_is_hero_banner_section_enable',
	'type'				=> 'textarea',
));

// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[hero_banner_content]', array(
		'selector'            => '#coast_hero_banner .entry-content p.coast-content-p',
		'settings'            => 'coast_pro_theme_options[hero_banner_content]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_hero_banner_content_partial',
	));
}

// Hero Banner Button setting and control
$wp_customize->add_setting('coast_pro_theme_options[hero_banner_btn_label]', array(
	'default'			=> $options['hero_banner_btn_label'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'			=> 'postMessage',
));

$wp_customize->add_control('coast_pro_theme_options[hero_banner_btn_label]', array(
	'label'           	=> esc_html__('Btn Label', 'coast'),
	'section'        	=> 'coast_pro_hero_banner_section',
	'active_callback' 	=> 'coast_pro_is_hero_banner_section_enable',
	'type'				=> 'text',
));

// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[hero_banner_btn_label]', array(
		'selector'            => '#coast_hero_banner .hero-banner-play-video-button a.search-submit',
		'settings'            => 'coast_pro_theme_options[hero_banner_btn_label]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_hero_banner_btn_label_partial',
	));
}
// hero_banner button url setting and control
$wp_customize->add_setting(
	'coast_pro_theme_options[hero_banner_btn_url]',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'			=> $options['hero_banner_btn_url'],
		'transport'			=> 'postMessage',
	)
);

$wp_customize->add_control(
	'coast_pro_theme_options[hero_banner_btn_url]',
	array(
		'section'			=> 'coast_pro_hero_banner_section',
		'label'				=> esc_html__('Button URL', 'coast'),
		'type'          	=> 'text',
		'active_callback'	=> 'coast_pro_is_hero_banner_section_enable',
	)
);


// hero_banner play_video's url link setting and control
$wp_customize->add_setting(
	'coast_pro_theme_options[hero_banner_play_video_url]',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'			=> 'postMessage',
	)
);

$wp_customize->add_control(
	'coast_pro_theme_options[hero_banner_play_video_url]',
	array(
		'section'			=> 'coast_pro_hero_banner_section',
		'label'				=> esc_html__('Play Video Button URL', 'coast'),
		'type'          	=> 'text',
		'active_callback'	=> 'coast_pro_is_hero_banner_section_enable',
	)
);
// Abort if selective refresh is not available.
if (isset($wp_customize->selective_refresh)) {
	$wp_customize->selective_refresh->add_partial('coast_pro_theme_options[hero_banner_play_video_url]', array(
		'selector'            => '#coast_hero_banner .video-icon a',
		'settings'            => 'coast_pro_theme_options[hero_banner_play_video_url]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_is_hero_banner_section_enable',
	));
}
