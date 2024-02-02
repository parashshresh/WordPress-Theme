<?php
/**
 * Theme Palace options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

/**
 * List of pages for page choices.
 * @return Array Array of page ids and name.
 */
function coast_pro_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'coast-pro' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}

/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function coast_pro_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'coast-pro' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

/**
 * List of trips for post choices.
 * @return Array Array of post ids and name.
 */
function coast_pro_trip_choices() {
    $posts = get_posts( array( 'post_type' => 'itineraries', 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'coast-pro' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

function coast_pro_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'category',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'coast-pro' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}


if ( ! function_exists( 'coast_pro_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function coast_pro_selected_sidebar() {
        $coast_pro_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'coast-pro' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'coast-pro' ),
            'optional-sidebar-2'    => esc_html__( 'Optional Sidebar 2', 'coast-pro' ),
            'optional-sidebar-3'    => esc_html__( 'Optional Sidebar 3', 'coast-pro' ),
            'optional-sidebar-4'    => esc_html__( 'Optional Sidebar 4', 'coast-pro' ),
        );

        $output = apply_filters( 'coast_pro_selected_sidebar', $coast_pro_selected_sidebar );

        return $output;
    }
endif;

if ( ! function_exists( 'coast_pro_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function coast_pro_site_layout() {
        $coast_pro_site_layout = array(
            'wide-layout'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
            'frame-layout' => get_template_directory_uri() . '/assets/images/framed.png',
        );

        $output = apply_filters( 'coast_pro_site_layout', $coast_pro_site_layout );
        return $output;
    }
endif;


if ( ! function_exists( 'coast_pro_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function coast_pro_global_sidebar_position() {
        $coast_pro_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'coast_pro_global_sidebar_position', $coast_pro_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'coast_pro_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function coast_pro_sidebar_position() {
        $coast_pro_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'coast_pro_sidebar_position', $coast_pro_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'coast_pro_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function coast_pro_pagination_options() {
        $coast_pro_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'coast-pro' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'coast-pro' ),
        );

        $output = apply_filters( 'coast_pro_pagination_options', $coast_pro_pagination_options );

        return $output;
    }
endif;

if ( ! function_exists( 'coast_pro_get_spinner_list' ) ) :
    /**
     * List of spinner icons options.
     * @return array List of all spinner icon options.
     */
    function coast_pro_get_spinner_list() {
        $arr = array(
            'default'               => esc_html__( 'Default', 'coast-pro' ),
            'spinner-wheel'         => esc_html__( 'Wheel', 'coast-pro' ),
            'spinner-double-circle' => esc_html__( 'Double Circle', 'coast-pro' ),
            'spinner-two-way'       => esc_html__( 'Two Way', 'coast-pro' ),
            'spinner-umbrella'      => esc_html__( 'Umbrella', 'coast-pro' ),
            'spinner-dots'          => esc_html__( 'Dots', 'coast-pro' ),
            'spinner-one-way'       => esc_html__( 'One Way', 'coast-pro' ),
            'spinner-fidget'        => esc_html__( 'Fidget', 'coast-pro' ),
        );
        return apply_filters( 'coast_pro_spinner_list', $arr );
    }
endif;

if ( ! function_exists( 'coast_pro_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function coast_pro_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'coast-pro' ),
            'off'       => esc_html__( 'Disable', 'coast-pro' )
        );
        return apply_filters( 'coast_pro_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'coast_pro_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function coast_pro_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'coast-pro' ),
            'off'       => esc_html__( 'No', 'coast-pro' )
        );
        return apply_filters( 'coast_pro_hide_options', $arr );
    }
endif;

if ( ! function_exists( 'coast_pro_sortable_sections' ) ) :
    /**
     * List of sections Control options
     * @return array List of Sections control options.
     */
    function coast_pro_sortable_sections() {
        $sections = array(
            'hero_banner'                       => esc_html__( 'Hero Banner', 'coast-pro' ),
            'featured'                          => esc_html__( 'Featured', 'coast-pro' ),
            'blog'                              => esc_html__( 'Blog', 'coast-pro' ),
            'testimonial'                       => esc_html__( 'Testimonial', 'coast-pro' ),
            'destination'                       => esc_html__( 'Destination', 'coast-pro' ),
            'about'                             => esc_html__( 'About', 'coast-pro' ),
            'gallery'                           => esc_html__( 'Gallery', 'coast-pro' ),
            'counter'                           => esc_html__( 'Counter', 'coast-pro' ),
            'subscribe'                         => esc_html__( 'Subscribe Us', 'coast-pro' ),
        );
        return apply_filters( 'coast_pro_sortable_sections', $sections );
    }
endif;



if ( ! function_exists( 'coast_pro_blog_content_type' ) ) :
    /**
     * blog options
     * @return array site blog options
     */
    function coast_pro_blog_content_type() {
        $coast_pro_blog_content_type = array(
            'category'  => esc_html__( 'Category', 'coast-pro' ),
        );

        $output = apply_filters( 'coast_pro_blog_content_type', $coast_pro_blog_content_type );


        return $output;
    }
endif;

if ( ! function_exists( 'coast_pro_featured_content_type' ) ) :
    /**
     * featured Options
     * @return array site featured options
     */
    function coast_pro_featured_content_type() {
        if ( class_exists( 'WP_Travel' ) ) {
            $coast_pro_featured_content_type = array(
                'trip'          => esc_html__( 'Trip', 'coast-pro' ),
            );
        }
        $output = apply_filters( 'coast_pro_featured_content_type', $coast_pro_featured_content_type );
        return $output;
    }
endif;
// coast_pro_destination_content_type
if ( !function_exists('coast_pro_destination_content_type')):
        /**
     * Destination Options
     * @return array site destination
     */
    function coast_pro_destination_content_type() {
        if ( class_exists( 'WP_Travel' ) ) {
            $coast_pro_destination_content_type =  array(
                'destination'   => esc_html__( 'Destination', 'coast-pro' ),
                );
        }

        $output = apply_filters( 'coast_pro_destination_content_type', $coast_pro_destination_content_type );


        return $output;
    }
endif;

