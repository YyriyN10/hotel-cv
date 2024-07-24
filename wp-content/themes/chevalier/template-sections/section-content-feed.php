<?php /* Content */ if (!empty($content = get_field('content'))) : if ($content['display']) : $i = 1; ?>

    <?php foreach ((array) $sections = $content['sections'] as $section) : ?>
      <section class="announce" >

        <div class="announce-content unstyled">
          <div class="container">
            <div class="row">
              <div class="room-section-content col-xs-12 col-sm-12 col-md-5 col-lg-5">

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
          </div>
        </div>

        <div class="announce-media boxed">

          <?php /* gallery */ if (!empty($gallery = $section['gallery'])) : ?>
            <div id="announce-slider-<?php echo $i; ?>" class="swiper">
              <div class="swiper-wrapper">

                <?php /* slides */ foreach ((array) $gallery as $image) : ?>
                  <div class="swiper-slide">
                    <img class="announce-media__image" src="<?php echo $image['url']; ?>" />
                  </div>
                <?php /* slides end */ endforeach; ?>

              </div>
            </div>

            <script>
              var swiper = new Swiper("#announce-slider-<?php echo $i; ?>", {
                effect: "fade",
                spaceBetween: 0,
              });
            </script>
          <?php /* gallery end */ endif; ?>
        </div>

      </section>
    <?php $i++;
    endforeach; ?>

<?php endif;
endif; /* Content End */ ?>

<?php

