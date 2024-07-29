<?php

/**
 * Template name: Дозвілля
 * 
 * The template for displaying page-leisure.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leisure
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php // Template Part: Page Header
  get_template_part('template-parts/content-header'); ?>

  <?php /* Section Service Add */ if (!empty($section = get_field('section_service_add', 'options'))) : if ($section['display']) : ?>
      <section>

        <?php // Section: Service AdditAddional
        get_template_part('template-sections/section-service-add'); ?>

      </section>
  <?php endif;
  endif; /* Section Service Add End */ ?>

</main>

  <div class="popup leisure-popup-wrapper" id="modal-leisure">
    <div class="popup-content">
      <a href="#" class="popup-close">
        <span></span><span></span>
      </a>
      <div class="popup-pic">
        <img
           src=""
        >
      </div>
      <div class="popup-text-wrapper">
        <h3 class="popup-title"></h3>
        <div class="popup-text"></div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>