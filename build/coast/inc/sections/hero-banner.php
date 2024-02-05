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
if (!function_exists('coast_pro_add_hero_banner_section')) :
    /**
     * Add featured section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_hero_banner_section()
    {
        $options = coast_pro_get_theme_options();
        // Check if destination is enabled on frontpage
        $hero_banner_enable = apply_filters('coast_pro_section_status', true, 'hero_banner_section_enable');

        if (true !== $hero_banner_enable) {
            return false;
        }


        // Render destination section now.
        coast_pro_render_hero_banner_section();
    }
endif;

if (!function_exists('coast_pro_render_hero_banner_section')) :
    /**
     * Start destination section
     *
     * @return string destination content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_hero_banner_section($content_details = array())
    {
        $options = coast_pro_get_theme_options();

        $video_logo = get_template_directory_uri() . '/assets/images/play.svg';
        $hero_banner_background_default = get_template_directory_uri() . '/assets/images/hero.png';
        $featured_video = !empty($options['hero_banner_play_video_url']) ? $options['hero_banner_play_video_url'] : '';

        $section_class = 'page-section';

?>
        <div id="coast_hero_banner" class="<?php echo esc_attr($section_class); ?>">

            <div class="wrapper">
                <div class="coast-hero-banner-wrapper">
                    <div class="entry-container">
                        <div class="entry-header">
                            <?php if (!empty($options['hero_banner_sub_title'])) : ?>
                                <p class="entry-subtitle"><?php echo esc_html($options['hero_banner_sub_title']); ?></p>
                            <?php endif ?>


                            <?php if (!empty($options['hero_banner_title'])) : ?>
                                <h2 class="entry-title"><?php echo esc_html($options['hero_banner_title']); ?></h2>
                        </div><!-- .section-header -->
                    <?php endif ?>


                    <div class="entry-content">
                        <?php if (!empty($options['hero_banner_content'])) : ?>

                            <p class="coast-content-p"><?php echo esc_html($options['hero_banner_content']); ?>
                            </p>
                        <?php endif ?>

                        <div class="hero-banner-play-video-button">
                            <?php if (!empty($options['hero_banner_btn_label'])) : ?>

                                <a href="<?php echo esc_url($options['hero_banner_btn_url']); ?>" type="submit" class="search-submit">
                                    <?php echo esc_html($options['hero_banner_btn_label']); ?>
                                </a>
                            <?php endif ?>

                            <?php if (!empty($options['hero_banner_play_video_url'])) : ?>

                                <div class="video-icon">
                                    <?php echo file_get_contents($video_logo); ?>
                                    <span id="open-popup-button" class="button-title">Play a video</span>



                                    <div id="coast-pro-video-container" style="display: none;">
                                        
                                        <iframe id="youtube-video" width="1000" height="500" src="<?php echo esc_url($options['hero_banner_play_video_url']); ?>" frameborder="0" allowfullscreen autoplay></iframe>
                                        <!-- <span id="stop-video-button" class="button-title"><strong>X</strong></span> -->
                                    </div>

                                </div>
                            <?php endif ?>

                        </div>

                        <div class="hero-banner-search">
                            <?php if (class_exists('WP_Travel')) : ?>
                                <div class="travel-search-wrapper">
                                    <div class="wp-travel-search">
                                        <?php wptravel_search_form(); ?>
                                    </div>
                                </div><!-- .travel-search-wrapper -->
                            <?php endif; ?>

                            <?php if ('true' == $options['hero_banner_client_enable']) : ?>
                                <div class="client-section">
                                    <div class="column c1">
                                        <?php if (!empty($options['hero_banner_client_section_1'])) : ?>

                                            <img src="<?php echo esc_url($options['hero_banner_client_section_1']) ?>" alt="">
                                        <?php endif ?>
                                    </div>
                                    <div class="column c2">
                                        <?php if (!empty($options['hero_banner_client_section_2'])) : ?>

                                            <img src="<?php echo esc_url($options['hero_banner_client_section_2']) ?>" alt="">
                                        <?php endif ?>
                                    </div>
                                    <div class="column c3">
                                        <?php if (!empty($options['hero_banner_client_section_3'])) : ?>

                                            <img src="<?php echo esc_url($options['hero_banner_client_section_3']) ?>" alt="">
                                        <?php endif ?>
                                    </div>
                                    <div class="column c4">
                                        <?php if (!empty($options['hero_banner_client_section_4'])) : ?>

                                            <img src="<?php echo esc_url($options['hero_banner_client_section_4']) ?>" alt="">
                                        <?php endif ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div><!-- .entry-content -->
                    </div><!-- .entry-container -->

                    <div class="featured-image">
                        <img src="<?php echo (empty($options['hero_banner_background']) ? esc_url($hero_banner_background_default) : esc_url($options['hero_banner_background'])); ?>">

                        <a href="#" class="post-thumbnail-link"></a>
                    </div>
                </div>
            </div><!-- .wrapper -->

        </div><!-- #coast_pro_hero_banner -->
        <script>

        </script>
<?php }
endif;
