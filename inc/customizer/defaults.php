<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 * @return array An array of default values
 */
function coast_pro_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$coast_pro_default_options = array(
		// Color Options
		'header_title_color'			=> '#000',
		'header_tagline_color'			=> '#000',
		'header_txt_logo_extra'			=> 'show-all',
		'colorscheme_hue'				=> '#00afe9',
		'colorscheme'					=> 'default',
		'theme_version'					=> 'lite-version',
		
		// typography Options
		'theme_typography' 				=> 'default',
		'body_theme_typography' 		=> 'default',

		//body typography
		'body_font_family'			=> 'Lato',
		'body_font_weight'			=> 300,
		'body_font_size'			=> 16,
		'body_font_style'			=> 'normal',
		'body_text_transform'		=> 'none',

		//h1 typography
		'heading_h1_font_family'		=> 'Arima',
		'heading_h1_font_weight'		=> 300,
		'heading_h1_text_transform'		=> 'none',
		'heading_h1_font_style'			=> 'normal',

		//h2 typography
		'heading_h2_font_family'		=> 'Arima',
		'heading_h2_font_weight'		=> 700,
		'heading_h2_text_transform'		=> 'none',
		'heading_h2_font_style'			=> 'normal',

		//h3 typography
		'heading_h3_font_family'		=> 'Arima',
		'heading_h3_font_weight'		=> 700,
		'heading_h3_text_transform'		=> 'none',
		'heading_h3_font_style'			=> 'normal',

		//h4 typography
		'heading_h4_font_family'		=> 'Arima',
		'heading_h4_font_weight'		=> 700,
		'heading_h4_text_transform'		=> 'none',
		'heading_h4_font_style'			=> 'normal',

		//h5 typography
		'heading_h5_font_family'		=> 'Arima',
		'heading_h5_font_weight'		=> 700,
		'heading_h5_text_transform'		=> 'none',
		'heading_h5_font_style'			=> 'normal',

		//h6 typography
		'heading_h6_font_family'		=> 'Arima',
		'heading_h6_font_weight'		=> 700,
		'heading_h6_text_transform'		=> 'none',
		'heading_h6_font_style'			=> 'normal',

		//p typography
		'heading_p_font_family'			=> 'Lato',
		'heading_p_font_weight'			=> 400,
		'heading_p_text_transform'		=> 'none',
		'heading_p_font_style'			=> 'normal',

		//button
		'button_background_color'		=> '#e5f8fc',
		'button_text_color'		=> '#00afe9',
		

		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',
		
		// layout 
		'site_layout'         			=> 'wide-layout',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'menu_sticky'					=> true,
		'primary_menu_header_button_enable'				=> false,
		'menu_first_btn_label'			=> esc_html__( 'Log in', 'coast-pro' ),
		'menu_second_btn_label'			=> esc_html__( 'Sign Up', 'coast-pro' ),


		// excerpt options
		'long_excerpt_length'           => 25,
		
		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'coast-pro' ), '[the-year]', '[site-link]' ),
		'powered_by_text'           	=> esc_html__( ' | All Rights Reserved | ', 'coast-pro' ) . esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'coast-pro' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( ucwords( $theme_data->get( 'Author' ) ) ) .'</a>',
		'scroll_top_visible'        	=> true,

		// reset options
		'reset_options'      			=> false,
		
		// homepage options
		'enable_frontpage_content' 		=> false,

		// homepage sections sortable
		'default_sortable' 				=> 'hero_banner,about,destination,featured,subscribe,gallery,blog',

		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( 'Blogs', 'coast-pro' ),
		'hide_btn' 						=> false,
		'hide_category'					=> false,
		'hide_content'					=> false,
		'hide_image'					=> false,

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		/* Front Page */

		// hero_banner
		'hero_banner_sub_title'			=> esc_html__( 'Amazing', 'coast-pro' ),
		'hero_banner_title'				=> esc_html__( 'Thailand', 'coast-pro' ),
		'hero_banner_content'				=> esc_html__( 'A couple of years ago, I decided to stop taking photographs. I have never been one to hold on to physical possessions. It only felt right, then, that I rid myself the escape of digital one, too.', 'coast-pro' ),
		'hero_banner_btn_label'				=> esc_html__( 'Exploere Now', 'coast-pro' ),
		'hero_banner_section_enable'	=> true,
		'hero_banner_content_type'		=> 'category',
		'hero_banner_btn_url'			=> esc_url('#', 'coast-pro'),
		'hero_banner_play_video_url' 	=> esc_url('#', 'coast-pro'),
		'hero_banner_client_enable'  	=> 'false',
		'hero_banner_background'        => esc_html('','coast-pro'),


		// about us
		'about_section_enable'			=> true,
		'about_section_enable_second_section'=> false,
		'about_title'					=> esc_html__( 'Always Helpin You Find Your Dream Tour', 'coast-pro' ),
		'about_sub_title'				=> esc_html__( 'About Us', 'coast-pro' ),
		'about_description'				=> esc_html__( 'A couple of years ago, I decided to stop taking photographs. I have never been one to hold on to physical possessions. It only felt right, then, that I ride myself the escape of digital one, too.', 'coast-pro' ),
		'about_btn_title'				=> esc_html__( 'Know Coast Theme', 'coast-pro' ),
		'about_top_space_enable'		=> true,
		'about_bottom_space_enable'		=> false,
		'about_btn_link'				=> '#',
		'about_us_background'	    	=> esc_url('#', 'coast-pro'),
		'about_sub_title_second'		=> esc_html__('','coast-pro'),
		'about_title_second'			=> esc_html__( 'Book Your Next Trip In Most Easy Way', 'coast-pro' ),
		'about_description_second'		=> esc_html__( 'A couple of years ago, I decided to stop taking photographs. I have never been one to hold on to physical possessions. It only felt right, then, that I ride myself the escape of digital one, too.', 'coast-pro' ),
		'about_btn_title_second'		=> esc_html__( 'Call To Action', 'coast-pro' ),
		'about_btn_link_second'			=> esc_url('#', 'coast-pro'),
		'about_us_background_second'	=> esc_url('#', 'coast-pro'),

		// blog
		'blog_section_enable'			=> true,
		'blog_content_type'				=> 'recent',
		'blog_count'					=> 3,
		'blog_title'					=> esc_html__( 'Our Recent Articles', 'coast-pro' ),
		'blog_sub_title'				=> esc_html__( 'Whats Happening', 'coast-pro' ),
		'blog_btn_title'				=> esc_html__( 'Read More', 'coast-pro' ),
		'blog_alt_btn_title'			=> esc_html__( 'Show All Aricle', 'coast-pro' ),
		'blog_top_space_enable'	=> true,
		'blog_bottom_space_enable'	=> false,
		'blog_alt_btn_url'			=> '#',


		// gallery
		'gallery_section_enable'	=> true,
		'gallery_count'				=> 6,
		'gallery_title'				=> esc_html__( 'Make Memories All Around The World', 'coast-pro' ),
		'gallery_sub_title'			=> esc_html__( 'Our Gallery', 'coast-pro' ),
		'gallery_btn_title'			=> esc_html__( 'View All Gallery', 'coast-pro' ),
		'gallery_btn_url'			=> esc_url('#', 'coast-pro'),


		// subscribe
		'subscribe_section_enable'			=> true,
		'subscribe_title'					=> esc_html__( 'Prepare Yourself & Let’s Explore The Beauty Of The World', 'coast-pro' ),
		'subscribe_description'				=> esc_html__( 'Join our newsletter and get coupons upto 20% off', 'coast-pro' ),
		'subscribe_btn_title'				=> esc_html__( 'Subscribe Now', 'coast-pro' ),


		//destination
		'destination_section_enable'	=> true,
		'destination_auto_play'			=> true,
		'destination_content_type'		=> 'destination',
		'destination_content_destination'  => '',
		'destination_count'				=> 4,
		'destination_title'				=> esc_html__( 'We Provide Best Destinations For You', 'coast-pro' ),
		'destination_sub_title'			=> esc_html__( 'A couple of years ago, I decided to stop taking photographs. I have never been one to hold on to physical possessions. It only felt right, then, that I rid myself the escape of digital one, too', 'coast-pro' ),
		'destination_select'			=> false,

		// featured
		'featured_section_enable'	=> true,
		'featured_auto_play'		=> false,
		'featured_content_type'		=> 'trip',
		'featured_count'			=> 4,
		'featured_title'			=> esc_html__( 'Browse By An Interest', 'coast-pro' ),
		'featured_sub_title'		=> esc_html__( 'A couple of years ago, I decided to stop taking photographs. I have never been one to hold on to physical possessions. It only felt right, then, that I rid myself the escape of digital one, too', 'coast-pro' ),
	);

	$output = apply_filters( 'coast_pro_default_theme_options', $coast_pro_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}