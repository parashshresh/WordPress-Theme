<?php
/**
 * Customizer active callbacks
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

if ( ! function_exists( 'coast_pro_is_breadcrumb_enable' ) ) :
	/**
	 * Check if breadcrumb is enabled.
	 *
	 * @since Coast Pro 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function coast_pro_is_breadcrumb_enable( $control ) {
		return $control->manager->get_setting( 'coast_pro_theme_options[breadcrumb_enable]' )->value();
	}
endif;

if ( ! function_exists( 'coast_pro_is_pagination_enable' ) ) :
	/**
	 * Check if pagination is enabled.
	 *
	 * @since Coast Pro 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function coast_pro_is_pagination_enable( $control ) {
		return $control->manager->get_setting( 'coast_pro_theme_options[pagination_enable]' )->value();
	}
endif;

if ( ! function_exists( 'coast_pro_is_static_homepage_enable' ) ) :
	/**
	 * Check if static homepage is enabled.
	 *
	 * @since Coast Pro 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function coast_pro_is_static_homepage_enable( $control ) {
		return ( 'page' == $control->manager->get_setting( 'show_on_front' )->value() );
	}
endif;

/**
 * Check if header button section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_primary_menu_header_button_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[primary_menu_header_button_enable]' )->value() );
}

/**
 * Front Page Active Callbacks
 */

/**
 * Check if hero_banner section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */

 
function coast_pro_is_hero_banner_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[hero_banner_section_enable]' )->value() );
}

/**
 * Check if about section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_about_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[about_section_enable]' )->value() );
}

function coast_pro_is_about_section_enable_second( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[about_section_enable_second_section]' )->value() );
}


function coast_pro_is_about_section_content_custom_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[about_section_enable]' )->value();
	return $content_type;
}

/**
 * Check if blog section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_blog_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[blog_section_enable]' )->value() );
}


function coast_pro_is_blog_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[blog_content_type]' )->value();
	return coast_pro_is_blog_section_enable( $control ) && ( 'post' == $content_type );
}


function coast_pro_is_blog_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[blog_content_type]' )->value();
	return coast_pro_is_blog_section_enable( $control ) && ( 'page' == $content_type );
}


function coast_pro_is_blog_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[blog_content_type]' )->value();
	return coast_pro_is_blog_section_enable( $control ) && ( 'category' == $content_type );
}


function coast_pro_is_blog_section_content_recent_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[blog_content_type]' )->value();
	return coast_pro_is_blog_section_enable( $control ) && ( 'recent' == $content_type );
}


/**
 * Check if destination section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_destination_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[destination_section_enable]' )->value() );
}

function coast_pro_is_destination_section_content_destination_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[destination_content_type]' )->value();
	return coast_pro_is_destination_section_enable( $control ) && ( 'destination' == $content_type );
}



/**
 * Check if featured section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_featured_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[featured_section_enable]' )->value() );
}
function coast_pro_is_featured_section_content_trip_enable( $control ) {
	$content_type = $control->manager->get_setting( 'coast_pro_theme_options[featured_content_type]' )->value();
	return coast_pro_is_featured_section_enable( $control ) && ( 'trip' == $content_type );
}
/**
 * Check if gallery section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_gallery_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[gallery_section_enable]' )->value() );
}

/**
 * Check if counter section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_counter_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[counter_section_enable]' )->value() );
}


/**
 * Check if subscribe section is enabled.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_subscribe_section_enable( $control ) {
	return ( $control->manager->get_setting( 'coast_pro_theme_options[subscribe_section_enable]' )->value() );
}


/**
 * Check if video section content type is category.
 *
 * @since Coast Pro 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function coast_pro_is_heading_tags_enable( $control ) {

	$tags = $control->manager->get_setting( 'coast_pro_theme_options[heading_tags]' )->value();
	return ($control->id == 'coast_pro_theme_options['.$tags.']');

}

//all layout 
function coast_pro_is_all_layout( $control ) {
	$design = $control->manager->get_setting( 'coast_pro_theme_options[home_layout]' )->value();
	return ( 'all-design' == $design );
}


