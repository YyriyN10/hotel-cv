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

  <section id="hero" class="announce section full-height">

		<?php // Section: Hero
			get_template_part('template-sections/section-hero'); ?>

  </section>

	<?php /* room feed */ foreach ($posts = get_posts(array('numberposts' => -1, 'post_type' => 'room')) as $post) : setup_postdata($post); ?>

    <section id="<?php echo get_post_type(), '-', get_the_ID(); ?>" class="announce section full-height">

			<?php // Section: Media Announce
				get_template_part('template-sections/section-media-announce'); ?>

    </section>

	<?php /* room feed end */ endforeach;
		wp_reset_postdata(); ?>


	<?php get_footer(); ?>
</main>

