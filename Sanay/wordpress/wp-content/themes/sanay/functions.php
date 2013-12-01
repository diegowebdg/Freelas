<?php
    //Include the Advanced Custom fields add-on
    include_once('acf-location-field-master/acf-location.php');

    //Add post thumbnail Size
    add_theme_support( 'post-thumbnails' );
	add_image_size( 'single', 283, 205, true );
    add_image_size( 'home-category', 317, 236, true );
    
function searchfilter($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post','page'));
    }
    return $query;
}
add_filter('pre_get_posts','searchfilter');
?>