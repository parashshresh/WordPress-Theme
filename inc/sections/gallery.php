<?php

/**
 * gallery section
 *
 * This is the template for the content of gallery section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_gallery_section')) :
    /**
     * Add gallery section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_gallery_section()
    {
        $options = coast_pro_get_theme_options();
        // Check if gallery is enabled on frontpage
        $gallery_enable = apply_filters('coast_pro_section_status', true, 'gallery_section_enable');

        if (true !== $gallery_enable) {
            return false;
        }

        // Render gallery section now.
        coast_pro_render_gallery_section();
    }
endif;

if (!function_exists('coast_pro_render_gallery_section')) :
    /**
     * Start gallery section
     *
     * @return string gallery content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_gallery_section()
    {
        $options = coast_pro_get_theme_options();
        $coast_pro_gallery_default_image = get_template_directory_uri() . '/assets/images/1.jpg';
        $image_count = $options['gallery_count'];
        $section_class = 'page-section';
?>
        <div id="coast-gallery" class="relative <?php echo esc_attr($section_class); ?>">
            <div class="wrapper">
                <div class="section-header">

                    <?php if (!empty($options['gallery_sub_title'])) : ?>
                        <p class="section-subtitle"><?php echo esc_html($options['gallery_sub_title']); ?></p>
                    <?php endif ?>
                    <?php if (!empty($options['gallery_title'])) : ?>
                        <h2 class="section-title"><?php echo esc_html($options['gallery_title']); ?></h2>
                    <?php endif ?>
                </div>

                <div class="coast-gallery-wrapper">
                    <div class="row-2">

                        <div class="item-3-width-50">
                            <?php if (!empty($options['gallery_image_1'])) : ?>
                                <article>
                                    <img src="<?php echo esc_url($options['gallery_image_1']); ?>" alt="">
                                </article>
                            <?php endif; ?>
                        </div>
                        <div class="item-3-width-50">
                            <?php if (!empty($options['gallery_image_2'])) : ?>
                                <article>
                                    <img src="<?php echo esc_url($options['gallery_image_2']); ?>" alt="">
                                </article>
                            <?php endif; ?>
                        </div>
                        <div class="item-3-width-100">
                            <?php if (!empty($options['gallery_image_3'])) : ?>
                                <article>
                                    <img src="<?php echo esc_url($options['gallery_image_3']); ?>" alt="">
                                </article>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="row-2 row-2-reverse">
                        <div class="item item-3-width-50">
                            <?php if (!empty($options['gallery_image_4'])) : ?>

                                <article>
                                    <img src="<?php echo esc_url($options['gallery_image_4']); ?>" alt="">
                                </article>
                            <?php endif; ?>

                        </div>
                        <div class="item item-3-width-50">
                            <?php if (!empty($options['gallery_image_5'])) : ?>

                                <article>
                                    <img src="<?php echo esc_url($options['gallery_image_5']); ?>" alt="">
                                </article>
                            <?php endif; ?>

                        </div>
                        <div class="item item-3-width-100">
                            <?php if (!empty($options['gallery_image_6'])) : ?>

                                <article>
                                    <img src="<?php echo esc_url($options['gallery_image_6']); ?>" alt="">
                                </article>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
                <?php if (!empty($options['gallery_btn_title'])) : ?>
                    <div class="more-button">
                        <a class="btn more-link"  href="<?php echo esc_url($options['gallery_btn_url']); ?>">
                            <?php echo esc_html($options['gallery_btn_title']); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>


        </div>
<?php }
endif;
