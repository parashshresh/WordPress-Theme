<?php

/**
 * About section
 *
 * This is the template for the content of about section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_about_section')) :
    /**
     * Add about section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_about_section()
    {
        $options = coast_pro_get_theme_options();
        // Check if about is enabled on frontpage
        $about_enable = apply_filters('coast_pro_section_status', true, 'about_section_enable');
        if (true !== $about_enable) {
            return false;
        }
        // Render about section now.
        coast_pro_render_about_section();
    }
endif;

if (!function_exists('coast_pro_render_about_section')) :
    /**
     * Start about section
     *
     * @return string about content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_about_section()
    {
        $options = coast_pro_get_theme_options();

        $section_class = 'page-section';
      ?>

        <div id="coast-about-us" class="coast-about-us section  text-align-right <?php echo esc_attr($section_class); ?>">
            <div class="wrapper">
                <div class="section-content-wrapper coast-about-us-wrapper">
                    <article id="post-0" class="coast-about-us-wrapper hentry has-post-thumbnail content-align-left">
                        <div class="hentry-inner">
                            <div class="entry-container">
                                <header class="entry-header section-title-wrapper">

                                    <?php if (!empty($options['about_sub_title'])) : ?>
                                        <div class="section-subtitle">
                                            <p><?php echo esc_html($options['about_sub_title']); ?> </p>
                                        </div><!-- .section-description-wrapper -->
                                    <?php endif; ?>

                                    <?php if (!empty($options['about_title'])) : ?>
                                        <h2 class="entry-title section-title"> <?php echo esc_html($options['about_title']); ?> </h2>
                                    <?php endif; ?>

                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <?php if (!empty($options['about_description'])) : ?>
                                        <p class="coast-paragraph">
                                            <?php echo esc_html($options['about_description']); ?>
                                        </p>
                                    <?php endif; ?>
                                        <p class="more-button">
                                            <a href="<?php echo esc_url($options['about_btn_link']); ?>">
                                                <button target="_self" class="more-link">
                                                    <?php echo isset($options['about_btn_title']) && !empty($options['about_btn_title']) ? esc_html($options['about_btn_title']) : __( 'Know More', 'coast' ); ?>
                                                </button>
                                            </a>
                                        </p>
                                </div><!-- .entry-content -->
                            </div><!-- .entry-container -->
                            <?php if (!empty($options['about_us_background'])) : ?>
                                <div class="post-thumbnail-background" style="background-image: url('<?php echo esc_url($options['about_us_background'], 'coast-pro'); ?>');">
                                    <a class="cover-link" href="<?php echo esc_url($options['about_btn_link']); ?>" target="_self">
                                    </a>
                                </div><!-- .post-thumbnail -->
                            <?php endif; ?>

                        </div><!-- .hentry-inner -->
                    </article><!-- article-->

                    <!-- additional about us section -->
                    <?php if ($options['about_section_enable_second_section'] === true) : ?>
                        <article id="post-0" class="hentry has-post-thumbnail content-align-right">
                            <div class="hentry-inner">
                                <?php if (!empty($options['about_us_background_second'])) : ?>
                                    <div class="post-thumbnail-background" style="background-image: url('<?php echo esc_url($options['about_us_background_second']); ?>');">
                                        <a class="cover-link" href="#" target="_self">
                                        </a>
                                    </div><!-- .post-thumbnail -->
                                <?php endif; ?>
                                <div class="entry-container">
                                    <header class="entry-header section-title-wrapper">
                                        <?php if (!empty($options['about_sub_title_second'])) : ?>
                                            <div class="section-subtitle">
                                                <p><?php echo esc_html($options['about_sub_title_second']); ?> </p>
                                            </div><!-- .section-description-wrapper -->
                                        <?php endif; ?>

                                        <?php if (!empty($options['about_title_second'])) : ?>
                                            <h2 class="entry-title section-title"> <?php echo esc_html($options['about_title_second']); ?> </h2>
                                        <?php endif; ?>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <?php if (!empty($options['about_description_second'])): ?>
                                        <p class="coast-paragraph">
                                            <?php echo esc_html($options['about_description_second']); ?>
                                        </p>
                                        <?php endif; ?>
                                            <a href="<?php echo esc_url($options['about_btn_link_second']); ?> ">
                                                <button target="_self" class="more-link">
                                                    <?php echo isset($options['about_btn_title_second']) && !empty($options['about_btn_title_second']) ? esc_html($options['about_btn_title_second']) : __( 'Know More', 'coast' ); ?>
                                                </button>
                                            </a>
                                            </p>
                                    </div><!-- .entry-content -->
                                </div><!-- .entry-container -->


                            </div><!-- .hentry-inner -->
                        </article>
                    <?php endif; ?>
                </div>
            </div><!-- .wrapper -->
        </div>
<?php

    }
endif;
