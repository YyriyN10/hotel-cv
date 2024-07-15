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

<?php get_footer(); ?>