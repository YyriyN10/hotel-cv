<?php

/**
 * Template name: Послуги
 * 
 * The template for displaying page-service.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php // Template Part: Page Header
  get_template_part('template-parts/content-header'); ?>

  <section id="service-archive">

    <?php // Section: Service Archive
    get_template_part('template-sections/section-service-archive'); ?>

  </section>

</main>

<?php get_footer(); ?>