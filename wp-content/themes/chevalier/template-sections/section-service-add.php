<?php /* Section Service Add */ if (!empty($section = get_field('section_service_add', 'options'))) : ?>
  <div class="container">

    <?php /* blocks */ if (!empty($blocks = $section['blocks'])) : ?>
      <div class="row">
        <?php foreach ((array) $blocks as $block) : ?>
          <div class="leisure-item col-xs-12 col-sm-12 col-md-4 col-lg-4" data-modal-content="<?php echo $block['opys_poslugy']; ?>" data-modal-img="<?php echo $block['dodatkove_zobrazhennya_dlya_asplyvayuchogo_vikna']; ?>">

            <div class="card-box">
              <div class="card-box__thumbnail" style="min-height: 350px;">
                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="109" height="109" viewBox="0 0 109 109" fill="none">
                  <circle cx="54.5" cy="54.5" r="53.5" stroke="white" stroke-width="2"/>
                  <path d="M77.1728 56.5001C77.7586 55.9143 77.7586 54.9646 77.1728 54.3788L67.6269 44.8329C67.0411 44.2471 66.0913 44.2471 65.5056 44.8329C64.9198 45.4186 64.9198 46.3684 65.5056 46.9542L73.9908 55.4395L65.5056 63.9247C64.9198 64.5105 64.9198 65.4603 65.5056 66.0461C66.0913 66.6318 67.0411 66.6318 67.6269 66.0461L77.1728 56.5001ZM29.1294 56.9395H76.1122V53.9395H29.1294V56.9395Z" fill="white"/>
                </svg>
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


