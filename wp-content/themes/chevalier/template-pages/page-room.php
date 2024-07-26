<?php

/**
 * Template name: Номери
 * 
 * The template for displaying page-room.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main fulpage-wrapper">

  <section id="hero" class="announce section ">

		<?php // Section: Hero
			get_template_part('template-sections/section-hero'); ?>

  </section>

	<?php /* room feed */ foreach ($posts = get_posts(array('numberposts' => -1, 'post_type' => 'room')) as $post) : setup_postdata($post); ?>

    <section class="room-item section">
      <div class="info-part">
        <div class="container">
          <div class="row">
            <div class="room-description col-12">
              <div class="left-part">
					      <?php
						      if ( ! empty( $headline_title = get_field( 'section_media_single_headline_title' ) ) ) {
							      echo '<p class="room-name">' . $headline_title . '</p>';
						      } else {
							      echo '<p class="room-name">' . get_the_title() . '</p>';
						      }
					      ?>
                <div class="buttons">
                  <a class="button-xl lined whited line-button" href="<?php echo get_permalink(); ?>"><?php _e("[:uk]Детальніше[:ru]Подробнее[:en]Details"); ?></a>
                </div>
              </div>
              <div class="right-part">
                <div class="buttons">
                  <a class="button-xl lined whited line-button" href="<?php echo get_permalink(); ?>"><?php _e("[:uk]Забронювати[:ru]Reserve[:en]Забронировать"); ?></a>
                </div>
                <div class="drop-lists-wrapper">
                  <a href="#" rel="nofollow" class="drop-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                      <circle cx="10.6377" cy="10.5" r="10.5" fill="white"/>
                      <path d="M10.6074 14.0303C10.9003 14.3232 11.3751 14.3232 11.668 14.0303L16.441 9.25736C16.7339 8.96447 16.7339 8.48959 16.441 8.1967C16.1481 7.90381 15.6732 7.90381 15.3803 8.1967L11.1377 12.4393L6.89505 8.1967C6.60216 7.90381 6.12729 7.90381 5.83439 8.1967C5.5415 8.48959 5.5415 8.96447 5.83439 9.25736L10.6074 14.0303ZM10.3877 13V13.5H11.8877V13H10.3877Z" fill="#7D2424"/>
                    </svg>
                    <span><?php _e("[:uk]в номері є[:ru]в номере есть[:en]there is in the room"); ?></span>
                  </a>
                  <a href="#" rel="nofollow" class="drop-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                      <circle cx="10.6377" cy="10.5" r="10.5" fill="white"/>
                      <path d="M10.6074 14.0303C10.9003 14.3232 11.3751 14.3232 11.668 14.0303L16.441 9.25736C16.7339 8.96447 16.7339 8.48959 16.441 8.1967C16.1481 7.90381 15.6732 7.90381 15.3803 8.1967L11.1377 12.4393L6.89505 8.1967C6.60216 7.90381 6.12729 7.90381 5.83439 8.1967C5.5415 8.48959 5.5415 8.96447 5.83439 9.25736L10.6074 14.0303ZM10.3877 13V13.5H11.8877V13H10.3877Z" fill="#7D2424"/>
                    </svg>
                    <span><?php _e("[:uk]входить в вартість[:ru]входит в стоимость[:en]included in the price"); ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="gallery-part">
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

    </section>

    <!--<section id="<?php /*echo get_post_type(), '-', get_the_ID(); */?>" class="announce section ">

			<?php /*get_template_part('template-sections/section-media-announce'); */?>

    </section>-->

	<?php endforeach;
		wp_reset_postdata(); ?>


	<?php get_footer(); ?>
</main>

