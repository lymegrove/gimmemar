<?php
require_once('includes/theme_options.php');
require_once('includes/related_posts.php');
require_once('includes/most_popular_posts.php');
require_once('includes/breadcrumbs.php');
require_once('includes/jquery.php');
require_once('includes/update.php');
include 'guide.php';
 
//enabled sidebar
if ( function_exists('register_sidebars') )
register_sidebars(3);
 
//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );
 
// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(540, 260, true);

add_theme_support( 'menus' );

add_editor_style('style.css');
 
function youtubeSC($atts) {

	return '<object width="425" height="344"><param name="movie" value="'.substr($atts[0],1).'?hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="'.substr($atts[0],1).'?hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>';
}
add_shortcode("youtube", "youtubeSC");

?>