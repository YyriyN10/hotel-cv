<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

?>

<?php while (have_posts()) : the_post(); ?>

	<section>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<div class="editor">
						<?php the_content(); ?>
					</div>

				</div>
			</div>

			<?php /* Single */ if (is_single()) : ?>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<?php the_post_navigation(); ?>

					</div>
				</div>
			<?php /* Single End */ endif; ?>

		</div>
	</section>

<?php endwhile; ?>