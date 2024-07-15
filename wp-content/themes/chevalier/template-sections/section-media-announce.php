<?php /* Section Nedia Announce */ ?>

<div class="announce-content">
  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="headline inline">
          <?php if (!empty($headline_title = get_field('section_media_single_headline_title'))) {
            echo '<p class="headline-title">' . $headline_title . '</p>';
          } else {
            echo '<p class="headline-title">' . get_the_title() . '</p>';
          } ?>
          <?php if (!empty($headline_textarea = get_field('section_media_single_headline_textarea'))) {
            echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
          } ?>
        </div>

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

  <?php /* post gallery */ if (!empty($gallery = get_field('section_media_single_gallery'))) : ?>

    <div id="post-<?php echo get_the_ID(); ?>__slider" class="swiper">
      <div class="swiper-wrapper">

        <?php /* slides */ foreach ((array) $gallery as $image) : ?>
          <div class="swiper-slide">
            <img class="announce-media__image" src="<?php echo $image['url']; ?>" />
          </div>
        <?php /* slides end */ endforeach; ?>

      </div>
    </div>

    <div id="post-<?php echo get_the_ID(); ?>__control" class="swiper-control absolute">
      <div class="swiper-button__prev"><span class="iconify" data-icon="ant-design:arrow-left-outlined"></span></div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button__next"><span class="iconify" data-icon="ant-design:arrow-right-outlined"></span></div>
    </div>

    <script>
      var swiper = new Swiper("#post-<?php echo get_the_ID(); ?>__slider", {
        pagination: {
          clickable: true,
          el: "#post-<?php echo get_the_ID(); ?>__control .swiper-pagination",
        },
        navigation: {
          nextEl: "#post-<?php echo get_the_ID(); ?>__control .swiper-button__next",
          prevEl: "#post-<?php echo get_the_ID(); ?>__control .swiper-button__prev",
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

<?php /* Section post Single Announce end */ ?>