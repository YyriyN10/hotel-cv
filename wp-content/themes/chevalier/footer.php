<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chevalier
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<div class="colophon-panel">

					<div class="widget">

						<?php // Component Site Branding
						get_template_part('template-components/component-site-branding'); ?>

						<?php /* addresses */ if (function_exists('chevalier_addresses')) : ?>
							<div class="contact-list">
								<?php chevalier_addresses(); ?>
							</div>
						<?php /* addresses End */ endif; ?>

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
				</div>

				<div class="colophon-panel">
					<div class="widget">
						<p class="widget-title"><?php _e("[:uk]Навігація[:ru]Навигация[:en]Navigation"); ?></p>

						<nav class="widget-navigation">
							<?php wp_nav_menu(array('container' => '', 'menu_class' => 'menu', 'theme_location' => 'menu-1', 'menu_id' => 'widget-menu')); ?>
						</nav>
					</div>

					<div class="widget">
						<p class="widget-title"><?php _e("[:uk]Номери[:ru]Номера[:en]Rooms"); ?></p>

						<nav class="widget-navigation">
							<?php wp_nav_menu(array('container' => '', 'menu_class' => 'menu', 'theme_location' => 'menu-2', 'menu_id' => 'widget-menu')); ?>
						</nav>
					</div>

					<div class="widget">
						<p class="widget-title"><?php _e("[:uk]Послуги[:ru]Услуги[:en]Services"); ?></p>

						<nav class="widget-navigation">
							<?php wp_nav_menu(array('container' => '', 'menu_class' => 'menu', 'theme_location' => 'menu-3', 'menu_id' => 'widget-menu')); ?>
						</nav>
					</div>
				</div>



			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<!------------------------------------------------------------------------->
<div class="modal" id="modal-">
	<a data-fancybox data-src="#modal-">Модальное окно</a>
</div>
<!------------------------------------------------------------------------->

<script>
	AOS.init();
</script>

<?php wp_footer(); ?>

</body>

</html>