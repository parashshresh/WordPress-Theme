<?php
/**
 * Theme Palace basic theme structure hooks
 *
 * This file contains structural hooks.
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

$options = coast_pro_get_theme_options();


if ( ! function_exists( 'coast_pro_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since Coast Pro 1.0.0
	 */
	function coast_pro_doctype() {
	?>
		<!DOCTYPE html>
			<html <?php language_attributes(); ?>>
	<?php
	}
endif;

add_action( 'coast_pro_doctype', 'coast_pro_doctype', 10 );


if ( ! function_exists( 'coast_pro_head' ) ) :
	/**
	 * Header Codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif;
	}
endif;
add_action( 'coast_pro_before_wp_head', 'coast_pro_head', 10 );

if ( ! function_exists( 'coast_pro_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_page_start() {
		?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coast' ); ?></a>

		<?php
	}
endif;
add_action( 'coast_pro_page_start_action', 'coast_pro_page_start', 10 );

if ( ! function_exists( 'coast_pro_header_start' ) ) :
	/**
	 * Header start html codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_header_start() {
		?>
		<div class="menu-overlay"></div>
		<header id="masthead" class="site-header" role="banner">
		<?php
	}
endif;
add_action( 'coast_pro_header_action', 'coast_pro_header_start', 20 );

if ( ! function_exists( 'coast_pro_page_end' ) ) :
	/**
	 * Page end html codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'coast_pro_page_end_action', 'coast_pro_page_end', 10 );

if ( ! function_exists( 'coast_pro_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_site_branding() {
		$options  = coast_pro_get_theme_options();
		$header_txt_logo_extra = $options['header_txt_logo_extra'];		
		?>
		<div class="wrapper">
		<div class="site-branding">
			<?php if ( in_array( $header_txt_logo_extra, array( 'show-all', 'logo-title', 'logo-tagline' ) )  ) { ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php } 
			if ( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title', 'show-all', 'tagline-only', 'logo-tagline' ) ) ) : ?>
				<div id="site-identity">
					<?php
					if( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title' ) )  ) {
						if ( coast_pro_is_latest_posts() || coast_pro_is_frontpage() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;
					} 
					if ( in_array( $header_txt_logo_extra, array( 'show-all', 'tagline-only', 'logo-tagline' ) ) ) {
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
						<?php
						endif; 
					}?>
				</div>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
	}
endif;
add_action( 'coast_pro_header_action', 'coast_pro_site_branding', 20 );

if ( ! function_exists( 'coast_pro_site_navigation' ) ) :
	/**
	 * Site navigation codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_site_navigation() {
		$options = coast_pro_get_theme_options();
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php
					echo coast_pro_get_svg( array( 'icon' => 'menu' ) );
					echo coast_pro_get_svg( array( 'icon' => 'close' ) );
				?>					
			</button>

			<?php  
        		wp_nav_menu( array(
        			'theme_location' => 'primary',
        			'container' => 'div',
        			'menu_class' => 'menu nav-menu',
        			'menu_id' => 'primary-menu',
        			'echo' => true,
        			'fallback_cb' => 'coast_pro_menu_fallback_cb',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . wptravel_get_cart_icon() . '</ul>',
        		) );
        	?>
		</nav><!-- #site-navigation -->
		</div><!-- .wrapper -->
		<?php
	}
endif;
add_action( 'coast_pro_header_action', 'coast_pro_site_navigation', 30 );


if ( ! function_exists( 'coast_pro_header_end' ) ) :
	/**
	 * Header end html codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_header_end() {
		?>
		</header><!-- #masthead -->
		<?php
	}
endif;

add_action( 'coast_pro_header_action', 'coast_pro_header_end', 50 );

if ( ! function_exists( 'coast_pro_content_start' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_content_start() {
		?>
		<div id="content" class="site-content">
		<?php
	}
endif;
add_action( 'coast_pro_content_start_action', 'coast_pro_content_start', 10 );

if ( ! function_exists( 'coast_pro_header_image' ) ) :
	/**
	 * Header Image codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_header_image() {
		if ( coast_pro_is_frontpage() )
			return;
		$header_image = get_header_image();
		$class = '';
		if ( is_singular() ) :
			$class = ( has_post_thumbnail() || ! empty( $header_image ) ) ? '' : 'header-media-disabled';
		else :
			$class = ! empty( $header_image ) ? '' : 'header-media-disabled';
		endif;
		
		if ( is_singular() && has_post_thumbnail() ) : 
			$header_image = get_the_post_thumbnail_url( get_the_id(), 'full' );
    	endif; ?>

    	<div id="page-site-header" class="relative <?php echo esc_attr( $class ); ?>" style="background-image: url('<?php echo esc_url( $header_image ); ?>');">
            <div class="overlay"></div>
            <div class="header-wrapper">
	            <div class="wrapper">
	                <header class="page-header">
	                    <?php coast_pro_custom_header_banner_title(); ?>
	                </header>

	                <?php coast_pro_add_breadcrumb(); ?>
	            </div><!-- .wrapper -->
            </div><!-- .header-wrapper -->
        </div><!-- #page-site-header -->

	<?php
	}
endif;
add_action( 'coast_pro_header_image_action', 'coast_pro_header_image', 10 );

if ( ! function_exists( 'coast_pro_add_breadcrumb' ) ) :
	/**
	 * Add breadcrumb.
	 *
	 * @since Coast Pro 1.0.0
	 */
	function coast_pro_add_breadcrumb() {
		$options = coast_pro_get_theme_options();
		// Bail if Breadcrumb disabled.
		$breadcrumb = $options['breadcrumb_enable'];
		if ( false === $breadcrumb ) {
			return;
		}
		
		// Bail if Home Page.
		if ( coast_pro_is_frontpage() ) {
			return;
		}

		echo '<div id="breadcrumb-list" >';
				/**
				 * coast_pro_simple_breadcrumb hook
				 *
				 * @hooked coast_pro_simple_breadcrumb -  10
				 *
				 */
				do_action( 'coast_pro_simple_breadcrumb' );
		echo '</div><!-- #breadcrumb-list -->';
		return;
	}
