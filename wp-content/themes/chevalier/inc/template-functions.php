<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package chevalier
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function chevalier_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'chevalier_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function chevalier_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'chevalier_pingback_header');


/**
 * ACF Option Page
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'  => 'Основна інформація та налаштування',
		'menu_title'  => 'Chevalier',
		'menu_slug'   => 'theme-general-settings',
		'capability'  => 'edit_posts',
		'redirect'    => false
	));
}

/**
 * Page Title.
 */
function chevalier_page_title()
{
	$page_title = '';  // Declare variable at the start

	if (is_page() || is_single()) {
		$page_title = get_the_title();
	} elseif (is_search()) {
		$page_title = 'Search Results';
	} elseif (is_category() || is_front_page() || is_home() || is_archive() || is_tag()) {
		$page_title = get_the_archive_title();
	}

	return $page_title;  // Use return instead of echo
}

/**
 * Page Thumbnail.
 */
function chevalier_page_thumbnail()
{
	$page_thumbnail = '';  // Declare variable at the start

	if (is_page() || is_single()) {
		$page_thumbnail = get_the_post_thumbnail_url();
	} elseif (is_category() || is_archive() || is_tag()) {
		$page_thumbnail = '/wp-content/themes/chevalier/assets/media/page-header-bg.jpg';
	}

	return $page_thumbnail;  // Use return instead of echo
}

/**
 * Contact: Phone Numbers.
 */
function chevalier_phones()
{
	if (!empty($site_contacts = get_field('site_contacts', 'options'))) :
		foreach ((array) $site_contacts['phones'] as $phone) : ?>
			<a href="tel:<?php echo $phone['phone_number']; ?>" rel="noopener noreferrer"><?php echo $phone['phone_number']; ?></a>
		<?php endforeach;
	endif;
}

/**
 * Contact: Emails.
 */
function chevalier_emails()
{
	if (!empty($site_contacts = get_field('site_contacts', 'options'))) :
		foreach ((array) $site_contacts['emails'] as $email) : ?>
			<a href="mailto:<?php echo $email['email_address']; ?>" rel="noopener noreferrer"><?php echo $email['email_address']; ?></a>
		<?php endforeach;
	endif;
}

/**
 * Contact: Addresses.
 */
function chevalier_addresses()
{
	if (!empty($site_contacts = get_field('site_contacts', 'options'))) :
		foreach ((array) $site_contacts['addresses'] as $address) : ?>
			<p class="contact-address"><?php echo $address['location']; ?></p>
		<?php endforeach;
	endif;
}

/**
 * Contact: Schedule.
 */
function chevalier_schedule()
{
	if (!empty($site_contacts = get_field('site_contacts', 'options'))) : ?>
		<p class="contact-schedule"><?php echo $site_contacts['schedule']; ?></p>
		<?php endif;
}

/**
 * Contact: Social Media.
 */
function chevalier_socials()
{
	if (!empty($site_contacts = get_field('site_contacts', 'options'))) :
		foreach ((array) $site_contacts['socials'] as $social) : ?>
			<a class="social" href="<?php echo $social['social_link']; ?>" target="_blank" rel="noopener noreferrer"><?php echo $social['social_icon']; ?></a>
<?php endforeach;
	endif;
}
