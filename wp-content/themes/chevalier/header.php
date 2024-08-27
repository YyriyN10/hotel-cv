<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chevalier
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="site-header" class="site-header">

			<div class="headbar">
				<div class="container">
					<div class="row">
						<div class="header-content col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<div id="headbar-buttons" class="headbar-panel">

								<div class="buttons">
									<a href="<?php echo wpm_translate_url(home_url('/leisure'), wpm_get_language()); ?>" class="button-s bordered whited"><?php _e("[:uk]Дозвілля[:ru]Досуг[:en]Leisure"); ?></a>
								</div>

							</div>

							<div class="headbar-panel">

								<?php // Component Site Branding
								get_template_part('template-components/component-site-branding'); ?>

							</div>

							<div class="headbar-panel">

								<!--<div class="sidebar-toggle" id="menu-btn" data-text="<?php /*_e("[:uk]Меню[:ru]Меню[:en]Menu"); */?>">

									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>-->

                <div class="menu-btn" id="menu-btn">
                  <div class="menu-btn-inner">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>

                  <p class="menu-name"><?php _e("[:uk]Меню[:ru]Меню[:en]Menu"); ?></p>
                </div>



							</div>

						</div>
					</div>
				</div>
			</div>

      <div class="custom-menu" id="hidden-menu">
        <div class="container">
          <div class="row">
            <div class="content col-12">
              <div class="menu-wrapper">
                <nav class="hidden-naw-wrapper">
		              <?php
			               wp_nav_menu(array(
													'container' => '',
													'menu_class' => 'menu',
													'theme_location' => 'menu-1',
													'menu_id' => 'sidebar-menu',
													'walker'          => new My_Walker_Nav_Menu()
												)
											);


									?>
                </nav>
                <div class="menu-contacts">
                  <p class="menu-contacts__name">
			              <?php _e("[:uk]Наші контакти / Як нас знайти ? [:ru]Наши контакты / Как нас найти?[:en]Our contacts / How to find us?"); ?>
                  </p>
		              <?php if (function_exists('chevalier_addresses')) : ?>
                  <div class="contact-list">
			              <?php chevalier_addresses(); ?>
                  </div>
		              <?php endif; ?>
		              <?php if (function_exists('chevalier_emails')) : ?>
                  <div class="contact-list">
			              <?php chevalier_emails(); ?>
                  </div>
		              <?php endif; ?>
		              <?php if (function_exists('chevalier_phones')) : ?>
                  <div class="contact-list">
			              <?php chevalier_phones(); ?>
                  </div>
		              <?php endif; ?>
                  <div class="more-wrapper">

                    <a href="" class="more-logo">
                      <img src="<?php echo get_template_directory_uri();?>/assets/media/logo_panorama_w.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
              <div class="elements-wrapper">
                <div class="inner">
                  <div class="columns column-left">
                    <div class="element"></div>
                    <div class="element menu-pic"><img src="" alt=""></div>
                    <div class="element"></div>
                  </div>
                  <div class="columns column-right">
                    <div class="element"></div>
                    <div class="element"></div>
                    <div class="element"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



			<!--<div id="sidebar" class="sidebar header-menu-wrapper">


				<div class="container">

					<div class="row">-->
						<!--<div class="col-lg-8 menu-wrapper">

							<nav id="sidebar-navigation" class="sidebar-navigation">
								<?php
/*                  wp_nav_menu(array(
                      'container' => '',
                      'menu_class' => 'menu',
                      'theme_location' => 'menu-1',
                      'menu_id' => 'sidebar-menu'
                    )
                  );
                  */?>
							</nav>

              <div class="menu-contacts">
                <p class="widget-title">
									<?php /*_e("[:uk]Наші контакти / Як нас знайти ? [:ru]Наши контакты / Как нас найти?[:en]Our contacts / How to find us?"); */?>
                </p>
								<?php /*if (function_exists('chevalier_addresses')) : */?>
                  <div class="contact-list">
										<?php /*chevalier_addresses(); */?>
                  </div>
								<?php /*endif; */?>
								<?php /*if (function_exists('chevalier_emails')) : */?>
                  <div class="contact-list">
										<?php /*chevalier_emails(); */?>
                  </div>
								<?php /*endif; */?>
								<?php /*if (function_exists('chevalier_phones')) : */?>
                  <div class="contact-list">
										<?php /*chevalier_phones(); */?>
                  </div>
								<?php /*endif; */?>

              </div>

						</div>-->

						<!--<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

							<div class="widget">


								<?php /*if (function_exists('chevalier_phones')) : */?>
									<div class="contact-list">
										<?php /*chevalier_phones(); */?>
									</div>
								<?php /*endif; */?>

								<?php /*if (function_exists('chevalier_emails')) : */?>
									<div class="contact-list">
										<?php /*chevalier_emails(); */?>
									</div>
								<?php /*endif; */?>
							</div>

							<div class="widget">
								<p class="widget-title"><?php /*_e("[:uk]Адреса[:ru]Адрес[:en]Address"); */?></p>
								<?php /*if (function_exists('chevalier_addresses')) : */?>
									<div class="contact-list">
										<?php /*chevalier_addresses(); */?>
									</div>
								<?php /*endif; */?>
							</div>

							<div class="widget">
								<p class="widget-title"><?php /*_e("[:uk]Соціальні мережі[:en]Social Media[:ru]Социальные сети"); */?></p>
								<?php /* if (function_exists('chevalier_socials')) : */?>
									<div class="social-media">
										<?php /*chevalier_socials(); */?>
									</div>
								<?php /* endif; */?>
							</div>


						</div>-->
					<!--</div>

				</div>
			</div>-->

		</header>