<?php get_header(); ?>
 
    
    <section id="categoryContent"> <!-- body start-->
 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 id="archiveTitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 id="archiveTitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 id="archiveTitle">Archive for <?php the_time('F jS, Y'); ?>:</h2>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 id="archiveTitle">Archive for <?php the_time('F, Y'); ?>:</h2>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 id="archiveTitle">Archive for <?php the_time('Y'); ?>:</h2>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 id="archiveTitle">Author Archive</h2>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 id="archiveTitle">Blog Archives</h2>
    <?php } ?>
      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      	
            <article>
            	
            	
                <header>
                <h2><?php the_title(); ?></h2>
                
                POSTED: <?php the_time('m/j/y g:i A') ?> | AUTHOR: <?php the_author(); ?> | <?php comments_number('(No Comments)', '(One Comment)', '(% Comments)' );?>
                
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

       </section>
 
   <aside>
<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>