<?php

include 'shortcodes.php';

// Adding font
add_action('wp_head', 'wpse_43672_wp_head');
function wpse_43672_wp_head(){
    //Close PHP tags
    ?>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <?php //Open PHP tags
}

// Allow shortcode processing in default widgets
// add_filter('widget_text', 'do_shortcode');

// Provided code from documentation
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/css/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
