<?php


//remeber to turn this off
show_admin_bar( false );


//using "apd_" to prevent clashes with other functions
function apd_custom_theme_styles()
{
   
    // internal style sheet
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');

    //this is the compiled sass
    wp_enqueue_style('style_custom_css', get_template_directory_uri() . '/style-custom.css');
    
    ///google fonts
    wp_enqueue_style('gfonts_css', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500');
}

add_action('wp_enqueue_scripts', 'apd_custom_theme_styles');


function apd_custom_theme_js()
{

    // 3 args
    // name your script // location of your script file// this array lists the the dependencies needed for your js eg jQuery
    wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
    
    /// for another .js script
    // wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
}
    ///AND DON’T FORGET TO CALL IT
add_action('wp_enqueue_scripts', 'apd_custom_theme_js');


// MENUS -- MENUS -- MENUS -- MENUS --

add_theme_support('menus') ;

///create  function using registar_theme_menus() inside it, and adding parameters in the array
function register_theme_menus()
{
    register_nav_menus(
        array(
            'nav-menu-location' => _('Nav Menu Location')
        )
    );
}
//don’t forget to call the function… like this
add_action('init', 'register_theme_menus');
