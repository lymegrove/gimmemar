<?php

/* THEME SETTINGS PANEL */

$themename = "Gimmemar";
$shortname = "mb";
$path = get_bloginfo('template_directory');
$options = array (
	        
		array(  "name" => "Social Media Links",
        	    "id" => $shortname."_homepage_points",
            	"std" => "",
            	"type" => "heading"),		        
	
		array(  "name" => "Twitter Profile URL",
	          "id" => $shortname."_social_twitter",
	          "std" => "",
	          "type" => "text"),
	          
		array(  "name" => "Tumblr Profile URL",
	          "id" => $shortname."_social_tumblr",
	          "std" => "",
	          "type" => "text"),
	          
		array(  "name" => "YouTube Profile URL",
	          "id" => $shortname."_social_youtube",
	          "std" => "",
	          "type" => "text"),
	          	
		array(  "name" => "Facebook Profile URL",
	          "id" => $shortname."_social_facebook",
	          "std" => "",
	          "type" => "text"),
	          
		array(  "name" => "Flickr Profile URL",
	          "id" => $shortname."_social_flickr",
	          "std" => "",
	          "type" => "text"),
	          
		array(  "name" => "Foursquare Profile URL",
	          "id" => $shortname."_social_foursquare",
	          "std" => "",
	          "type" => "text"),	
	  
		array(  "name" => "deviantArt Profile URL",
	          "id" => $shortname."_social_deviantart",
	          "std" => "",
	          "type" => "text"),		            			  		  	          
																							

		array(  "name" => "Header and Footer Code",
            "id" => $shortname."_homepage_points",
            "std" => "",
            "type" => "heading"),
            
		array(  "name" => "&lsaquo;head&rsaquo; Include Code",
	          "id" => $shortname."_head_include",
	          "std" => "",
	          "type" => "textarea"),
	
		array(  "name" => "Footer Include Code",
	          "id" => $shortname."_footer_include",
	          "std" => "",
	          "type" => "textarea"),
						

	
		

);

function mb_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { 
											if( $value['type'] == 'checkbox' ) {
												if( $value['status'] == 'checked' ) {
													update_option( $value['id'], 1 );
												} else { 
													update_option( $value['id'], 0 ); 
												}	
											} elseif( $value['type'] != 'checkbox' ) {
												update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
											} else { 
												update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
											}
										}
									}

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Settings", "Gimmemar Theme Settings", 'edit_themes', basename(__FILE__), 'mb_admin');

}

function mb_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> Settings</h2>

<form method="post">

	<p class="submit" style="margin:-15px 0 -10px;">
		<input name="save" type="submit" value="Save Changes" class="button" />    
		<input type="hidden" name="action" value="save" />
	</p>
	
	<table class="form-table">

	<?php foreach ($options as $value) {     
	if ($value['type'] == "text") { ?>
        
	<tr valign="top"> 
	    <th scope="row"><?php echo $value['name']; ?>:</th>
	    <td>
	        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes (get_settings( $value['id'] )); } else { echo $value['std']; } ?>" size="40" />
	    </td>
	</tr>

	<?php } elseif ($value['type'] == "textarea") { ?>

	    <tr valign="top"> 
	        <th scope="row"><?php echo $value['name']; ?>:</th>
	        <td>
	            <textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" rows="5" cols="70"><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes (get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea>
	        </td>
	    </tr>
	
	<?php } elseif ($value['type'] == "checkbox") { ?>

	    <tr valign="top"> 
	        <th scope="row"><?php echo $value['name']; ?>:</th>
	        <td>
							<?php
								if ( get_option( $value['id'] ) != "" ) { 
									$status= get_option( $value['id'] );
								} else { 
									$status= $value['std']; 
								}
							?>
	            <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" <?php if( $status == 1 ) { echo 'checked'; } ?>/>
	        </td>
	    </tr>

	<?php } elseif ($value['type'] == "select") { ?>

	    <tr valign="top"> 
	        <th scope="row"><?php echo $value['name']; ?>:</th>
	        <td>
	            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                <?php foreach ($value['options'] as $option) { ?>
	                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                <?php } ?>
	            </select>
	        </td>
	    </tr>

		<?php } elseif ($value['type'] == "heading") { ?>

		    <tr valign="top"> 
		        <td colspan="2">
		            <h2 style="font-size:1.8em;"><?php echo $value['name']; ?></h2>
		        </td>
		    </tr>

	<?php 
		} 
	}
	?>

	</table>

	<p class="submit">
		<input name="save" type="submit" value="Save Changes" class="button-primary" />    
		<input type="hidden" name="action" value="save" />
	</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php
}

function mb_wp_head() {
	$mb_head_include= get_option( 'mb_head_include' ); 
	echo $mb_head_include;
	global $options;
	foreach ( $options as $value ) {
	    if ( get_settings( $value['id'] ) === FALSE ) { 
			$$value['id'] = $value['std']; 
		} else { 
			$$value['id'] = get_settings( $value['id'] ); 
		} 
	}
}

add_action('wp_head', 'mb_wp_head');
add_action('admin_menu', 'mb_add_admin');	

?>