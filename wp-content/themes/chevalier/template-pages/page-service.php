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

  <section id="service-archive" class="our-services animation-tracking">

    <div class="services-grid lr-grid first-up">
      <?php
        $roomsPage = get_field('storinka_nomeriv');
      ?>
      <a href="<?php echo get_the_permalink($roomsPage);?>" class="service-item">
        <span class="page-pic">
          <img class="parallax-image" src="<?php echo get_the_post_thumbnail_url($roomsPage);?>" alt="">
        </span>
        <span class="page-name"><?php echo get_the_title($roomsPage);?></span>
      </a>
       <?php
       	$catArgs = array(
       		'posts_per_page' => 2,
       		'orderby' 	 => 'date',
       		'post_type'  => 'service',
       		'post_status'    => 'publish'
       	);

       	$postList = new WP_Query( $catArgs );

       		  if ( $postList->have_posts() ) :?>

       			  <?php while ( $postList->have_posts() ) : $postList->the_post(); ?>
                <a href="<?php the_permalink();?>" class="service-item">
                  <span class="page-pic">
                    <img class="parallax-image" src="<?php echo chevalier_page_thumbnail(); ?>" alt="">
                  </span>
                  <span class="page-name"><?php echo get_the_title(); ?></span>
                </a>
       		<?php endwhile;?>
       	<?php endif; ?>
       <?php wp_reset_postdata(); ?>
    </div>

    <div class="services-grid rl-grid first-up">
       <?php
       	$catArgs = array(
       		'posts_per_page' => 3,
       		'orderby' 	 => 'date',
       		'post_type'  => 'service',
       		'post_status'    => 'publish',
          'offset' => 2
       	);

       	$postList = new WP_Query( $catArgs );

       		  if ( $postList->have_posts() ) :?>

       			  <?php while ( $postList->have_posts() ) : $postList->the_post(); ?>

                <a href="<?php the_permalink();?>" class="service-item">
                  <span class="page-pic">
                    <img class="parallax-image" src="<?php echo chevalier_page_thumbnail(); ?>" alt="">
                  </span>
                  <span class="page-name"><?php echo get_the_title(); ?></span>
                </a>

		          <?php endwhile;?>
       	<?php endif; ?>
       <?php wp_reset_postdata(); ?>
    </div>

    <?php /*
    get_template_part('template-sections/section-service-archive'); */?>

  </section>

</main>

<?php get_footer(); ?>