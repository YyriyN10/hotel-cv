<?php /* Section Review Slider */ if (!empty($section = get_field('section_review_slider', 'options'))) : ?>

  <?php /* Headline */ if (!empty($headline = $section['headline'])) : ?>
    <div class="container first-up">
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

  <div class="slider first-up">

    <div id="home-review-slider" class="reviews-slider" >
	    <?php  foreach ($posts = get_posts(array('numberposts' => -1, 'post_type' => 'review')) as $post) : setup_postdata($post); ?>
        <div class="slide">
          <div class="review-card">

            <div class="review-box">

              <div class="review-box__meta">

                <div class="review-box__thumbnail">
							    <?php if (!empty($image = get_field('review_image'))) : ?>
                    <img src="<?php echo $image; ?>" />
							    <?php endif; ?>
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
              <div class="pic"><img src="<?php echo get_template_directory_uri();?>/assets/media/icon-quote.png" alt=""></div>

            </div>

            <div class="review-card__thumbnail">
					    <?php if (!empty($image = get_the_post_thumbnail_url())) : ?>
                <img class="review-card__image" src="<?php echo $image; ?>" />
					    <?php endif; ?>
            </div>

          </div>
        </div>
	    <?php endforeach;
		    wp_reset_postdata(); ?>
    </div>

    <!--<div id="review-slider" class="swiper" style="padding: 0 256px;">
      <div class="swiper-wrapper">

        <?php /* foreach ($posts = get_posts(array('numberposts' => -1, 'post_type' => 'review')) as $post) : setup_postdata($post); */?>
          <div class="swiper-slide">
            <div class="review-card">

              <div class="review-box">

                <div class="review-box__meta">

                  <div class="review-box__thumbnail">
                    <?php /*if (!empty($image = get_field('review_image'))) : */?>
                      <img src="<?php /*echo $image; */?>" />
                    <?php /*endif; */?>
                  </div>

                  <div class="review-box__info">
                    <p class="review-box__label"><?php /*echo get_field('review_label'); */?></p>
                    <p class="review-box__title"><?php /*echo get_the_title(); */?></p>
                    <p class="review-box__date"><?php /*echo get_field('review_date'); */?></p>
                  </div>
                </div>

                <div class="review-box__textarea editor">
                  <?php /*echo get_field('review_textarea'); */?>
                </div>
                <div class="pic"><img src="<?php /*echo get_template_directory_uri();*/?>/assets/media/icon-quote.png" alt=""></div>

              </div>

              <div class="review-card__thumbnail">
                <?php /*if (!empty($image = get_the_post_thumbnail_url())) : */?>
                  <img class="review-card__image" src="<?php /*echo $image; */?>" />
                <?php /*endif; */?>
              </div>

            </div>
          </div>
        <?php /*endforeach;
        wp_reset_postdata(); */?>

      </div>
    </div>-->

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div id="review-slider__control" class="swiper-control">
            <div class="swiper-button__prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                <path d="M16.3332 24.8267L26.3332 19.0532L26.3332 30.6002L16.3332 24.8267ZM32.6665 25.8267L25.3332 25.8267L25.3332 23.8267L32.6665 23.8267L32.6665 25.8267Z" fill="white"/>
                <circle cx="24.5" cy="24.5" r="23.5" transform="matrix(-1 0 0 1 49 0)" stroke="white" stroke-width="2"/>
              </svg>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button__next">
              <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                <path d="M32.6668 24.8267L22.6668 19.0532L22.6668 30.6002L32.6668 24.8267ZM16.3335 25.8267L23.6668 25.8267L23.6668 23.8267L16.3335 23.8267L16.3335 25.8267Z" fill="white"/>
                <circle cx="24.5" cy="24.5" r="23.5" stroke="white" stroke-width="2"/>
              </svg>
            </div>
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