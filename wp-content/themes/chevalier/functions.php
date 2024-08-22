<?php

/**
 * chevalier functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chevalier
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function chevalier_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on chevalier, use a find and replace
		* to change 'chevalier' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('chevalier', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary Menu', 'chevalier'),
			'menu-2' => esc_html__('Room Menu', 'chevalier'),
			'menu-3' => esc_html__('Service Menu', 'chevalier'),
			'menu-4' => esc_html__('Footer Menu', 'chevalier'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'chevalier_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function chevalier_content_width()
{
	$GLOBALS['content_width'] = apply_filters('chevalier_content_width', 640);
}
add_action('after_setup_theme', 'chevalier_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function chevalier_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'chevalier'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'chevalier'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="widget-title">',
			'after_title'   => '</p>',
		)
	);
}
add_action('widgets_init', 'chevalier_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function chevalier_scripts()
{
	// Style
	wp_enqueue_style('chevalier-style', get_theme_file_uri('/style.css'), array(), '1.0.0');
	wp_enqueue_style('chevalier-normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '8.0.1');
	/*wp_enqueue_style('chevalier-fullpage', get_theme_file_uri('/assets/css/fullpage.css'), array(), '1.0.0');*/
	/*wp_enqueue_style('chevalier-pagepiling', get_theme_file_uri('/assets/css/jquery.pagepiling.css'), array(), '1.0.0');*/
	wp_enqueue_style('chevalier-custom-style', get_theme_file_uri('/assets/css/custom-styles.min.css'), array(), '1.0.0');

	// jQuery
	wp_enqueue_script('chevalier-jquery', get_theme_file_uri('/assets/js/jquery.min.js'), array(), '3.6.0');
	wp_enqueue_script('chevalier-custom-js', get_theme_file_uri('/assets/js/main.min.js'), array(), '1.6.0');

	// JavaScript
	wp_enqueue_script('chevalier-template', get_theme_file_uri('/assets/js/template.js'), array(), '1.0.0', true);

	// Swiper
	wp_enqueue_style('chevalier-swiper', get_theme_file_uri('/assets/css/swiper-bundle.min.css'), array(), '6.5.0');
	wp_enqueue_script('chevalier-swiper', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array(), '6.5.0');

	wp_enqueue_script('chevalier-parallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.1/dist/simpleParallax.min.js', array(), '5.6.1');


	// Fancy Box
	wp_enqueue_style('chevalier-fancybox', get_theme_file_uri('/assets/css/fancybox.min.css'), array(), '3.5.7');
	wp_enqueue_script('chevalier-fancybox', get_theme_file_uri('/assets/js/fancybox.min.js'), array(), '3.5.7');

	// Iconify
	wp_enqueue_script('chevalier-iconify', 'https://code.iconify.design/1/1.0.7/iconify.min.js', array(), '1.0.7', true);

	// AOS
	wp_enqueue_style('chevalier-aos', get_theme_file_uri('/assets/css/aos.min.css'), array(), '2.3.1');
	wp_enqueue_script('chevalier-aos', get_theme_file_uri('/assets/js/aos.min.js'), array(), '2.3.1');

	// Google Fonts
	/*wp_enqueue_style('chevalier-serif', 'https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,500;1,500&display=swap', array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('chevalier-sans-serif', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap', array(), wp_get_theme()->get('Version'));*/


	// Comments
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'chevalier_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Transliteration.
 */
/*require get_template_directory() . '/inc/transliteration.php';*/

/**
 * Disable Gutenberg.
 */
add_filter('use_block_editor_for_post', '__return_false');

/**
 * Disable Gutenberg for Widgets.
 */
function disable_gutenberg_for_widgets()
{
	// Disable Gutenberg for widgets
	remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'disable_gutenberg_for_widgets');

/**
 * Filter Archive Titles.
 */
add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});


// свой класс построения меню:
	class My_Walker_Nav_Menu extends Walker_Nav_Menu {

		// add classes to ul sub-menus
		function start_lvl( &$output, $depth = 0, $args = NULL ) {
			// depth dependent classes
			$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
			$display_depth = ( $depth + 1); // because it counts the first submenu as 0
			$classes = array(
				'sub-menu',
				( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
				( $display_depth >=2 ? 'sub-sub-menu' : '' ),
				'menu-depth-' . $display_depth
			);
			$class_names = implode( ' ', $classes );

			// build html
			$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
		}

		// add main/sub classes to li's and links
		function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
			global $wp_query;

			// Restores the more descriptive, specific name for use within this method.
			$item = $data_object;

			$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

			// depth dependent classes
			$depth_classes = array(
				( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
				( $depth >=2 ? 'sub-sub-menu-item' : '' ),
				( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
				'menu-item-depth-' . $depth
			);
			$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

			// passed classes
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

			// build html
			$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

			$icon = get_field('zobrazhenya_dlya_animacziyi', $item);

			// link attributes
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href='   . esc_attr( $item->url        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' data-image='   . esc_attr( $icon        ) .'"' : '';
			$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

			$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
				$args->before,
				$attributes,
				$args->link_before,
				apply_filters( 'the_title', $item->title, $item->ID ),
				$args->link_after,
				$args->after
			);

			// build html
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

	}