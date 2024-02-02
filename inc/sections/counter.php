<?php

/**
 * Counter section
 *
 * This is the template for the content of counter section
 *
 * @package Theme Palace
 * @subpackage Coast Pro
 * @since Coast Pro 1.0.0
 */
if (!function_exists('coast_pro_add_counter_section')) :
  /**
   * Add counter section
   *
   *@since Coast Pro 1.0.0
   */
  function coast_pro_add_counter_section()
  {
    $options = coast_pro_get_theme_options();
    // Check if counter is enabled on frontpage
    $counter_enable = apply_filters('coast_pro_section_status', true, 'counter_section_enable');

    if (true !== $counter_enable) {
      return false;
    }

    // Render counter section now.
    coast_pro_render_counter_section();
  }
endif;

if (!function_exists('coast_pro_render_counter_section')) :
  /**
   * Start counter section
   *
   * @return string counter content
   * @since Coast Pro 1.0.0
   *
   */
  function coast_pro_render_counter_section()
  {
    $options = coast_pro_get_theme_options();
    $counter_column = !empty($options['counter_column']) ? $options['counter_column'] : 'col-3';
    $image = !empty($options['counter_image']) ? $options['counter_image'] : '';

?>

    <div id="coast_counter" class="relative page-section">

      <div id="coast_pro_counter" style="background-image: url('<?php echo esc_url($image); ?>');">
        <!-- <div class="overlay"></div> -->
        <div class="wrapper">
          <?php if (!empty($options['counter_banner_title'])) : ?>
            <header class="entry-header">
              <h2 class="entry-title wrapper"><?php echo esc_html($options['counter_banner_title']); ?></h2>
            </header>
          <?php endif ?>

          <?php if (!empty($options['counter_banner_sub_title'])) : ?>
            <div class="entry-content">
              <p>
                <?php echo esc_html($options['counter_banner_sub_title']) ?>
              </p>
            </div>
          <?php endif ?>
         

          <div class="counter clear">
            <div class="col-4">
              <?php for ($i = 1; $i <= $options['counter_count']; $i++) {
              ?>
                <article>
                  <div class="counter-item">
                    <?php if (!empty($options['counter_value_' . $i])) : ?>
                      <h2 class="counter-value"><?php echo esc_html($options['counter_value_' . $i]); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($options['counter_label_' . $i])) : ?>
                      <h3 class="counter-title"><?php echo esc_html($options['counter_label_' . $i]); ?></h3>
                    <?php endif; ?>
                  </div><!-- .counter-item -->
                </article>

              <?php } ?>
            </div>


          </div><!-- .counter clear -->
        </div><!-- .wrapper -->
      </div><!-- #counter-section -->

    </div>

<?php }
endif;
