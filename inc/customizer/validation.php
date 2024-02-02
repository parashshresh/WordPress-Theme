<?php
/**
* Customizer validation functions
*
* @package Theme Palace
* @subpackage Coast Pro
* @since Coast Pro 1.0.0
*/

if ( ! function_exists( 'coast_pro_validate_long_excerpt' ) ) :
  function coast_pro_validate_long_excerpt( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 5 ) {
		 $validity->add( 'min_no_of_words', esc_html__( 'Minimum no of words is 5', 'coast-pro' ) );
	 } elseif ( $value > 100 ) {
		 $validity->add( 'max_no_of_words', esc_html__( 'Maximum no of words is 100', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_slider_count' ) ) :
  function coast_pro_validate_slider_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'coast-pro' ) );
	 } elseif ( $value > 10 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_featured_count' ) ) :
  function coast_pro_validate_featured_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 3 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 3', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_popular_destination_count' ) ) :
  function coast_pro_validate_popular_destination_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 3 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 3', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_traveler_choice_count' ) ) :
  function coast_pro_validate_traveler_choice_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'coast-pro' ) );
	 } elseif ( $value > 10 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_service_count' ) ) :
  function coast_pro_validate_service_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 3 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 3', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_blog_count' ) ) :
  function coast_pro_validate_blog_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 2 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 2', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_discover_places_count' ) ) :
  function coast_pro_validate_discover_places_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'coast-pro' ) );
	 } elseif ( $value > 10 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_destination_count' ) ) :
	function coast_pro_validate_destination_count( $validity, $value ){
		   $value = intval( $value );
	   if ( empty( $value ) || ! is_numeric( $value ) ) {
		   $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	   } elseif ( $value < 1 ) {
		   $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'coast-pro' ) );
	   } elseif ( $value > 10 ) {
		   $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 10', 'coast-pro' ) );
	   }
	   return $validity;
	}
  endif;

if ( ! function_exists( 'coast_pro_validate_popular_count' ) ) :
  function coast_pro_validate_popular_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 3 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 3', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_recent_count' ) ) :
  function coast_pro_validate_recent_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 3 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 3', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_most_view_count' ) ) :
  function coast_pro_validate_most_view_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 2 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 2', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'coast_pro_validate_popular_product_count' ) ) :
  function coast_pro_validate_popular_product_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'coast-pro' ) );
	 } elseif ( $value < 4 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 4', 'coast-pro' ) );
	 } elseif ( $value > 12 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'coast-pro' ) );
	 }
	 return $validity;
  }
endif;
