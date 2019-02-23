<?php
add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', function() {

    wp_deregister_script('jquery');

    //Enqueue Style
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

    //Enqueue Scripts
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js'
        , null, null, false);
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', null, null, true);
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js'
        , null, null, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js'
        , null, null, true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js'
        , null, null, true);
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js'
        , null, null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js'
        , null, null, true);



    // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js'));

} );

