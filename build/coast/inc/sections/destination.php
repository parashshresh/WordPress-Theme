<?php

/**
 * Destination section
 *
 * This is the template for the content of destination section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_destination_section')) :
    /**
     * Add destination section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_destination_section()
    {   
        if (!class_exists('WP_Travel'))
        return;

        $options = coast_pro_get_theme_options();
        // Check if destination is enabled on frontpage
        $destination_enable = apply_filters('coast_pro_section_status', true, 'destination_section_enable');

        if (true !== $destination_enable) {
            return false;
        }
        // Get destination section details
        $section_details = array();
        $section_details = apply_filters('coast_pro_filter_destination_section_details', $section_details);

        if (empty($section_details)) {
            return;
        }

        // Render destination section now.
        coast_pro_render_destination_section($section_details);
    }
endif;

if (!function_exists('coast_pro_get_destination_section_details')) :
    /**
     * destination section details.
     *
     * @since Coast Pro 1.0.0
     * @param array $input destination section details.
     */
    function coast_pro_get_destination_section_details($input)
    {
        $options = coast_pro_get_theme_options();

        //content type
        $destination_content_type  = $options['destination_content_type'];

        $destination_count = !empty($options['destination_count']) ? $options['destination_count'] : 4;

        $content = array();
        switch ($destination_content_type) {
            case 'trip':                

                $page_ids = array();

                for ($i = 1; $i <= $destination_count; $i++) {
                    if (!empty($options['destination_content_trip_' . $i]))
                        $page_ids[] = $options['destination_content_trip_' . $i];
                }

                $args = array(
                    'post_type'         => 'itineraries',
                    'post__in'          => (array) $page_ids,
                    'posts_per_page'    => absint($destination_count),
                    'orderby'           => 'post__in',
                );
                break;

            case 'trip-types': // trip-types
   
                for ($i = 1; $i <= $destination_count; $i++) {
                    if (!empty($options['destination_content_trip_types_' . $i])) {
                        $page_post['id']      = $options['destination_content_trip_types_' . $i];
                        $cat_image = get_term_meta($page_post['id'], 'wp_travel_trip_type_image_id', true);

                        $terms = get_term_by('id',  $page_post['id'], 'itinerary_types');

                        if (!empty($terms) && !is_wp_error($terms)) :
                            $page_post['title']   = $terms->name;
                            $page_post['url']     = get_term_link($page_post['id'], 'itinerary_types');
                            $page_post['count']   = $terms->count;
                            $page_post['image'] = !empty($cat_image) ? wp_get_attachment_url($cat_image) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
                        endif;
                    }
                    if (!empty($options['destination_content_trip_types_' . $i]))
                        array_push($content, $page_post);
                }

                break;

            case 'destination': //Destination
     
                for ($i = 1; $i <= $destination_count; $i++) {
                    if (!empty($options['destination_content_destination_' . $i])) {
                        $page_post['id']      = $options['destination_content_destination_' . $i];

                        $cat_image = get_term_meta($page_post['id'], 'wp_travel_trip_type_image_id', true);
                        $terms = get_term_by('id',  $page_post['id'], 'travel_locations');

                        if (!empty($terms) && !is_wp_error($terms)) :
                            $page_post['image'] = !empty($cat_image) ? wp_get_attachment_url($cat_image) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
                            $page_post['title']   = $terms->name;
                            $page_post['url']     = get_term_link($page_post['id'], 'travel_locations');
                            $page_post['count']   = $terms->count;
                        endif;
                    }

                    if (!empty($options['destination_content_destination_' . $i]))
                        array_push($content, $page_post);
                }

                break;

            case 'activity':
           
                for ($i = 1; $i <= $destination_count; $i++) {
                    if (!empty($options['destination_content_activity_' . $i])) {
                        $page_post['id']      = $options['destination_content_activity_' . $i];

                        $cat_image = get_term_meta($page_post['id'], 'wp_travel_trip_type_image_id', true);
                        $terms = get_term_by('id',  $page_post['id'], 'activity');

                        if (!empty($terms) && !is_wp_error($terms)) :
                            $page_post['image'] = !empty($cat_image) ? wp_get_attachment_url($cat_image) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
                            $page_post['title']   = $terms->name;
                            $page_post['url']     = get_term_link($page_post['id'], 'activity');
                            $page_post['count']   = $terms->count;
                        endif;
                    }

                    if (!empty($options['destination_content_activity_' . $i]))
                        array_push($content, $page_post);
                }

                break;

            default:
                break;
        }
        // Run The Loop.
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['image']      = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_id(), 'post-thumbnail') : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

                // Push to the main array.
                array_push($content, $page_post);
            endwhile;
        endif;
        wp_reset_postdata();



        if (!empty($content)) {
            $input = $content;
        }
        return $input;
    }
endif;
// destination section content details.
add_filter('coast_pro_filter_destination_section_details', 'coast_pro_get_destination_section_details');

if (!function_exists('coast_pro_render_destination_section')) :
    /**
     * Start destination section
     *
     * @return string destination content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_destination_section($content_details = array())
    {

        $options = coast_pro_get_theme_options();

        $section_class = 'page-section';

        if (empty($content_details)) {
            return;
        } ?>

        <div id="coast_pro_destination_section" class="relative <?php echo esc_attr($section_class); ?>">
            <div class="wrapper">
                <?php if (!empty($options['destination_sub_title'])) :  ?>

                    <div class="section-header">
                        <h2 class="section-title"><?php echo esc_html($options['destination_title']); ?></h2>
                    </div><!-- .section-header -->
                <?php endif; ?>


                <?php if (!empty($options['destination_sub_title'])) : ?>
                    <div class="section-content">
                        <p><?php echo esc_html($options['destination_sub_title']) ?></p>
                    </div><!-- .section-content -->
                <?php endif; ?>
                <div class="clear"></div>
                <div class="coast-rect-block1"></div>
                <div class="coast-rect-block2"></div>

                <div class="coast_pro_destination_section-slider">
                    <?php $i = 1;
                    foreach ($content_details as $content) : ?>
                        <article style="width: 365px; display: inline;">
                            <div class="featured-image">
                                <img src="<?php echo esc_url($content['image']); ?>">
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo esc_url($content['url']); ?>"><?php echo esc_html($content['title']); ?></a></h2>
                                    </header>
                                    <?php if (!empty($content['count'])) : ?>
                                        <span class="destination-description">
                                            <?php echo sprintf('<p>%d&nbsp;%s</p>', esc_html($content['count']), __('Packages', 'coast')); ?> </p>
                                        </span>
                                    <?php endif ?>
                                </div>
                            </div>

                        </article>
                    <?php $i++;
                    endforeach; ?>
                </div><!-- .section-content -->
            </div><!-- .wrapper -->
        </div><!-- .client-destination -->

<?php }
endif;
