<?php
// /**
//  * Demo Import.
//  *
//  * This is the template that includes all the other files for core featured of Theme Palace
//  *
//  * @package Theme Palace
//  * @subpackage Mega Tour Pro
//  * @sinceMega Mega Tour Pro 1.0.0
//  */


function coast_pro_ctdi_plugin_page_setup( $default_settings ) {
    $default_settings['menu_title']  = esc_html__( 'Theme Palace Demo Import' , 'coast' );

    return $default_settings;
}
add_filter( 'cp-ctdi/plugin_page_setup', 'coast_pro_ctdi_plugin_page_setup' );


function coast_pro_ctdi_import_files() {
    return array(

        array(
            'import_file_name'             => esc_html__( 'Dark', 'coast' ),
            'categories'                   => array( ),
            'local_import_file'            => get_template_directory() . '/assets/demo/dark/content.xml',
            'local_import_widget_file'     => get_template_directory() . '/assets/demo/dark/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/assets/demo/dark/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/assets/demo/dark/screenshot.jpg',
            'import_notice'                => esc_html__( 'Please wait for a few minutes, do not close the window or refresh the page until the data is imported.', 'coast' ),
            'preview_url'                  => 'https://themepalacedemo.com/coast-dark',
        ),

        array(
            'import_file_name'             => esc_html__( 'Pro', 'coast' ),
            'categories'                   => array( ),
            'local_import_file'            => get_template_directory() . '/assets/demo/pro/content.xml',
            'local_import_widget_file'     => get_template_directory() . '/assets/demo/pro/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/assets/demo/pro/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/assets/demo/pro/screenshot.jpg',
            'import_notice'                => esc_html__( 'Please wait for a few minutes, do not close the window or refresh the page until the data is imported.', 'coast' ),
            'preview_url'                  => 'https://themepalacedemo.com/coast-pro',
        ),

        array(
            'import_file_name'             => esc_html__( 'Blog', 'coast' ),
            'categories'                   => array( ),
            'local_import_file'            => get_template_directory() . '/assets/demo/blog/content.xml',
            'local_import_widget_file'     => get_template_directory() . '/assets/demo/blog/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/assets/demo/blog/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/assets/demo/blog/screenshot.jpg',
            'import_notice'                => esc_html__( 'Please wait for a few minutes, do not close the window or refresh the page until the data is imported.', 'coast' ),
            'preview_url'                  => 'https://themepalacedemo.com/coast-blog',
        ),

        array(
            'import_file_name'             => esc_html__( 'medical', 'coast' ),
            'categories'                   => array( ),
            'local_import_file'            => get_template_directory() . '/assets/demo/medical/content.xml',
            'local_import_widget_file'     => get_template_directory() . '/assets/demo/medical/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/assets/demo/medical/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/assets/demo/medical/screenshot.jpg',
            'import_notice'                => esc_html__( 'Please wait for a few minutes, do not close the window or refresh the page until the data is imported.', 'coast' ),
            'preview_url'                  => 'https://themepalacedemo.com/coast-medical',
        ),

        array(
            'import_file_name'             => esc_html__( 'Shop', 'coast' ),
            'categories'                   => array( ),
            'local_import_file'            => get_template_directory() . '/assets/demo/shop/content.xml',
            'local_import_widget_file'     => get_template_directory() . '/assets/demo/shop/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/assets/demo/shop/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/assets/demo/shop/screenshot.jpg',
            'import_notice'                => esc_html__( 'Please wait for a few minutes, do not close the window or refresh the page until the data is imported.', 'coast' ),
            'preview_url'                  => 'https://themepalacedemo.com/coast-shop',
        ),
    );
}
add_filter( 'cp-ctdi/import_files', 'coast_pro_ctdi_import_files' );



function coast_pro_ctdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'TheMenu', 'nav_menu' );
    $social = get_term_by('name', 'social', 'nav_menu');

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            'social' => $social->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'cp-ctdi/after_import', 'coast_pro_ctdi_after_import_setup' );

// add_action( 'cp-ctdi/enable_wp_customize_save_hooks', '__return_true' );