<?php /* Section Contact */ if (!empty($section = get_field('site_contacts', 'options'))) : ?>
  <div class="container">

    <?php /* Headline */ if (!empty($headline = $section['headline'])) : ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <div class="headline">
            <?php if (!empty($headline_title = $headline['title'])) {
              echo '<p class="headline-title">' . $headline_title . '</p>';
            } ?>
            <?php if (!empty($headline_textarea = $headline['textarea'])) {
              echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
            } ?>
          </div>

        </div>
      </div>
    <?php /* Headline End */ endif; ?>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

        <div class="widget">
          <p class="widget-title"><?php _e("[:uk]Контакт-центр[:ru]Контакт-центр[:en]Contact center"); ?></p>

          <?php /* phones */ if (function_exists('chevalier_phones')) : ?>
            <div class="contact-list">
              <?php chevalier_phones(); ?>
            </div>
          <?php /* phones end */ endif; ?>
        </div>

        <div class="widget">
          <p class="widget-title"><?php _e("[:uk]Адреса[:ru]Адрес[:en]Address"); ?></p>
          <?php /* addresses */ if (function_exists('chevalier_addresses')) : ?>
            <div class="contact-list">
              <?php chevalier_addresses(); ?>
            </div>
          <?php /* addresses End */ endif; ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

        <div class="widget">
          <p class="widget-title"><?php _e("[:uk]Соціальні мережі[:en]Social Media[:ru]Социальные сети"); ?></p>
          <?php /* social Media */ if (function_exists('chevalier_socials')) : ?>
            <div class="social-media">
              <?php chevalier_socials(); ?>
            </div>
          <?php /* social Media End */ endif; ?>
        </div>

        <div class="widget">
          <p class="widget-title"><?php _e("[:uk]Email[:ru]Email[:en]Email"); ?></p>

          <?php /* emails */ if (function_exists('chevalier_emails')) : ?>
            <div class="contact-list">
              <?php chevalier_emails(); ?>
            </div>
          <?php /* emails end */ endif; ?>
        </div>
      </div>
    </div>

  </div>
<?php /* Section Contact End */ endif; ?>