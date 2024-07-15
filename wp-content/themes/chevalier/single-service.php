<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main">

	<?php // Template Part: Page Header
	get_template_part('template-parts/content-header'); ?>

	<?php /* Content */ if (!empty($content = get_field('content'))) : if ($content['display']) : ?>
			<div class="announce-feed">

				<?php // Section: Content Feed
				get_template_part('template-sections/section-content-feed'); ?>

			</div>
	<?php endif;
	endif; /* Content End */ ?>

	<section id="<?php echo get_post_type(), '-', get_the_ID(); ?>" class="announce">

		<?php // Section: Media Announce
		get_template_part('template-sections/section-media-announce'); ?>

	</section>

</main>

<?php get_footer(); ?>