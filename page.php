<?php get_header(); ?>
 
      <section> <!-- body start-->
 
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
            <article>
                <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
 
                <p>
                            <?php the_content(); ?>
                </p>
 
            </article>
 
            <?php endwhile; ?>
 
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