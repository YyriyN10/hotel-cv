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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<div id="headbar-buttons" class="headbar-panel">

								<div class="buttons">
									<a href="<?php echo wpm_translate_url(home_url('/leisure'), wpm_get_language()); ?>" class="button-s bordered whited"><?php _e("[:uk]Ваучери[:ru]Ваучеры[:en]Vouchers"); ?></a>
								</div>

							</div>

							<div class="headbar-panel">

								<?php // Component Site Branding
								get_template_part('template-components/component-site-branding'); ?>

							</div>

							<div class="headbar-panel">

								<div class="sidebar-toggle" data-text="<?php _e("[:uk]Меню[:ru]Меню[:en]Menu"); ?>">
									<span></span>
									<span></span>
									<span></span>
									<span></span>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

			<div id="sidebar" class="sidebar">
				<div class="container">

					<div class="row x-space-between">
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

							<nav id="sidebar-navigation" class="sidebar-navigation">
								<?php wp_nav_menu(array('container' => '', 'menu_class' => 'menu', 'theme_location' => 'menu-1', 'menu_id' => 'sidebar-menu')); ?>
							</nav>

						</div>
						<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

							<div class="widget">
								<p class="widget-title"><?php _e("[:uk]Контакт-центр[:ru]Контакт-центр[:en]Contact center"); ?></p>

								<?php /* phones */ if (function_exists('chevalier_phones')) : ?>
									<div class="contact-list">
										<?php chevalier_phones(); ?>
									</div>
								<?php /* phones end */ endif; ?>

								<?php /* emails */ if (function_exists('chevalier_emails')) : ?>
									<div class="contact-list">
										<?php chevalier_emails(); ?>
									</div>
								<?php /* emails end */ endif; ?>
							</div>

							<div class="widget">
								<p class="widget-title"><?php _e("[:uk]Адреса[:ru]Адрес[:en]Address"); ?></p>
								<?php /* addresses */ if (function_exists('chevalier_addresses')) : ?>
									<div class="contact-list">
										<?php chevalier_addresses(); ?>
									</div>
								<?php /* addresses End */ endif; ?>
							</div>

							<div class="widget">
								<p class="widget-title"><?php _e("[:uk]Соціальні мережі[:en]Social Media[:ru]Социальные сети"); ?></p>
								<?php /* social Media */ if (function_exists('chevalier_socials')) : ?>
									<div class="social-media">
										<?php chevalier_socials(); ?>
									</div>
								<?php /* social Media End */ endif; ?>
							</div>


						</div>
					</div>

				</div>
			</div>

		</header>