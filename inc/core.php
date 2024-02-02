<?php
/**
 * Core file.
 *
 * This is the template that includes all the other files for core featured of Theme Palace
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */

/**
 * Load theme updater functions.
 * Action is used so that child themes can easily disable.
 */
function coast_pro_pro_theme_updater() {
    if( is_admin() ) {
        require get_template_directory() . '/inc/updater/theme-updater.php';
    }
}
add_action( 'after_setup_theme', 'coast_pro_pro_theme_updater' );

/**
 * Include options function.
 */
require get_template_directory() . '/inc/options.php';


// Load customizer defaults values
require get_template_directory() . '/inc/customizer/defaults.php';


/**
 * Merge values from default options array and values from customizer
 *
 * @return array Values returned from customizer
 * @since Coast Pro 1.0.0
 */
function coast_pro_get_theme_options() {
  $coast_pro_default_options = coast_pro_get_default_theme_options();

  return array_merge( $coast_pro_default_options , get_theme_mod( 'coast_pro_theme_options', $coast_pro_default_options ) ) ;
}

/**
 * Load admin custom styles
 * 
 */
function coast_pro_load_admin_style() {
    wp_register_style( 'coast_pro_admin_css', get_template_directory_uri() . '/assets/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'coast_pro_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'coast_pro_load_admin_style' );

/**
 * Add breadcrumb functions.
 */
require get_template_directory() . '/inc/breadcrumb-class.php';

/**
 * Add helper functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Add structural hooks.
 */
require get_template_directory() . '/inc/structure.php';

/**
 * Add metabox
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/sections/sections.php';

if ( class_exists( 'CatchThemesDemoImportPlugin' ) ) {
    /**
    * CT plugin demo importer compatibility.
    */
    require get_template_directory() . '/inc/demo-import.php';
}
/**
* Download webfonts locally.
*/
require get_template_directory() . '/inc/wptt-webfont-loader.php';
