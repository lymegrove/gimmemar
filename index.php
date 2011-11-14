<?php get_header(); ?>
 
      <section> <!-- body start-->
 
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <article>
                <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_time('m/j/y g:i A') ?> | by: <a href="<?php bloginfo('url'); ?>/author/<?php the_author_nickname(); ?>"><?php the_author(); ?></a> | <a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments' );?></a>
                <span  class='st_sharethis' displayText='ShareThis'></span>
                </header>
 
                <p>
                            <?php the_content(); ?>
 
                </p>
 
            </article>
<?php endwhile; ?>
 
        <div class="navigation">
        <?php posts_nav_link(); ?>
        </div>
 
        <?php endif; ?>
   
   </section>
   <aside>
<?php get_sidebar(); ?>
</aside>
<?php get_footer(); ?>

