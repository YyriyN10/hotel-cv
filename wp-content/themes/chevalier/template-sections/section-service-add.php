<?php /* Section Service Add */ if (!empty($section = get_field('section_service_add', 'options'))) : ?>
  <div class="container">

    <?php /* blocks */ if (!empty($blocks = $section['blocks'])) : ?>
      <div class="row">
        <?php foreach ((array) $blocks as $block) : ?>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

            <div class="card-box">
              <div class="card-box__thumbnail" style="min-height: 350px;">
                <?php /* image */ if (!empty($image = $block['image'])) : ?>
                  <img src="<?php echo $image; ?>" />
                <?php /* image end */ endif; ?>
              </div>
              <div class="card-box__panel">
                <p class="card-box__title"><?php echo $block['title']; ?></p>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    <?php /* blocks end */ endif; ?>

  </div>
<?php /* Section Service Add End */ endif; ?>