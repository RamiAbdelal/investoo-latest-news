<?php // Investoo Latest News - Admin Menu

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * This function fires off when the admin menu is being built, letting WordPress know that we want to add something of our choosing on the way.
 * 
 */

function investoo_latest_news_add_submenus() {

	/**
	 * Adds a submenu item in the Settings menu of the WordPress dashboard labelled Latest News, likely at the bottom.
	 * It calls the function investoo_latest_news_display_settings_page() found in admin/admin-settings.php which outputs the content on this page.
	 * 
	 */

	add_submenu_page(

		'options-general.php',
		'Investoo Latest News',
		'Latest News',
		'manage_options',
		'investoo_latest_news',
		'investoo_latest_news_display_settings_page'

	);

}

/**
 * Add the action so WordPress can include our menu items.
 * 
 */

add_action( 'admin_menu', 'investoo_latest_news_add_submenus' );
