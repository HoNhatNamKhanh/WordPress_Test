<?php
// Add css bootstrap to Wordpress
function load_css_bootstrap()
{
    wp_enqueue_style("css_bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), "1.0.3", "all");
}
add_action("wp_enqueue_scripts", "load_css_bootstrap");
// Add js bootstrap to Wordpress
function load_js_bootstrap()
{
    wp_enqueue_script("js_bootstrap", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), "1.0.1", true);
}
add_action("wp_enqueue_scripts", "load_js_bootstrap");

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'mobile' => __('Mobile Menuu')
));
add_filter('nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3);
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
    if (is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
        if (array_key_exists('data-toggle', $atts)) {
            unset($atts['data-toggle']);
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}
