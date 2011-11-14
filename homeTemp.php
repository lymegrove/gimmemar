<?php
/*
Template Name: HomeTemplate
*/
?>

<?php get_header(); ?>
 <?php include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php');?>
      <section id="homepageContent"> <!-- body start-->
 
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
            <article>
                
                <h2><?php the_title(); ?></h2>
                
 
                <p>
                            <?php the_content(); ?>
                </p>
 
            </article>
 
            <?php endwhile; ?>
 
        <nav>
        <?php posts_nav_link(); ?>
        </nav>
 
        <?php endif; ?>
 
        </section>
<section id="homeSecondaryContent">
	<article>
	<?php the_secondary_content(); ?>
	</article>
</section>
<section id="homeWidget">
	<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
<?php endif; ?>
</ul>
</section>

<?php get_footer(); ?>