<?php /* Section Service */ if (!empty($section = get_field('section_service', 'options'))) : ?>

  <div class="announce-content unstyled whited">
    <div class="container">
      <div class="row x-end">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

          <?php /* Headline */ if (!empty($headline = $section['headline'])) : ?>
            <div class="headline">
              <?php if (!empty($headline_title = $headline['title'])) {
                echo '<p class="headline-title">' . $headline_title . '</p>';
              } ?>
              <?php if (!empty($headline_textarea = $headline['textarea'])) {
                echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
              } ?>
            </div>
          <?php /* Headline End */ endif; ?>

          <div class="service-list">

            <?php /* services */ foreach ($posts = get_posts(array('post_type' => 'service', 'numberposts' => 5)) as $post) : setup_postdata($post); ?>
              <div class="card-box">
                <div class="card-box__meta">
                  <a class="card-box__title service-list__item" href="<?php echo get_the_permalink(); ?>" data-slide="service-<?php echo get_the_id(); ?>"><?php echo get_the_title(); ?></a>
                </div>
              </div>

            <?php /* services end */ endforeach;
            wp_reset_postdata(); ?>

          </div>

          <div class="buttons">
            <a class="button-xl lined whited" href="<?php echo wpm_translate_url(home_url('/service/'), wpm_get_language()); ?>"><?php _e("[:uk]Двитись всі послуги[:ru]Смотреть все услуги[:en]See all services"); ?></a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="announce-media boxed">
    <div id="service-slider" class="swiper">
      <div class="swiper-wrapper">

        <?php foreach ($posts = get_posts(array('post_type' => 'service', 'numberposts' => 5)) as $post) : setup_postdata($post); ?>
          <div class="swiper-slide" data-slide="service-<?php echo get_the_id(); ?>">
            <img class="announce-media__image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
          </div>
        <?php endforeach;
        wp_reset_postdata(); ?>

      </div>
    </div>

    <script>
      $(document).ready(function() {
        // Get the swiper instance
        var swiper = new Swiper("#service-slider", {
          spaceBetween: 0,
          effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
        });

        // Handle service-list__item hover event
        $('.service-list__item').hover(function() {
          // Get the data-slide value
          var slideId = $(this).data('slide');

          // Get the slide index
          var slideIndex = $('#service-slider .swiper-slide[data-slide="' + slideId + '"]').index();

          // Go to the corresponding slide
          swiper.slideTo(slideIndex);
        });
      });
    </script>

  </div>

<?php /* Section Service End */ endif; ?>