<?php
/**
* Partial functions
*
* @package Theme Palace
* @subpackage Coast Pro
* @since Coast Pro 1.0.0
*/

// Hero Banner

if ( ! function_exists( 'coast_pro_hero_banner_sub_title_partial' ) ) :
    function coast_pro_hero_banner_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['hero_banner_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_hero_banner_title_partial' ) ) :
    function coast_pro_hero_banner_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['hero_banner_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_hero_banner_content_partial' ) ) :
    function coast_pro_hero_banner_content_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['hero_banner_content'] );
    }
endif;

if ( ! function_exists( 'coast_pro_hero_banner_btn_label_partial' ) ) :
    function coast_pro_hero_banner_btn_label_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['hero_banner_btn_label'] );
    }
endif;


// About Us

if ( ! function_exists( 'coast_pro_about_title_partial' ) ) :
    function coast_pro_about_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_about_sub_title_partial' ) ) :
    function coast_pro_about_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_about_description_partial' ) ) :
    function coast_pro_about_description_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_description'] );
    }
endif;

if ( ! function_exists( 'coast_pro_about_btn_title_partial' ) ) :
    function coast_pro_about_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_btn_title'] );
    }
endif;

/**********additional about us************ */

if ( ! function_exists( 'coast_pro_about_sub_title_partial_second' ) ) :
    function coast_pro_about_sub_title_partial_second() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_sub_title_second'] );
    }
endif;

if ( ! function_exists( 'coast_pro_about_title_second_partial' ) ) :
    function coast_pro_about_title_second_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_title_second'] );
    }
endif;

if ( ! function_exists( 'coast_pro_about_description_partial_second' ) ) :
    function coast_pro_about_description_partial_second() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_description_second'] );
    }
endif;

if ( ! function_exists( 'coast_pro_about_btn_title_partial_second' ) ) :
    function coast_pro_about_btn_title_partial_second() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['about_btn_title_second'] );
    }
endif;


// Featured

if ( ! function_exists( 'coast_pro_featured_sub_title_partial' ) ) :
    function coast_pro_featured_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['featured_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_featured_title_partial' ) ) :
    function coast_pro_featured_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['featured_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_featured_description_partial' ) ) :
    function coast_pro_featured_description_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['featured_description'] );
    }
endif;


// Blog

if ( ! function_exists( 'coast_pro_blog_sub_title_partial' ) ) :
    function coast_pro_blog_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_blog_title_partial' ) ) :
    function coast_pro_blog_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_blog_btn_title_partial' ) ) :
    function coast_pro_blog_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_btn_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_blog_alt_btn_title_partial' ) ) :
    function coast_pro_blog_alt_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_alt_btn_title'] );
    }
endif;


// destination

if ( ! function_exists( 'coast_pro_destination_sub_title_partial' ) ) :
    function coast_pro_destination_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['destination_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_destination_title_partial' ) ) :
    function coast_pro_destination_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['destination_title'] );
    }
endif;


// Gallery 

if ( ! function_exists( 'coast_pro_gallery_sub_title_partial' ) ) :
    function coast_pro_gallery_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['gallery_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_gallery_title_partial' ) ) :
    function coast_pro_gallery_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['gallery_title'] );
    }
endif;


if ( ! function_exists( 'coast_pro_gallery_btn_title_partial' ) ) :
    function coast_pro_gallery_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['gallery_btn_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_gallery_short_description_partial' ) ) :
    function coast_pro_gallery_short_description_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['gallery_short_description'] );
    }
endif;




//subscribe 

if ( ! function_exists( 'coast_pro_subscribe_title_partial' ) ) :
    // subscribe title
    function coast_pro_subscribe_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['subscribe_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_subscribe_description_partial' ) ) :
    // subscribe sub title
    function coast_pro_subscribe_description_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['subscribe_description'] );
    }
endif;


if ( ! function_exists( 'coast_pro_subscribe_btn_title_partial' ) ) :
    // subscribe sub title
    function coast_pro_subscribe_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['subscribe_btn_title'] );
    }
endif;

//blog 


if ( ! function_exists( 'coast_pro_blog_title_partial' ) ) :
    // blog title
    function coast_pro_blog_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_blog_sub_title_partial' ) ) :
    // blog title
    function coast_pro_blog_sub_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_sub_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_blog_btn_title_partial' ) ) :
    // blog btn title
    function coast_pro_blog_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_btn_title'] );
    }
endif;

if ( ! function_exists( 'coast_pro_blog_alt_btn_title_partial' ) ) :
    // blog btn title
    function coast_pro_blog_alt_btn_title_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['blog_alt_btn_title'] );
    }
endif;



if ( ! function_exists( 'coast_pro_copyright_text_partial' ) ) :
    // copyright text
    function coast_pro_copyright_text_partial() {
        $options = coast_pro_get_theme_options();
        return esc_html( $options['copyright_text'] );
    }
endif;

if ( ! function_exists( 'coast_pro_powered_by_text_partial' ) ) :
    // powered by text
    function coast_pro_powered_by_text_partial() {
        $options = coast_pro_get_theme_options();
        return coast_pro_santize_allow_tag( $options['powered_by_text'] );
    }
endif;
