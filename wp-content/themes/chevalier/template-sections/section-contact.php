<?php /* Section Contact */ if (!empty($section = get_field('site_contacts', 'options'))) : ?>
  <div class="container">

    <?php /* Headline */ if (!empty($headline = $section['headline'])) : ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 column-list">

          <div class="headline">
            <?php if (!empty($headline_title = $headline['title'])) {
              echo '<p class="headline-title">' . $headline_title . ':</p>';
            } ?>
            <?php if (!empty($headline_textarea = $headline['textarea'])) {
              echo '<div class="headline-textarea editor">' . $headline_textarea . '</div>';
            } ?>
          </div>

        </div>
      </div>
    <?php /* Headline End */ endif; ?>

    <div class="row">
      <div class="col-md-6 contacts">
	      <?php /* phones */ if (function_exists('chevalier_phones')) : ?>
          <div class="contact-list phone">
			      <?php chevalier_phones(); ?>
          </div>
	      <?php /* phones end */ endif; ?>
	      <?php /* emails */ if (function_exists('chevalier_emails')) : ?>
          <div class="contact-list email">
			      <?php chevalier_emails(); ?>
          </div>
	      <?php /* emails end */ endif; ?>
	      <?php /* addresses */ if (function_exists('chevalier_addresses')) : ?>
          <div class="contact-list address">
			      <?php chevalier_addresses(); ?>
          </div>
	      <?php /* addresses End */ endif; ?>
        <a href="https://chevalier-panorama.com/" class="inner-logo">
          <img src="<?php echo get_template_directory_uri();?>/assets/media/logo_panorama.png" alt="">
        </a>

      </div>
      <div class="col-md-6 col-lg-4 offset-lg-2 offset-0 social-wrapper">
	      <?php /* social Media */ if (function_exists('chevalier_socials')) : ?>
          <div class="social-media">
			      <?php chevalier_socials(); ?>
          </div>
	      <?php /* social Media End */ endif; ?>
      </div>
    </div>

  </div>
<?php /* Section Contact End */ endif; ?>