<?php /* Section Hero */ ?>

<div class="announce-content main-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="headline inline">
          <?php if (!empty($headline_title = get_field('section_hero_headline_title'))) {
            echo '<h1 class="headline-title">' . $headline_title . '</h1>';
          } else {
            echo '<h1 class="headline-title">' . chevalier_page_title() . '</h1>';
          } ?>
          <?php if (!empty($headline_textarea = get_field('section_hero_headline_textarea'))) {
            echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
          } ?>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="announce-media">

  <?php /* hero media */ if (!empty($gallery = get_field('section_hero_gallery'))) : ?>
    <div id="hero-media__slider" class="swiper">
      <div class="swiper-wrapper">

        <?php /* slides */ foreach ((array) $gallery as $image) : ?>
          <div class="swiper-slide">
            <img class="announce-media__image" src="<?php echo $image['url']; ?>" />
          </div>
        <?php /* slides end */ endforeach; ?>
      </div>
    </div>

    <script>
      var swiper = new Swiper("#hero-media__slider", {
        spaceBetween: 0,
        effect: "fade",
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });
    </script>

  <?php else : ?>

    <?php /* image */ if (!empty($image = get_the_post_thumbnail_url())) : ?>
      <img class="hero-media__image" src="<?php echo $image; ?>" />
    <?php /* image end */ endif; ?>

  <?php /* hero media end */ endif; ?>

</div>

<?php /* Section Hero end */ ?>