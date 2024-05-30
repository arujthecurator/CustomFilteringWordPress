<?php 
/**
 * Add your custom php code below. 
 * 
 * We recommend you to use "code-snippets" plugin instead: https://wordpress.org/plugins/code-snippets/
 **/

function my_theme_enqueue_styles() {
    $parent_style = 'parent-style'; 

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function enqueue_custom_scripts() {
    // Enqueue Slick Carousel CSS
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css');

    // Enqueue Slick Carousel JavaScript
    wp_enqueue_script('jq-migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js', array('jquery'), null, true);

    // Enqueue your custom JavaScript file
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null, true);

    // Enqueue your custom CSS file
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function include_template_part($atts) {
    ob_start();
    get_template_part($atts['part']);
    return ob_get_clean();
}
add_shortcode('template_part', 'include_template_part');

function custom_theme_scripts() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

function enqueue_my_ajax_script() {
    wp_enqueue_script('my-ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery'), null, true);
    wp_localize_script('my-ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url('admin-ajax.php') ));
}
add_action('wp_enqueue_scripts', 'enqueue_my_ajax_script');





