<?php
function my_scripts() {
    wp_enqueue_script('jquery-masonry');
    wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() .'/myscript.js', 'jquery', '1.00' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

