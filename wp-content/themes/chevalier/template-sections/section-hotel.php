<?php /* Section Hotel */ if (!empty($section = get_field('section_hotel', 'options'))) : ?>

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

          <?php /* blocks */ if (!empty($blocks = $section['blocks'])) : ?>

            <?php foreach ((array) $blocks as $block) : ?>
              <div class="card-box">
                <div class="card-box__meta">
                  <p class="card-box__title"><?php echo $block['title']; ?></p>
                  <div class="card-box__textarea editor"><?php echo $block['textarea']; ?></div>
                </div>
              </div>
            <?php endforeach; ?>

          <?php /* blocks end */ endif; ?>

          <div class="buttons">
            <a class="button- lined whited" href="<?php echo wpm_translate_url(home_url('/about/'), wpm_get_language()); ?>"><?php _e("[:uk]Детальніше[:ru]Подробнее[:en]Details"); ?></a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="announce-media boxed">

    <?php /* gallery */ if (!empty($gallery = $section['gallery'])) : ?>
      <div id="hotel-slider" class="swiper">
        <div class="swiper-wrapper">

          <?php /* slides */ foreach ((array) $gallery as $image) : ?>
            <div class="swiper-slide">
              <img class="announce-media__image" src="<?php echo $image['url']; ?>" />
            </div>
          <?php /* slides end */ endforeach; ?>

        </div>
      </div>

      <script>
        var swiper = new Swiper("#hotel-slider", {
          effect: "fade",
          spaceBetween: 0,
        });
      </script>
    <?php /* gallery end */ endif; ?>
  </div>

<?php /* Section Hotel End */ endif; ?>