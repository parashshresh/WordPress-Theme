<?php

/**
 * subscribe section
 *
 * This is the template for the content of subscribe section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_subscribe_section')) :
    /**
     * Add subscribe section
     *
     *@since Coast Pro 1.0.0
     */
    function coast_pro_add_subscribe_section()
    {
        $options = coast_pro_get_theme_options();
        // Check if subscribe is enabled on frontpage
        $subscribe_enable = apply_filters('coast_pro_section_status', true, 'subscribe_section_enable');

        if (true !== $subscribe_enable) {
            return false;
        }

        // Render subscribe section now.
        coast_pro_render_subscribe_section();
    }
endif;



if (!function_exists('coast_pro_render_subscribe_section')) :
    /**
     * Start subscribe section
     *
     * @return string subscribe content
     * @since Coast Pro 1.0.0
     *
     */
    function coast_pro_render_subscribe_section()
    {
        $options = coast_pro_get_theme_options();
?>
        <div id="subscribe-now">
            <div id="coast_pro_get_started" class="relative page-section">
                <div class="wrapper">
                    <div class="section-header">
                        <?php if (!empty($options['subscribe_title'])) : ?>
                            <h2 class="section-title"><?php echo esc_html($options['subscribe_title']); ?></h2>
                        <?php endif ?>
                        <?php if (!empty($options['subscribe_description'])) : ?>
                            <p class="section-subtitle"><?php echo esc_html($options['subscribe_description']); ?></p>
                        <?php endif ?>
                    </div>

                    <?php 
                        $subscribe_shortcode = '[jetpack_subscription_form title="" subscribe_text="" subscribe_button="' . esc_html( $options['subscribe_btn_title'] ) . '" show_subscribers_total="0"]';
                        echo do_shortcode( wp_kses_post( $subscribe_shortcode ) );  
                    ?>
                    </div><!-- .subscribe-form-wrapper -->

                </div><!-- .wrapper -->
            </div>

        </div>

<?php
    }
endif;
