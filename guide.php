<?php
add_action('admin_menu', 't_guide');

function t_guide() {
	add_theme_page('How to use Gimmemar theme', 'Gimmemar user guide', 8, 'user_guide', 't_guide_options');
	
}

function t_guide_options() {
?>
<div class="wrap">
<div class="opwrap" style="background:#fff; margin:20px auto; width:80%; padding:30px; border:1px solid #ddd;" >

<div id="wrapr">

<div class="headsection">
<h2 style="clear:both; padding:20px 10px; color:#444; font-size:32px; background:#eee">Gimmemar: User guide</h2>
</div>

<div class="gblock">

  <h2>License</h2>

  <p> The PHP code of the theme is licensed under the GPL license as is WordPress itself. You can read it here: http://codex.wordpress.org/GPL. </p>
  <p> All other parts of the theme including, but not limited to the CSS code, images, and design are licensed for free personal usage.  </p>
  <p> You are requested to retain the credit banners on the template. </p>
  <p> You are allowed to use the theme on multiple installations, and to edit the template for your personal use. </p>
  <p> You are NOT allowed to edit the theme or change its form with the intention to resell or redistribute it. </p>  
  <p> You are NOT allowed to use the theme as a part of a template repository for any paid CMS service. </p>  
  
  
  <h2>How to add featured thumbnail to posts?</h2>
  
  <p>Check the video below to see how to add featured images to posts </p>
  <p><object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0' width='560' height='345'><param name='movie' value='http://screenr.com/Content/assets/screenr_1116090935.swf' /><param name='flashvars' value='i=88375' /><param name='allowFullScreen' value='true' /><embed src='http://screenr.com/Content/assets/screenr_1116090935.swf' flashvars='i=88375' allowFullScreen='true' width='560' height='345' pluginspage='http://www.macromedia.com/go/getflashplayer'></embed></object></p>
 
   <h2>Enable theme navigation menu.</h2>
 <br/>
 <img style="float:left; border:1px solid #ddd; padding:5px; margin:10px;"src="http://img826.imageshack.us/img826/4907/menugo.jpg"/>
 
 <p> To enable navigation menu on the theme header, you should go to the Menu admin panel. You will be able to create and name different custom menus with pages, categories, blogroll links and custom links. </p>
 <p> You will find theme locations listed in the menu admin panel. You can select the menu you want to display on those locations. </p>
 <div class="clear"> </div>
 
 <h2>Wordpress Custom Menus</h2>
   <p>Check the video below to see how to add and change site menus </p>
 <p><iframe width="560" height="315" src="http://www.youtube.com/embed/WkuHbkaieZ4" frameborder="0" allowfullscreen></iframe></p>
  </div>



</div>

</div>

<?php }; ?>