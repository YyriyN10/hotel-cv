<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package chevalier
 */

get_header(); ?>

<main id="primary" class="site-main">

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<h1><?php _e("[:uk]404[:ru]404[:en]404"); ?></h1>

					<p><?php _e("[:uk]Запитаної сторінки не існує. Ми вже знаємо про це та працюємо над усуненням проблеми.[:ru]Запрошенной страници не существует. Мы уже знаем об этом и работаем над устранением проблемы.[:en]The requested page does not exist. We are already aware of this and are working on fixing the problem."); ?></p>

					<div class="buttons">
						<a class="button-xl" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php _e("[:uk]Головна сторінка[:ru]Главная страница[:en]Home Page"); ?></a>
					</div>

				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>