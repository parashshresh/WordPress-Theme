<?php

/**
 * Featured section
 *
 * This is the template for the content of featured section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_featured_section')) :
    /**
     * Add featured section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_featured_section()
    {   
        if (!class_exists('WP_Travel'))
        return;

        $options = coast_pro_get_theme_options();
        // Check if featured is enabled on frontpage
        $featured_enable = apply_filters('coast_pro_section_status', true, 'featured_section_enable');

        if (true !== $featured_enable) {
            return false;
        }
        // Get featured section details
        $section_details = array();
        $section_details = apply_filters('coast_pro_filter_featured_section_details', $section_details);

        if (empty($section_details)) {
            return;
        }

        // Render featured section now.
        coast_pro_render_featured_section($section_details);
    }
endif;

if (!function_exists('coast_pro_get_featured_section_details')) :
    /**
     * featured section details.
     *
     * @since Coast Pro 1.0.0
     * @param array $input featured section details.
     */
    function coast_pro_get_featured_section_details($input)
    {
        $options = coast_pro_get_theme_options();

        // Content type.
        $featured_content_type  = $options['featured_content_type'];
        $featured_count = !empty($options['featured_count']) ? $options['featured_count'] : 4;
        $content = array();
        switch ($featured_content_type) {
            case 'trip':
                
                $page_ids = array();

                for ($i = 1; $i <= $featured_count; $i++) {
                    if (!empty($options['featured_content_trip_' . $i]))
                        $page_ids[] = $options['featured_content_trip_' . $i];
                }

                $args = array(
                    'post_type'         => 'itineraries',
                    'post__in'          => (array) $page_ids,
                    'posts_per_page'    => absint($featured_count),
                    'orderby'           => 'post__in',
                );
                break;

            case 'trip-types': // trip-types
         
                for ($i = 1; $i <= $featured_count; $i++) {
                    if (!empty($options['featured_content_trip_types_' . $i])) {
                        $page_post['id']      = $options['featured_content_trip_types_' . $i];
                        $cat_image = get_term_meta($page_post['id'], 'wp_travel_trip_type_image_id', true);

                        $terms = get_term_by('id',  $page_post['id'], 'itinerary_types');

                        if (!empty($terms) && !is_wp_error($terms)) :
                            $page_post['title']   = $terms->name;
                            $page_post['url']     = get_term_link($page_post['id'], 'itinerary_types');
                            $page_post['count']   = $terms->count;
                            $page_post['image'] = !empty($cat_image) ? wp_get_attachment_url($cat_image) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
                        endif;
                    }
                    if (!empty($options['featured_content_trip_types_' . $i]))
                        array_push($content, $page_post);
                }

                break;

            case 'destination': //Destination
       
                for ($i = 1; $i <= $featured_count; $i++) {
                    if (!empty($options['featured_content_featured_' . $i])) {
                        $page_post['id']      = $options['featured_content_featured_' . $i];

                        $cat_image = get_term_meta($page_post['id'], 'wp_travel_trip_type_image_id', true);
                        $terms = get_term_by('id',  $page_post['id'], 'travel_locations');

                        if (!empty($terms) && !is_wp_error($terms)) :
                            $page_post['image'] = !empty($cat_image) ? wp_get_attachment_url($cat_image) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
                            $page_post['title']   = $terms->name;
                            $page_post['url']     = get_term_link($page_post['id'], 'travel_locations');
                            $page_post['count']   = $terms->count;
                        endif;
                    }

                    if (!empty($options['featured_content_featured_' . $i]))
                        array_push($content, $page_post);
                }

                break;

            case 'activity':

                for ($i = 1; $i <= $featured_count; $i++) {
                    if (!empty($options['featured_content_activity_' . $i])) {
                        $page_post['id']      = $options['featured_content_activity_' . $i];

                        $cat_image = get_term_meta($page_post['id'], 'wp_travel_trip_type_image_id', true);
                        $terms = get_term_by('id',  $page_post['id'], 'activity');

                        if (!empty($terms) && !is_wp_error($terms)) :
                            $page_post['image'] = !empty($cat_image) ? wp_get_attachment_url($cat_image) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';
                            $page_post['title']   = $terms->name;
                            $page_post['url']     = get_term_link($page_post['id'], 'activity');
                            $page_post['count']   = $terms->count;
                        endif;
                    }

                    if (!empty($options['featured_content_activity_' . $i]))
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
// featured section content details.
add_filter('coast_pro_filter_featured_section_details', 'coast_pro_get_featured_section_details');


if (!function_exists('coast_pro_render_featured_section')) :
    /**
     * Start featured section
     *
     * @return string featured content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_featured_section($content_details = array())
    {
        $options = coast_pro_get_theme_options();

        $section_class = 'page-section';

        if (empty($content_details)) {
            return;
        } ?>

        <div id="coast-interest" class="relative <?php echo esc_attr($section_class); ?>">
            <div class="wrapper">
                <div class="section-header">
                    <?php if (!empty($options['featured_title'])) : ?>
                        <h2 class="section-title"><?php echo esc_html($options['featured_title']); ?></h2>
                    <?php endif; ?>
                </div><!-- .section-header -->
                <div class="section-content">
                    <p><?php echo isset($options['featured_sub_title']) && !empty($options['featured_sub_title']) ? esc_html($options['featured_sub_title']) : __( 'Know More', 'coast' ); ?></p>
                </div><!-- .section-content -->

                <div class="clear"></div>

                <div class="coast-interest-slider relative">

                    <?php $i = 1;
                    foreach ($content_details as $content) : ?>
                        <article style="width: 365px; display: inline;">
                            <div class="featured-image" style="background-image: url('<?php echo esc_url($content['image']); ?>');"></div>
                            <div class="entry-container">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="<?php echo esc_url($content['url']); ?>"><?php echo esc_html($content['title']); ?></a></h2>
                                </header>
                                <?php if (!empty($content['count'])) : ?>
                                    <span class="featured-description">
                                        <?php echo sprintf('<p>%d&nbsp;%s</p>', esc_html($content['count']), __('Packages', 'coast')); ?> </p>
                                    </span>
                                <?php endif ?>
                            </div>

                        </article>
                    <?php $i++;
                    endforeach; ?>

                </div><!-- .section-content -->
            </div><!-- .wrapper -->
        </div><!-- .client-featured -->

<?php }
endif;
