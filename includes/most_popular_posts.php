<?php

//List Your Most Popular Posts in WordPress
 
function popularPosts($num) {
    global $wpdb;
 
    $posts = $wpdb->get_results("SELECT comment_count, ID, post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , $num");
 
    foreach ($posts as $post) {
        setup_postdata($post);
        $id = $post->ID;
        $title = $post->post_title;
        $count = $post->comment_count;
 
        if ($count != 0) {
            $popular .= '<li>';
            $popular .= '<a href="' . get_permalink($id) . '" title="' . $title . '">' . $title . '</a> ';
            $popular .= '</li>';
        }
    }
    return $popular;
}

?>