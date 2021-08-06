<?php 
register_nav_menu('top-menu', __('Top Menu'));
register_nav_menu('header-menu', __('Header Menu') );
register_nav_menu('linked-menu', __('Linked Menu') );
add_theme_support('post-thumbnails');
add_image_size('featured-thumb', 150, 150, true);

// Tạo sidebar
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'before_widget' => '<div id="%1$s" class="sidebar-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}
function series() {
    p2p_register_connection_type( array(
        'name' => 'create_series',
        'from' => 'post',
        'to' => 'post'
    ) );
}
add_action( 'p2p_init', 'series' );
//Insert jQuery from Google Libraries
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
 function new_excerpt_more( $more ) {
	return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
?>