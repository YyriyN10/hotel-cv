<?php /* Room Box */ if (!empty($site_branding = get_field('site_branding', 'options'))) : ?>

  <p class="room-box__title"><?php echo get_the_title(); ?></p>

  <div class="room-box__thumbnail">
    <?php /* image */ if (!empty($image = get_the_post_thumbnail_url())) : ?>
      <img class="room-thumbnail__image" src="<?php echo $image; ?>" />
      <a href="<?php echo get_the_permalink(); ?>" class="go-to-room">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116" fill="none">
          <circle cx="58" cy="58" r="57" stroke="white" stroke-width="2"/>
          <path d="M82.0607 60.0607C82.6464 59.4749 82.6464 58.5251 82.0607 57.9393L72.5147 48.3934C71.9289 47.8076 70.9792 47.8076 70.3934 48.3934C69.8076 48.9792 69.8076 49.9289 70.3934 50.5147L78.8787 59L70.3934 67.4853C69.8076 68.0711 69.8076 69.0208 70.3934 69.6066C70.9792 70.1924 71.9289 70.1924 72.5147 69.6066L82.0607 60.0607ZM31 60.5H81V57.5H31V60.5Z" fill="white"/>
        </svg>
      </a>
    <?php /* image end */ endif ?>
  </div>

  <div class="buttons">
    <a class="button-xl lined whited line-button" href="<?php echo get_the_permalink(); ?>"><?php _e("[:uk]Детальніше[:ru]Подробнее[:en]Details"); ?></a>
  </div>

<?php /* Room Box End */ endif; ?>