<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main" style="background: url(/wp-content/themes/chevalier/assets/media/mountains.svg) no-repeat center center / 840px;">

	<?php // Template Part: Page Header
	get_template_part('template-parts/content-header'); ?>

	<?php /* Content */ if (!empty($content = get_field('content'))) : if ($content['display']) : ?>
			<div class="announce-feed">

				<?php // Section: Content Feed
				get_template_part('template-sections/section-content-feed'); ?>

			</div>
	<?php endif;
	endif; /* Content End */ ?>

	<?php /* Room */ if (!empty($section = get_field('room_meta'))) : ?>
		<section style="padding-top: 0;">
			<div class="container">

				<?php /* room meta facilities */ if (!empty($facilities = $section['facilities'])) : ?>
					<div class="row">

						<?php foreach ((array) $facilities as $facility) : ?>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<div class="brand-box">

									<img class="brand-box__icon" src="/wp-content/themes/chevalier/assets/media/icon-<?php echo $facility['value']; ?>.svg" />
									<div class="brand-box__meta">
										<p class="brand-box__title"><?php echo $facility['label']; ?></p>
									</div>

								</div>
							</div>

						<?php endforeach; ?>

					</div>
				<?php /* room meta facilities end */ endif; ?>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<div class="healdine">
							<p class="headline-title"><?php _e("[:uk]Деталі") ?></p>
						</div>

						<div class="editor"><?php echo $section['content']; ?></div>

					</div>
				</div>

			</div>
		</section>
	<?php /* Room End */ endif; ?>

	<section id="<?php echo get_post_type(), '-', get_the_ID(); ?>" class="announce">

		<?php // Section: Media Announce
		get_template_part('template-sections/section-media-announce'); ?>

	</section>

</main>

<?php get_footer(); ?>