<?php /* Room Box */ if (!empty($site_branding = get_field('site_branding', 'options'))) : ?>

  <p class="room-box__title"><?php echo get_the_title(); ?></p>

  <div class="room-box__thumbnail">
    <?php /* image */ if (!empty($image = get_the_post_thumbnail_url())) : ?>
      <img class="room-thumbnail__image" src="<?php echo $image; ?>" />
    <?php /* image end */ endif ?>
  </div>

  <div class="buttons">
    <a class="button-xl lined whited" href="<?php echo get_the_permalink(); ?>"><?php _e("[:uk]Детальніше[:ru]Подробнее[:en]Details"); ?></a>
  </div>

<?php /* Room Box End */ endif; ?>