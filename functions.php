<?php


add_image_size( 'poster-single', 350, 539, true );


function my_add_reviews( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
        if ($query->is_home() || $query->is_search() ) {
        $query->set( 'post_type', array( 'post', 'review' ) );
        }
    }
}

add_action( 'pre_get_posts', 'my_add_reviews' );

// Equeue Isotope and isotope settings
function reviews_scripts() {
    if(is_archive('review')){
        wp_enqueue_script( 'isotope-lib', get_stylesheet_directory_uri() . '/js/isotope.min.js', array('jquery'), 11112014, false );
        wp_enqueue_script( 'isotope-settings', get_stylesheet_directory_uri() . '/js/isotope.settings.js', array('isotope-lib'), 11112014, false );
    }
}   

add_action( 'wp_enqueue_scripts', 'reviews_scripts' );