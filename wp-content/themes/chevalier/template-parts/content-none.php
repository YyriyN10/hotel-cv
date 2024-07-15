<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chevalier
 */

?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <?php if (is_search()) : ?>
          <p><?php _e("[:uk]Нічого не знайдено[:ru]Ничего не найдено[:en]Nothing found"); ?></p>
        <?php else : ?>
          <p><?php _e("[:uk]Записи відсутні[:ru]Записей нет[:en]No posts"); ?></p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>