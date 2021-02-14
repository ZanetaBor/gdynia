<?php

if(!defined('TRAVELGIRL_THEME_DIR')) {
	//define('TRAVELGIRL_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	define('TRAVELGIRL_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('TRAVELGIRL_THEME_URL')) {
	define('TRAVELGIRL_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

require_once TRAVELGIRL_THEME_DIR.'libs/posttypes.php';
require_once TRAVELGIRL_THEME_DIR.'libs/snippets.php';


add_theme_support('post-formats', array('image'));
add_theme_support('post-thumbnails', array('post', 'tips'));

                
function lte_settings_menu() {
    add_theme_page('travel girl - Ustawienia', 'Szablon Travel girl', 'manage_options', 'lte-theme-options', 'lte_settings_page');
}
    
add_action('admin_menu', 'lte_settings_menu');

if(function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Main menu'
    ));
}


function first_footer_widgets_init() {
    register_sidebar( array(
        'name'          => 'first-footer-widget-area',
        'id'            => 'first-footer-widget-area',
        'before_widget' => '<div class="widget-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    }
add_action( 'widgets_init', 'first_footer_widgets_init' );


function add_new_class() {
    if( is_home() || is_front_page()) {
?>
        <script> 
        document.querySelector("div.tiles section:first-child").classList.add("tile-first");
        document.querySelector("div.tiles section:nth-child(2)").classList.add("tile-second");
        document.querySelector("div.tiles section:nth-child(3)").classList.add("tile-third");
        document.querySelector("div.tiles section:nth-child(4)").classList.add("tile-fourth");
        </script>
    <?php
    }}

 add_action('wp_footer', 'add_new_class');


    // REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

?>



