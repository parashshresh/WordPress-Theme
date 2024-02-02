<?php
/**
 * Theme Palace widgets inclusion
 *
 * This is the template that includes all custom widgets of Coast Pro
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */


require get_template_directory() . '/inc/widgets/editors-choice.php';

require get_template_directory() . '/inc/widgets/social-link-widget.php';

require get_template_directory() . '/inc/widgets/popular-posts-widget.php';



/**
 * Register widgets
 */
function coast_pro_register_widgets() {

	register_widget( 'Coast_Pro_Editors_Choice' );

	register_widget( 'Coast_Pro_Popular_Post' );

	register_widget( 'Coast_Pro_Social_Link' );

}
add_action( 'widgets_init', 'coast_pro_register_widgets' );