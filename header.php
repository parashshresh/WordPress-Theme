<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Theme Palace
	 * @subpackage Coast Pro
	 * @since Coast Pro 1.0.0
	 */

	/**
	 * coast_pro_doctype hook
	 *
	 * @hooked coast_pro_doctype -  10
	 *
	 */
	do_action( 'coast_pro_doctype' );

?>
<head>


<?php
	/**
	 * coast_pro_before_wp_head hook
	 *
	 * @hooked coast_pro_head -  10
	 *
	 */
	do_action( 'coast_pro_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<?php
	/**
	 * coast_pro_page_start_action hook
	 *
	 * @hooked coast_pro_page_start -  10
	 *
	 */
	do_action( 'coast_pro_page_start_action' ); 

	/**
	 * coast_pro_loader_action hook
	 *
	 * @hooked coast_pro_loader -  10
	 *
	 */
	do_action( 'coast_pro_before_header' );

	/**
	 * coast_pro_header_action hook
	 *
	 * @hooked coast_pro_header_start -  10
	 * @hooked coast_pro_site_branding -  20
	 * @hooked coast_pro_site_navigation -  30
	 * @hooked coast_pro_header_end -  50
	 *
	 */
	do_action( 'coast_pro_header_action' );

	/**
	 * coast_pro_content_start_action hook
	 *
	 * @hooked coast_pro_content_start -  10
	 *
	 */
	do_action( 'coast_pro_content_start_action' );

	/**
	 * coast_pro_header_image_action hook
	 *
	 * @hooked coast_pro_header_image -  10
	 *
	 */
	do_action( 'coast_pro_header_image_action' );
	if ( coast_pro_is_frontpage() ) {

    	$sorted = $sorted = explode( ',' , coast_pro_get_homepage_sections() );
		
		foreach ( $sorted as $section ) {
			add_action( 'coast_pro_primary_content', 'coast_pro_add_'. $section .'_section' );
		}

		do_action( 'coast_pro_primary_content' );
	}