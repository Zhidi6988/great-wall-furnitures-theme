<?php
// Enqueue styles and scripts
function greatwall_scripts() {
    wp_enqueue_style( 'greatwall-style', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0' );
    wp_enqueue_script( 'greatwall-app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'greatwall_scripts' );
?>
