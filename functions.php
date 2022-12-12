<?php
add_action('wp_enqueue_scripts', 'topforum_scripts');

function topforum_scripts() {
    wp_enqueue_style( 'topforum-style', get_stylesheet_uri() );
   
    wp_enqueue_script('topforum-scripts', get_template_directory_uri() . '/assets/script.js', array(), null, true);
    
};

add_theme_support('custom-logo');

add_theme_support('post-thumbnails');

add_theme_support('menus');


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args)
{
    if ($args->menu === 'Sponsors') {
        $atts['class'] = 'menu__dropdown-link';
    };
    if ($args->menu === 'Exhibitors') {
        $atts['class'] = 'menu__dropdown-link';
    };
    if ($args->menu === 'Speakers') {
        $atts['class'] = 'menu__dropdown-link';
    };
    if ($args->menu === 'Media') {
        $atts['class'] = 'menu__dropdown-link';
    };
    if ($args->menu === 'Register') {
        $atts['class'] = 'btns btns__mc1';
    };



    return $atts;
}

?>
