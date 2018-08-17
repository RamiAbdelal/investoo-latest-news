<?php // Investoo Latest News - Admin Settings

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Displays the settings page content, which just contains instructions on how to make use of the shortcode.
 * 
 */

function investoo_latest_news_display_settings_page() {

    echo "<div class='wrap'><h1>" . __( "Investoo Latest News", "investoo_latest_news" ) . "</h1><br>";
    echo __( 'Simply enter the following shortcode, changing the title and limit number to display your latest posts:<br><br><code>[investoo-latest-news title="A title of your choosing" limit="10"]</code>', 'investoo_latest_news' );
    echo "</div>";

}