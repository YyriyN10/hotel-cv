<?php /* Section Room Slider */ if (!empty($section = get_field('section_room_slider', 'options'))) : ?>

  <div class="container">

    <div class="row top-content">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

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

      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="buttons">
          <a class="button-xl lined whited line-button" href="<?php echo wpm_translate_url(home_url('/room/'), wpm_get_language()); ?>"><?php _e("[:uk]Дивтись всі номери[:ru]Смотреть все номера[:en]See all numbers"); ?></a>
        </div>
      </div>
    </div>

  </div>

  <div class="slider home-room-slider">

    <div id="room-slider" class="swiper" style="padding: 0 512px;">
      <div class="swiper-wrapper">

        <?php /* room */ foreach ($posts = get_posts(array('numberposts' => -1, 'post_type' => 'room')) as $post) : setup_postdata($post); ?>
          <div class="swiper-slide">

            <div class="room-box">

              <?php // Componen: Romo Box
              get_template_part('template-components/component-room-box'); ?>

            </div>

          </div>
        <?php /* room end */ endforeach;
        wp_reset_postdata(); ?>

      </div>
    </div>

    <!--<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div id="room-slider__control" class="swiper-control">
            <div class="swiper-button__prev"><span class="iconify" data-icon="ant-design:arrow-left-outlined"></span></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button__next"><span class="iconify" data-icon="ant-design:arrow-right-outlined"></span></div>
          </div>
        </div>
      </div>
    </div>-->

    <script>
      var swiper = new Swiper("#room-slider", {
        initialSlide: 1,
        /*pagination: {
          clickable: true,
          el: "#room-slider__control .swiper-pagination",
        },
        navigation: {
          nextEl: "#room-slider__control .swiper-button__next",
          prevEl: "#room-slider__control .swiper-button__prev",
        },*/
        spaceBetween: 32,
      });
    </script>

  </div>

<?php /* Section Room Slider End */ endif; ?>