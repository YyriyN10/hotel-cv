<?php /* Section Service Selected */ if (!empty($section = get_field('section_service_selected', 'options'))) : ?>

  <div class="announce-content">
    <div class="container">

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

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
      </div>

      <?php /* hide on single */ if (!is_single()) { ?>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <div class="buttons">
              <a class="button-xl lined whited" href="<?php echo get_permalink(); ?>"><?php _e("[:uk]Детальніше[:ru]Подробнее[:en]Details"); ?></a>
            </div>
          </div>
        </div>
      <?php /* hide on single end */ } ?>

    </div>
  </div>

  <div class="announce-media">

    <?php /* gallery */ if (!empty($gallery = $section['gallery'])) : ?>

      <div id="service-selected__slider" class="swiper">
        <div class="swiper-wrapper">

          <?php /* slides */ foreach ((array) $gallery as $image) : ?>
            <div class="swiper-slide">
              <img class="announce-media__image" src="<?php echo $image['url']; ?>" />
            </div>
          <?php /* slides end */ endforeach; ?>

        </div>
      </div>

      <div id="service-selected__control" class="swiper-control absolute">
        <div class="swiper-button__prev"><span class="iconify" data-icon="ant-design:arrow-left-outlined"></span></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button__next"><span class="iconify" data-icon="ant-design:arrow-right-outlined"></span></div>
      </div>

      <script>
        var swiper = new Swiper("#post-<?php echo get_the_ID(); ?>__slider", {
          pagination: {
            clickable: true,
            el: "#service-selected__control .swiper-pagination",
          },
          navigation: {
            nextEl: "#service-selected__control .swiper-button__next",
            prevEl: "#service-selected__control .swiper-button__prev",
          },
          spaceBetween: 0,
        });
      </script>

    <?php else : ?>

      <?php /* image */ if (!empty($image = get_the_post_thumbnail_url())) : ?>
        <img class="announce-media__image" src="<?php echo $image; ?>" />
      <?php /* image end */ endif; ?>

    <?php /* post gallery end */ endif; ?>

  </div>

<?php /* Section Service Selected End */ endif; ?>