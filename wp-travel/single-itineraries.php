<?php
/**
 *
 * This template can be overridden by copying it to yourtheme/wp-travel/single-itineraries.php.
 *
 * HOWEVER, on occasion wp-travel will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.wensolutions.com/document/template-structure/
 * @author  WenSolutions
 * @package WP_Travel
 * @since   1.0.0
 */

get_header( 'itinerary' ); 

echo "<div class='page-section wrapper'><div id='primary'>";

?>


<?php do_action( 'wp_travel_before_main_content' ); ?>
<?php
while ( have_posts() ) :
	the_post();
	?>

	<?php
	$itinerary_layout_v2_enabled = wptravel_use_itinerary_v2_layout();

	if ( $itinerary_layout_v2_enabled ) {
		wptravel_get_template_part( 'content', 'single-itineraries-v2' ); // @since v5.0.0.
	} else {
		wptravel_get_template_part( 'content', 'single-itineraries' );
	}
	?>

<?php endwhile; // end of the loop. ?>
<?php do_action( 'wp_travel_after_main_content' ); ?>
<?php

echo "</div>";

get_sidebar();

echo "</div>";

get_footer( 'itinerary' );
