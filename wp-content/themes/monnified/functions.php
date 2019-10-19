<?php 

//load styles
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/components/bootstrap/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri() . '/assets/components/animate/animate.css', array(), 1, 'all');
    wp_enqueue_style('animate');

    wp_register_style('hamburger', get_template_directory_uri() . '/assets/components/hamburger/hamburgers.min.css', array(), 1, 'all');
    wp_enqueue_style('hamburger');

    wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/components/owl-carousel/assets/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('owl-carousel');

    wp_register_style('owl-carousel-default', get_template_directory_uri() . '/assets/components/owl-carousel/assets/owl.theme.default.min.css', array(), 1, 'all');
    wp_enqueue_style('owl-carousel-default');

    wp_register_style('slick', get_template_directory_uri() . '  /assets/components/slick/slick/slick.css', array(), 1, 'all');
    wp_enqueue_style('slick');
  
    
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.min.css', array(), 1, 'all');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//load scripts
function loadJs() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/components/jquery/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/assets/components/popper/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/components/bootstrap/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    
    wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/components/owl-carousel/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('owl-carousel');

    wp_register_script('slick', get_template_directory_uri() . '/assets/components/slick/slick/slick.js', array(), 1, 1, 1);
    wp_enqueue_script('slick');

    wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), 1, 1, 1);
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'loadJs');
//Menu Support
add_theme_support('menus');
//Thumbnails Support
add_theme_support('post-thumbnails');
//Register Menus
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'theme')
    )
    );
register_nav_menus(
    array(
        'footer-menu' => __('Footer Menu', 'theme')
    )
    );

/* Add custom class to link in menu */
function _namespace_modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="btn btn-link"', $ulclass);
}
add_filter('wp_nav_menu', '_namespace_modify_menuclass');

/* Add custom div wrapper with a class of sub-menu to unordered list with children in menu */
class Walker_Sublevel_ extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu'><ul>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}

/* Filter and remove unwanted generated ids in menu */
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('main-menu')) : '';
}

/* Add custom class to first li tag in menu */
function add_first($output) {
    $output = preg_replace('/class="menu-item/', 'class="has-children', $output, 1);
    return $output;
  }
  add_filter('wp_nav_menu', 'add_first');
?>