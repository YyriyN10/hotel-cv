<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main" style="background: url(/wp-content/themes/chevalier/assets/media/mountains.svg) no-repeat center center / 840px;">

	<?php get_template_part('template-parts/content-header'); ?>

	<?php /*if (!empty($content = get_field('content'))) : if ($content['display']) : */?><!--
			<div class="announce-feed">

				<?php /*get_template_part('template-sections/section-content-feed'); */?>

			</div>
	--><?php /*endif;
	endif; */?>

  <?php
      $generalDescription = get_field('bok_z_zagalnym_opysom');

      if( $generalDescription['tekst_opysu'] && $generalDescription['zobrazhennya_bloku'] ):?>

      <!-- Загальний опис -->

      <section class="room-description-item general-description">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="pic-wrapper">
                <div class="inner">
                  <img

                     src="<?php echo wp_get_attachment_image_src($generalDescription['zobrazhennya_bloku'], 'full')[0];?>"
                     alt="<?php echo get_post_meta($generalDescription['zobrazhennya_bloku'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              </div>
              <div class="text-content">
                <?php echo $generalDescription['tekst_opysu'];?>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php endif;?>

	<?php
		$advantages = get_field('bok_z_perevagamy');

		if( $advantages['tekst_opysu'] && $advantages['zobrazhennya_bloku'] ):?>

      <!-- Переваги -->

      <section class="room-description-item advantages">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="text-content">
                <h2 class="headline-title"><?php _e("[:uk]Переваги[:ru]Преимущества[:en]Advantages") ?></h2>
		            <?php echo $advantages['tekst_opysu'];?>
              </div>
              <div class="pic-wrapper">
                <div class="inner">
                  <img

                      src="<?php echo wp_get_attachment_image_src($advantages['zobrazhennya_bloku'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($advantages['zobrazhennya_bloku'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
		<?php endif;?>

	<?php
		$basicInformation = get_field('bok_z_osnovnoyu');

		if( $basicInformation['tekst_opysu'] && $basicInformation['zobrazhennya_bloku'] ):?>

      <!-- Основна інформація -->

      <section class="room-description-item basic-information">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="pic-wrapper">
                <div class="inner">
                  <img

                      src="<?php echo wp_get_attachment_image_src($basicInformation['zobrazhennya_bloku'], 'full')[0];?>"
                      alt="<?php echo get_post_meta($basicInformation['zobrazhennya_bloku'], '_wp_attachment_image_alt', TRUE);?>"
                  >
                </div>
              </div>
              <div class="text-content">
                <h2 class="headline-title"><?php _e("[:uk]Основна інформація[:ru]Основная информация[:en]Basic information") ?></h2>
								<?php echo $basicInformation['tekst_opysu'];?>
              </div>
            </div>
          </div>
        </div>
      </section>
		<?php endif;?>

	<?php /* Room */ if (!empty($section = get_field('room_meta'))) : ?>
		<section style="padding-top: 0;">
			<div class="container">

				<?php /* room meta facilities */ if (!empty($facilities = $section['facilities'])) : ?>
					<div class="row">

						<?php foreach ((array) $facilities as $facility) : ?>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<div class="brand-box">

									<img class="brand-box__icon" src="/wp-content/themes/chevalier/assets/media/icon-<?php echo $facility['value']; ?>.svg" />
									<div class="brand-box__meta">
										<p class="brand-box__title"><?php echo $facility['label']; ?></p>
									</div>

								</div>
							</div>

						<?php endforeach; ?>

					</div>
				<?php /* room meta facilities end */ endif; ?>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<div class="healdine">
							<p class="headline-title"><?php _e("[:uk]Деталі") ?></p>
						</div>

						<div class="editor"><?php echo $section['content']; ?></div>

					</div>
				</div>

			</div>
		</section>
	<?php /* Room End */ endif; ?>

	<section id="<?php echo get_post_type(), '-', get_the_ID(); ?>" class="announce">

		<?php // Section: Media Announce
		get_template_part('template-sections/section-media-announce'); ?>

	</section>

</main>

<?php get_footer(); ?>