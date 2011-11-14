<?php

//Display Related Posts by Same Author this code will display 5 posts. if you want to change it just change the number at the end of
//posts_per_page' => 5 below
 
function get_related_author_posts() {
    global $authordata, $post;
 
    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );
 
    $output = '<ul>';
    foreach ( $authors_posts as $authors_post ) {
        $output .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
    }
    $output .= '</ul>';
 
    return $output;
}

?>