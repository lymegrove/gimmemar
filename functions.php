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
 
add_action('admin_menu', 'themeoptions_admin_menu'); //action to display the menu
function themeoptions_admin_menu() 
{
	add_theme_page('Gimmemar colors', 'Gimmemar colors', 'read', 'color_picker_option', 'color_picker_option_page');
}


add_action('init', 'load_theme_scripts');
function load_theme_scripts() {
	wp_enqueue_style( 'farbtastic' );
	wp_enqueue_script( 'farbtastic' );
}

function color_picker_option_page() 
{
	/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color1 = get_option('color1');
	if (empty($color1) || $color1 == '') {
		add_option('color1', '#ffffff');
	}
	/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color2 = get_option('color2');
	if (empty($color2) || $color2 == '') {
		add_option('color2', '#4d4b4b');
	}
		/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color3 = get_option('color3');
	if (empty($color3) || $color3 == '') {
		add_option('color3', '#4d4b4b');
	}
			/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color4 = get_option('color4');
	if (empty($color4) || $color4 == '') {
		add_option('color4', '#ababab');
	}
			/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color5 = get_option('color5');
	if (empty($color5) || $color5 == '') {
		add_option('color5', '#651633');
	}
				/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color6 = get_option('color6');
	if (empty($color6) || $color6 == '') {
		add_option('color6', '#222222');
	}
				/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color7 = get_option('color7');
	if (empty($color7) || $color7 == '') {
		add_option('color7', '#651633');
	}
				/*This should normally go into a seperate function to provide default values for when the theme is just activated*/
	$color8 = get_option('color8');
	if (empty($color8) || $color8 == '') {
		add_option('color8', '#651633');
	}
	
	/*The admin page*/
	if ( isset($_POST['update_options'])) { color_picker_option_update(); }
	?>
	<div class="wrap">
		<div id="icon-themes" class="icon32"><br /></div>
		<h2> Gimmemar Colors Main Options</h2>
	
		<form method="POST" action="">	
			<h2>Styling Options</h2>
			<table class="widefat color_picker_options">
				<thead><tr><th colspan="2">&nbsp;</th></tr></thead>
				<tbody>
				<tr valign="top">
					<th width="200px" scope="row">Background Color</th>
					<td>	
						<input type="text" id="color1" value="<?php echo get_option('color1'); ?>" name="color_picker_color1" />
						<div id="color_picker_color1"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Main Text Colour</th>
					<td>	
						<input type="text" id="color2" value="<?php echo get_option('color2'); ?>" name="color_picker_color2" />
						<div id="color_picker_color2"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Article Header Text Colour</th>
					<td>	
						<input type="text" id="color3" value="<?php echo get_option('color3'); ?>" name="color_picker_color3" />
						<div id="color_picker_color3"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Link Colour</th>
					<td>	
						<input type="text" id="color4" value="<?php echo get_option('color4'); ?>" name="color_picker_color4" />
						<div id="color_picker_color4"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Link Hover Colour</th>
					<td>	
						<input type="text" id="color5" value="<?php echo get_option('color5'); ?>" name="color_picker_color5" />
						<div id="color_picker_color5"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Nav Colour</th>
					<td>	
						<input type="text" id="color6" value="<?php echo get_option('color6'); ?>" name="color_picker_color6" />
						<div id="color_picker_color6"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Nav Hover Colour</th>
					<td>	
						<input type="text" id="color7" value="<?php echo get_option('color7'); ?>" name="color_picker_color7" />
						<div id="color_picker_color7"></div>
					</td>
				</tr>
				<tr valign="top">
					<th width="200px" scope="row">Secondary Menu Colour</th>
					<td>	
						<input type="text" id="color8" value="<?php echo get_option('color8'); ?>" name="color_picker_color8" />
						<div id="color_picker_color8"></div>
					</td>
				</tr>
				</tbody>
	
				<tfoot><tr><th>&nbsp;</th><th>&nbsp;</th></tr></tfoot>
			</table>
			<p><input type="submit" name="update_options" value="Update Options" class="button-primary" /></p>
		</form>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#color_picker_color1').farbtastic('#color1');
			$('#color_picker_color2').farbtastic('#color2');
			$('#color_picker_color3').farbtastic('#color3');
			$('#color_picker_color4').farbtastic('#color4');
			$('#color_picker_color5').farbtastic('#color5');
			$('#color_picker_color6').farbtastic('#color6');
			$('#color_picker_color7').farbtastic('#color7');
			$('#color_picker_color8').farbtastic('#color8');
		});
	</script>
<?php 
}


function color_picker_option_update()
{
	update_option('color1', esc_html($_POST['color_picker_color1']));
	update_option('color2', esc_html($_POST['color_picker_color2']));
	update_option('color3', esc_html($_POST['color_picker_color3']));
	update_option('color4', esc_html($_POST['color_picker_color4']));
	update_option('color5', esc_html($_POST['color_picker_color5']));
	update_option('color6', esc_html($_POST['color_picker_color6']));
	update_option('color7', esc_html($_POST['color_picker_color7']));
	update_option('color8', esc_html($_POST['color_picker_color8']));
}