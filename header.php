<?php $medus_featured= get_option('mb_featured'); $medus_exclude= get_option('mb_exclude'); $medus_exclude_pages= get_option('mb_exclude_pages'); $medus_social_facebook= get_option('mb_social_facebook'); $medus_social_myspace= get_option('mb_social_myspace'); $medus_social_twitter= get_option('mb_social_twitter'); $medus_social_tumblr= get_option('mb_social_tumblr'); $medus_social_youtube= get_option('mb_social_youtube'); $medus_social_flickr= get_option('mb_social_flickr'); $medus_social_foursquare= get_option('mb_social_foursquare'); $medus_social_deviantart= get_option('mb_social_deviantart'); $medus_subscribe_feed= get_option('mb_subscribe_feed'); $medus_subscribe_email= get_option('mb_subscribe_email'); $medus_logo_text= get_option('mb_logo_text'); $medus_logo_image= get_option('mb_logo_image'); $medus_resize = get_option('mb_resize'); $medus_remove_cats = get_option('mb_remove_cats'); $medus_remove_pages = get_option('mb_remove_pages'); ?>
<!DOCTYPE HTML>
 
<html>
 
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
 
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" /><!-- look for the main-stylesheet in wordpress dir-->
<?php wp_head(); ?>
<style type="text/css">
body{
background-color: <?php echo get_option('color1'); ?>;
color:	<?php echo get_option('color2'); ?>;
}
p	{
color:	<?php echo get_option('color2'); ?>;
}
.headerMain	{
color:	<?php echo get_option('color3'); ?>;
}
a, a:active, a:visited {
color:	<?php echo get_option('color4'); ?>;
}
a:hover	{
color:	<?php echo get_option('color5'); ?>;
}
.menu-header ul li a	{	
color:	<?php echo get_option('color6'); ?>;
}
.menu-header ul li:hover:first-child > a,
.menu-header ul li:hover:last-child > a,
.menu-header ul ul ul li:hover:first-child> a,
.menu-header ul ul.submenu li:hover:first-child> a,
.menu-header ul li:hover > a	{	
color:	<?php echo get_option('color7'); ?>;
}
.menu-header ul ul a	{
color:	<?php echo get_option('color7'); ?>;
}

</style>
</head>
 
<body>

        <header>
        <!--title--><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel=""><h1><?php bloginfo( 'name' ) ?></h1></a><!--/title-->
             
                <div id="socialIcons">
                	
                	<?php if($medus_social_facebook) { ?><a href="<?php echo $medus_social_facebook; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376577_social_facebook.png" alt="facebook" title="facebook" /></a><?php } ?>
					<?php if($medus_social_twitter) { ?><a href="<?php echo $medus_social_twitter; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376592_social_twitter_bird.png" alt="twitter" title="twitter" /></a><?php } ?>
					<?php if($medus_social_tumblr) { ?><a href="<?php echo $medus_social_tumblr; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376588_social_tumblr.png" alt="tumblr" title="tumblr" /></a><?php } ?>
					<?php if($medus_social_youtube) { ?><a href="<?php echo $medus_social_youtube; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376598_social_you_tube.png" alt="youtube" title="youtube" /></a><?php } ?>
					<?php if($medus_social_flickr) { ?><a href="<?php echo $medus_social_flickr; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376604_social_flickr.png" alt="flickr" title="flickr" /></a><?php } ?>
					<?php if($medus_social_foursquare) { ?><a href="<?php echo $medus_social_foursquare; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376618_social_foursquare.png" alt="foursquare" title="foursquare" /></a><?php } ?>
					<?php if($medus_social_deviantart) { ?><a href="<?php echo $medus_social_deviantart; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376631_social_deviantart.png" alt="deviant art" title="deviant art" /></a><?php } ?>
					<!--img src="<?php bloginfo('template_directory'); ?>/images/1320376604_social_flickr.png" /-->
					<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/1320376608_rss_square.png" alt="rssfeed" title="rss feed"/></a>
					
	</div>
                
        </header>
			
	
	<nav id="mainMenu">
                        <ul>
                        	<li>
                              <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
                              </li>
                        </ul>
                </nav>