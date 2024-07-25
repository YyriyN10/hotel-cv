<?php /* Section Service Archive */  ?>

  <div class="parent">
    <div class="div1"> </div>
    <div class="div2"> </div>
    <div class="div3"> </div>
    <div class="div4"> </div>
    <div class="div5"> </div>
    <div class="div6"> </div>
  </div>

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