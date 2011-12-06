<script type="text/javascript">
jQuery(function() {
jQuery(".mygallery").jCarouselLite({
btnNext: ".nextb",
btnPrev: ".prevb",
visible: 1,
speed: 2000,
auto: 3000,
easing: "backout"
    });
});
</script>

<div id="slidearea">

<div id="gallerycover">
<div class="mygallery">

<ul>
<?php 
	$gldcat = get_option('medus_gldcat'); 
	$gldct = get_option('medus_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<li>
 	<div class="mytext">
		<a href="<?php the_permalink() ?>">
		 <?php medus_slide_image()?>
		</a>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content_rss('more_link_text', TRUE, '', 60); ?></p>
		
		<div class="slimeta">
		<a href="<?php the_permalink() ?>" class="rmore"></a>
		</div>
	</div>   	
</li>
	<?php endwhile; ?>
</ul>

<div class="clear"></div>  
	
</div>
</div>

   <a href="#" class="prevb"></a>
   <a href="#" class="nextb"></a>  
</div>