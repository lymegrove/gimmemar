<?php get_header(); ?>
 
    
    <section> <!-- body start-->
 
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <article>
            	
            	
                <header>
                <h2><?php the_title(); ?></h2>
                <?php the_time('m/j/y g:i A') ?> | by: <a href="<?php bloginfo('url'); ?>/author/<?php the_author_nickname(); ?>"><?php the_author(); ?></a> | <a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></a>
                <span  class='st_sharethis' displayText='ShareThis'></span>
                </header>
 
                <p>
                            <?php the_content(); ?>
                </p>
 
            </article>
 
            <?php endwhile; ?>
 <ul class="prevnext"> <li><<	<?php previous_post('%', '', 'yes', 'yes'); ?> </li> <li><?php next_post('%', '', 'yes', 'yes'); ?>  >></li></ul>
       <?php comments_template(); /* load the comments */ ?>
       COMMENT FEED: <?php comments_rss_link('RSS 2.0'); ?><br />
<nav>
        <?php posts_nav_link(); ?>
</nav>
 
        <?php endif; ?>
 <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
       </section>
 
   <aside>
<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>