<?php /* Section Review Slider */ if (!empty($section = get_field('section_review_slider', 'options'))) : ?>

  <?php /* Headline */ if (!empty($headline = $section['headline'])) : ?>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <div class="headline">
            <?php if (!empty($headline_title = $headline['title'])) {
              echo '<p class="headline-title">' . $headline_title . '</p>';
            } ?>
            <?php if (!empty($headline_textarea = $headline['textarea'])) {
              echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
            } ?>
          </div>

        </div>
      </div>
    </div>
  <?php /* Headline End */ endif; ?>

  <div class="slider">

    <div id="review-slider" class="swiper" style="padding: 0 256px;">
      <div class="swiper-wrapper">

        <?php /* review */ foreach ($posts = get_posts(array('numberposts' => -1, 'post_type' => 'review')) as $post) : setup_postdata($post); ?>
          <div class="swiper-slide">
            <div class="review-card">

              <div class="review-box">

                <div class="review-box__meta">

                  <div class="review-box__thumbnail">
                    <?php /* image */ if (!empty($image = get_field('review_image'))) : ?>
                      <img src="<?php echo $image; ?>" />
                    <?php /* image end */ endif; ?>
                  </div>

                  <div class="review-box__info">
                    <p class="review-box__label"><?php echo get_field('review_label'); ?></p>
                    <p class="review-box__title"><?php echo get_the_title(); ?></p>
                    <p class="review-box__date"><?php echo get_field('review_date'); ?></p>
                  </div>
                </div>

                <div class="review-box__textarea editor">
                  <?php echo get_field('review_textarea'); ?>
                </div>

              </div>

              <div class="review-card__thumbnail">
                <?php /* image */ if (!empty($image = get_the_post_thumbnail_url())) : ?>
                  <img class="review-card__image" src="<?php echo $image; ?>" />
                <?php /* image end */ endif; ?>
              </div>

            </div>
          </div>
        <?php /* review end */ endforeach;
        wp_reset_postdata(); ?>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div id="review-slider__control" class="swiper-control">
            <div class="swiper-button__prev"><span class="iconify" data-icon="ant-design:arrow-left-outlined"></span></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button__next"><span class="iconify" data-icon="ant-design:arrow-right-outlined"></span></div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var swiper = new Swiper("#review-slider", {
        initialSlide: 1,
        pagination: {
          clickable: true,
          el: "#review-slider__control .swiper-pagination",
        },
        navigation: {
          nextEl: "#review-slider__control .swiper-button__next",
          prevEl: "#review-slider__control .swiper-button__prev",
        },
        spaceBetween: 32,
      });
    </script>

  </div>

<?php /* Section Review Slider End */ endif; ?>