<?php

/**
 * Template name: Головна
 * 
 * The template for displaying page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main accent">

  <?php // Template Part: Page Header
  get_template_part('template-parts/content-header'); ?>

  <section class="booking-wrapper">
    <div id="pb_remote_app" class="r-module min-vh-100">

    </div>
  </section>


  <?php /* Section Booking */ if (!empty($section = get_field('section_booking', 'options'))) : if ($section['1']) : ?>
      <section>

        <?php // Section: Booking
        get_template_part('template-sections/section-booking'); ?>

      </section>
  <?php endif;
  endif; /* Section Booking End */ ?>

  <?php /* Section Hotel */ if (!empty($section = get_field('section_hotel', 'options'))) : if ($section['display']) : ?>
      <section class="announce home-about-hotel animation-tracking" >

        <?php // Section: Hotel
        get_template_part('template-sections/section-hotel'); ?>

      </section>
  <?php endif;
  endif; /* Section Hotel End */ ?>

  <?php /* Section Room Slider */ if (!empty($section = get_field('section_room_slider', 'options'))) : if ($section['display']) : ?>
      <section class="home-room-list animation-tracking" >

        <?php // Section: Room Slider
        get_template_part('template-sections/section-room-slider'); ?>

      </section>
  <?php endif;
  endif; /* Section Room Slider End */ ?>

  <?php /* Section Service Selected */ if (!empty($section = get_field('section_service_selected', 'options'))) : if ($section['display']) : ?>
      <section class="announce home-spa animation-tracking" >

        <?php // Section: Service Selected
        get_template_part('template-sections/section-service-selected'); ?>

      </section>
  <?php endif;
  endif; /* Section Service Selected End */ ?>

  <?php /* Section Service */ if (!empty($section = get_field('section_service', 'options'))) : if ($section['display']) : ?>
      <section class="our-services home-services animation-tracking" >

        <?php // Section: Service
        get_template_part('template-sections/section-service'); ?>

      </section>
  <?php endif;
  endif; /* Section Service End */ ?>

  <?php /* Section Review Slider */ if (!empty($section = get_field('section_review_slider', 'options'))) : if ($section['display']) : ?>
      <section class="reviews-wrapper animation-tracking" >

        <?php // Section: Review Slider
        get_template_part('template-sections/section-review-slider'); ?>

      </section>
  <?php endif;
  endif; /* Section Review Slider End */ ?>

</main>
  <script>
    var scriptCommon = document.createElement('script');
    var dt = new Date().getTime();
    scriptCommon.src ='hotel-chevalier.servioreservation.com/common_file_js?dt=' + dt + '&frame=true';
    document.getElementsByTagName('head')[0].appendChild(scriptCommon);
  </script>
<?php get_footer(); ?>