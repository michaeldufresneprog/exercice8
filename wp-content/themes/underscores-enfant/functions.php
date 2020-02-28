<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}


function wpdocs_custom_excerpt_length( $length ) {
    return 1;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


?>