endif;

if ( ! function_exists( 'coast_pro_content_end' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_content_end() {
		?>
		</div><!-- #content -->
		<?php
	}
endif;
add_action( 'coast_pro_content_end_action', 'coast_pro_content_end', 10 );

if ( ! function_exists( 'coast_pro_footer_start' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_footer_start() {
		?>
		<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
	}
endif;
add_action( 'coast_pro_footer', 'coast_pro_footer_start', 10 );

if ( ! function_exists( 'coast_pro_footer_site_info' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_footer_site_info() {
		$options = coast_pro_get_theme_options();
		$search = array( '[the-year]', '[site-link]' );

        $replace = array( date( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>' );

        $options['copyright_text'] = str_replace( $search, $replace, $options['copyright_text'] );
        $options['powered_by_text'] = str_replace( $search, $replace, $options['powered_by_text'] );

		$copyright_text = $options['copyright_text']; 
		$powered_by_text = $options['powered_by_text'];
		?>
		<div class="site-info">
            <div class="wrapper">
                <span>
                	<?php 
                	echo coast_pro_santize_allow_tag( $copyright_text ); 
                	if ( function_exists( 'the_privacy_policy_link' ) ) {
						the_privacy_policy_link( ' | ' );
					}
					echo coast_pro_santize_allow_tag( $powered_by_text );
                	?>
            	</span>
            </div><!-- .wrapper -->    
        </div><!-- .site-info -->

		<?php
	}
endif;
add_action( 'coast_pro_footer', 'coast_pro_footer_site_info', 40 );

if ( ! function_exists( 'coast_pro_footer_scroll_to_top' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_footer_scroll_to_top() {
		$options  = coast_pro_get_theme_options();
		if ( true === $options['scroll_top_visible'] ) : ?>
			<div class="backtotop"><?php echo coast_pro_get_svg( array( 'icon' => 'up' ) ); ?></div>
		<?php endif;
	}
endif;
add_action( 'coast_pro_footer', 'coast_pro_footer_scroll_to_top', 40 );

if ( ! function_exists( 'coast_pro_footer_end' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_footer_end() {
		?>
		</footer>
		<div class="popup-overlay"></div>
		<?php
	}
endif;
add_action( 'coast_pro_footer', 'coast_pro_footer_end', 100 );

if ( ! function_exists( 'coast_pro_loader' ) ) :
	/**
	 * Start div id #loader
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_loader() {
		$options = coast_pro_get_theme_options();
		if ( $options['loader_enable'] ) { ?>

			<div id="loader">
            <div class="loader-container">
            	<?php if ( 'default' == $options['loader_icon'] ) : ?>
	                <div id="preloader">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </div>
	            <?php else :
	            	echo coast_pro_get_svg( array( 'icon' => esc_attr( $options['loader_icon'] ) ) );
	            endif; ?>
            </div>
        </div><!-- #loader -->
		<?php }
	}
endif;
add_action( 'coast_pro_before_header', 'coast_pro_loader', 10 );

if ( ! function_exists( 'coast_pro_infinite_loader_spinner' ) ) :
	/**
	 *
	 * @since Coast Pro 1.0.0
	 *
	 */
	function coast_pro_infinite_loader_spinner() { 
		global $post;
		$options = coast_pro_get_theme_options();
		if ( $options['pagination_type'] == 'infinite' ) :
			if ( count( $post ) > 0 ) {
				echo '<div class="blog-loader">' . coast_pro_get_svg( array( 'icon' => 'spinner-umbrella' ) ) . '</div>';
			}
		endif;
	}
endif;
add_action( 'coast_pro_infinite_loader_spinner_action', 'coast_pro_infinite_loader_spinner', 10 );
