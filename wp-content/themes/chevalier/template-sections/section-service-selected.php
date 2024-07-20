<?php /* Section Service Selected */ if (!empty($section = get_field('section_service_selected', 'options'))) : ?>

  <div class="content" style="background-image: url('<?php echo $section['headline']['fionove_zobrazhennya'];?>')">
    <div class="top-content">
      <div class="container">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				    <?php /* Headline */ if (!empty($headline = $section['headline'])) : ?>
              <div class="headline">
						    <?php if (!empty($headline_textarea = $headline['textarea'])) {
							    echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
						    } ?>
						    <?php if (!empty($headline_title = $headline['title'])):?>
                  <p class="headline-title">
								    <?php echo $headline_title;?>
                    <span class="pic">
                      <img
                          src="<?php echo wp_get_attachment_image_src($section['headline']['zobrazhennya_u_nazvi'], 'full')[0];?>"
                          alt="<?php echo get_post_meta($section['headline']['zobrazhennya_u_nazvi'], '_wp_attachment_image_alt', TRUE);?>"
                      >
                    </span>
                  </p>
						    <?php endif;?>
              </div>
				    <?php /* Headline End */ endif; ?>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="buttons">
            <a class="button-xl lined whited line-button" href="<?php echo $section['headline']['posylannya_dlya_perehodu']; ?>"><?php _e("[:uk]Детальніше[:ru]Подробнее[:en]Details"); ?></a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!--<div class="announce-media">

    <?php /*if (!empty($gallery = $section['gallery'])) : */?>

      <div id="service-selected__slider" class="swiper">
        <div class="swiper-wrapper">

          <?php /*foreach ((array) $gallery as $image) : */?>
            <div class="swiper-slide">
              <img class="announce-media__image" src="<?php /*echo $image['url']; */?>" />
            </div>
          <?php /*endforeach; */?>

        </div>
      </div>

      <div id="service-selected__control" class="swiper-control absolute">
        <div class="swiper-button__prev"><span class="iconify" data-icon="ant-design:arrow-left-outlined"></span></div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button__next"><span class="iconify" data-icon="ant-design:arrow-right-outlined"></span></div>
      </div>

      <script>
        var swiper = new Swiper("#post-<?php /*echo get_the_ID(); */?>__slider", {
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

    <?php /*else : */?>

      <?php /*if (!empty($image = get_the_post_thumbnail_url())) : */?>
        <img class="announce-media__image" src="<?php /*echo $image; */?>" />
      <?php /*endif; */?>

    <?php /*endif; */?>

  </div>-->

<?php /* Section Service Selected End */ endif; ?>