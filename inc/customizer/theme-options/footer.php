<?php
/**
 * Footer options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

// Footer Section
$wp_customize->add_section( 'coast_pro_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer Options', 'coast-pro' ),
		'priority'   			=> 900,
		'panel'      			=> 'coast_pro_theme_options_panel',
	)
);

// footer text
$wp_customize->add_setting( 'coast_pro_theme_options[copyright_text]',
	array(
		'default'       		=> $options['copyright_text'],
		'sanitize_callback'		=> 'coast_pro_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);
$wp_customize->add_control( 'coast_pro_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'coast-pro' ),
		'section'    			=> 'coast_pro_section_footer',
		'type'		 			=> 'textarea',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[copyright_text]', array(
		'selector'            => '.site-info .copyright p',
		'settings'            => 'coast_pro_theme_options[copyright_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_copyright_text_partial',
    ) );
}


// footer text
$wp_customize->add_setting( 'coast_pro_theme_options[powered_by_text]',
	array(
		'default'       		=> $options['powered_by_text'],
		'sanitize_callback'		=> 'coast_pro_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);
$wp_customize->add_control( 'coast_pro_theme_options[powered_by_text]',
    array(
		'label'      			=> esc_html__( 'Powered By Text', 'coast-pro' ),
		'section'    			=> 'coast_pro_section_footer',
		'type'		 			=> 'textarea',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'coast_pro_theme_options[powered_by_text]', array(
		'selector'            => '.site-info .powered-by p',
		'settings'            => 'coast_pro_theme_options[powered_by_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'coast_pro_powered_by_text_partial',
    ) );
}

// scroll top visible
$wp_customize->add_setting( 'coast_pro_theme_options[scroll_top_visible]',
	array(
		'default'       		=> $options['scroll_top_visible'],
		'sanitize_callback' => 'coast_pro_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Coast_Pro_Switch_Control( $wp_customize, 'coast_pro_theme_options[scroll_top_visible]',
    array(
		'label'      			=> esc_html__( 'Display Scroll Top Button', 'coast-pro' ),
		'section'    			=> 'coast_pro_section_footer',
		'on_off_label' 		=> coast_pro_switch_options(),
    )
) );