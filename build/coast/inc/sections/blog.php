<?php

/**
 * Blog section
 *
 * This is the template for the content of blog section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_blog_section')) :
    /**
     * Add blog section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_blog_section()
    {
        $options = coast_pro_get_theme_options();
        // Check if blog is enabled on frontpage
        $blog_enable = apply_filters('coast_pro_section_status', true, 'blog_section_enable');

        if (true !== $blog_enable) {
            return false;
        }
        // Get blog section details
        $section_details = array();
        $section_details = apply_filters('coast_pro_filter_blog_section_details', $section_details);

        if (empty($section_details)) {
            return;
        }

        // Render blog section now.
        coast_pro_render_blog_section($section_details);
    }
endif;

if (!function_exists('coast_pro_get_blog_section_details')) :
    /**
     * blog section details.
     *
     * @since Coast Pro 1.0.0
     * @param array $input blog section details.
     */
    function coast_pro_get_blog_section_details($input)
    {
        $options = coast_pro_get_theme_options();

        // Content type.
        $blog_content_type  = $options['blog_content_type'];
        $blog_count = !empty($options['blog_count']) ? $options['blog_count'] : 4;

        $content = array();
        switch ($blog_content_type) {

            case 'page':
                $page_ids = array();

                for ($i = 1; $i <= $blog_count; $i++) {
                    if (!empty($options['blog_content_page_' . $i]))
                        $page_ids[] = $options['blog_content_page_' . $i];
                }

                $args = array(
                    'post_type'         => 'page',
                    'post__in'          => (array) $page_ids,
                    'posts_per_page'    => absint($blog_count),
                    'orderby'           => 'post__in',
                );
                break;

            case 'post':
                $post_ids = array();

                for ($i = 1; $i <= $blog_count; $i++) {
                    if (!empty($options['blog_content_post_' . $i]))
                        $post_ids[] = $options['blog_content_post_' . $i];
                }

                $args = array(
                    'post_type'         => 'post',
                    'post__in'          => (array) $post_ids,
                    'posts_per_page'    => absint($blog_count),
                    'orderby'           => 'post__in',
                    'ignore_sticky_posts'   => true,
                );
                break;

            case 'category':
                $cat_id = !empty($options['blog_content_category']) ? $options['blog_content_category'] : '';
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => absint($blog_count),
                    'cat'               => absint($cat_id),
                    'ignore_sticky_posts'   => true,
                );
                break;

            case 'recent':
                $cat_ids = !empty($options['blog_category_exclude']) ? $options['blog_category_exclude'] : array();
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => absint($blog_count),
                    'category__not_in'  => (array) $cat_ids,
                    'ignore_sticky_posts'   => true,
                );
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
                $page_post['excerpt']   = coast_pro_trim_content(20);
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_id(), 'post-thumbnail') : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

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
// blog section content details.
add_filter('coast_pro_filter_blog_section_details', 'coast_pro_get_blog_section_details');


if (!function_exists('coast_pro_render_blog_section')) :
    /**
     * Start blog section
     *
     * @return string blog content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_blog_section($content_details = array())
    {
        $options = coast_pro_get_theme_options();
        $blog_content_type  = $options['blog_content_type'];

        $section_class = 'page-section';

        if (empty($content_details)) {
            return;
        } ?>

        <div id="coast-blog" class="relative <?php echo esc_attr($section_class); ?>">
            <div class="wrapper">
                <div class="section-header">
                    <?php if (!empty($options['blog_sub_title'])) : ?>
                        <p class="section-subtitle"><?php echo esc_html($options['blog_sub_title']); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($options['blog_title'])) : ?>
                        <h2 class="section-title"><?php echo esc_html($options['blog_title']); ?></h2>
                    <?php endif; ?>
                </div><!-- .section-header -->

                <div class="section-content col-3 clear">
                    <?php foreach ($content_details as $content) : ?>
                        <article>
                            <div class="blog-wrapper">
                                <div class="blog-wrapper-1 relative">
                                    <div class="featured-image" style="background-image: url('<?php echo esc_url($content['image']); ?>');"></div>

                                    <div class="view-more">
                                        <a href="<?php echo esc_url($content['url']); ?>" class="btn"><?php echo esc_html($options['blog_btn_title']); ?> </a>
                                    </div> <!-- view more -->

                                    <div class="entry-container">
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <span class="screen-reader-text">
                                                </span>
                                                <a><?php coast_pro_posted_on($content['id']); ?></a>
                                            </span><!-- .posted-on -->

                                            <header class="entry-header">
                                            <h2 class="entry-title"><a href="<?php echo esc_url($content['url']); ?>"><?php echo esc_html($content['title']); ?></a></h2>
                                        </header>
                                            <div class="entry-content">
                                                <p><?php echo wp_kses_post($content['excerpt']); ?></p>
                                            </div><!-- .entry-content -->
                                        </div>
                                       

                                    </div>
                                </div>

                            </div>
                        </article>
                    <?php endforeach; ?>
                </div><!-- .archive-blog-wrapper -->


            </div><!-- .wrapper -->
        </div><!-- #latest-posts -->
<?php }
endif;
