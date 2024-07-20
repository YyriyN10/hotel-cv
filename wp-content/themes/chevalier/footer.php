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

<footer id="colophon" class="site-footer section fp-auto-height">
	<div class="container">
		<div class="row">
			<div class="content col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="top-content">
	        <?php // Component Site Branding
		        get_template_part('template-components/component-site-branding'); ?>
          <p class="footer-title"><?php _e("[:uk]Наші контакти / Як нас знайти ? [:ru]Наши контакты / Как нас найти?[:en]Our contacts / How to find us?"); ?></p>
        </div>
        <div class="bottom-content">
          <div class="contacts-wrapper">
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
          <nav class="footer-menu-wrapper">
		        <?php wp_nav_menu(array('container' => '', 'menu_class' => 'footer-menu', 'theme_location' => 'menu-4', 'menu_id' => 'widget-menu')); ?>
          </nav>
          <div class="go-list">
            <div class="buttons">
              <a class="button-xl lined whited line-button" href="<?php echo wpm_translate_url(home_url('/room/'), wpm_get_language()); ?>"><?php _e("[:uk]Прокласти маршрут[:ru]Проложить маршрут[:en]Make a route"); ?></a>
            </div>
            <div class="buttons">
              <a class="button-xl lined whited line-button" href="<?php echo wpm_translate_url(home_url('/room/'), wpm_get_language()); ?>"><?php _e("[:uk]Забронювати[:ru]Забронировать[:en]Reserve"); ?></a>
            </div>
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