<?php /* Section Service Archive */  ?>

<div class="service-grid">
  <?php foreach ($posts = get_posts(array('numberposts' => 6, 'post_type' => 'service')) as $post) : setup_postdata($post); ?>

    <a class="service-announce__thumbnail" href="<?php echo get_the_permalink(); ?>">

      <div class="thumbnail-panel">
        <p class="thumbnail-title"><?php echo get_the_title(); ?></p>
      </div>

      <img src="<?php echo chevalier_page_thumbnail(); ?>" />
    </a>

  <?php endforeach;
  wp_reset_postdata(); ?>
</div>

<?php /* Section Service Archive End */ ?>