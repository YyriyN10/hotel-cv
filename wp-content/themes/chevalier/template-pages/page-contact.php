<?php

/**
 * Template name: Контакти
 * 
 * The template for displaying page-contact.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main">

  <?php // Template Part: Page Header
  get_template_part('template-parts/content-header'); ?>

  <?php /* Section Contact */ if (!empty($section = get_field('site_contacts', 'options'))) : ?>
    <section style="background: url(/wp-content/themes/chevalier/assets/media/background-1.png) no-repeat right bottom / contain;">

      <?php // Section: Contact
      get_template_part('template-sections/section-contact'); ?>

    </section>
  <?php endif; /* Section Contact End */ ?>

  <?php /* Section Contact */ if (!empty($section = get_field('site_contacts', 'options'))) : ?>
    <section style="padding: 0;">

      <?php // Component: Contact Map
      get_template_part('template-components/component-contact-map'); ?>

    </section>
  <?php endif; /* Section Contact End */ ?>

</main>

<?php get_footer(); ?>