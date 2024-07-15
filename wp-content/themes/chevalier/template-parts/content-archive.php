<?php

/**
 * Template part for displaying archive content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

?>

<section>
  <div class="container">

    <div class="row">
      <?php while (have_posts()) : the_post(); ?>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="<?php echo get_post_type(); ?>-box">

            <?php // Component: Component [post type] Box
            get_template_part('template-components/component-' . get_post_type() . '-box'); ?>

          </div>
        </div>

      <?php endwhile; ?>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <?php the_posts_pagination(); ?>

      </div>
    </div>

  </div>
</section>