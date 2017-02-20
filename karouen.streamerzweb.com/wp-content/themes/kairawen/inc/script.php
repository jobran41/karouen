<?php 
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	//wp_enqueue_style('customstyle', get_stylesheet_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
	//wp_enqueue_style('fullpagecs', get_stylesheet_directory_uri() . '/css/jquery.fullPage.css', array(), '3.3.4', 'all');
	wp_enqueue_style('exemple', get_stylesheet_directory_uri() . '/css/animate.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('styleslide', get_stylesheet_directory_uri() . '/css/slidestyle.css', array(), '3.3.4', 'all');
	wp_enqueue_style('uikit', get_stylesheet_directory_uri() . '/css/uikit.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('slidesho', get_stylesheet_directory_uri() . '/css/components/slideshow.css', array(), '3.3.4', 'all');
	wp_enqueue_style('sliderr', get_stylesheet_directory_uri() . '/css/components/slider.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style( 'style', get_stylesheet_uri() ); 
	//wp_enqueue_script('jquery'); 
    
	//wp_enqueue_script('jquery2.2', get_stylesheet_directory_uri() . '/js/jquery-2.2.2.min.js', array(), '2.2.2', true);
        wp_enqueue_script('jquery1.12',get_stylesheet_directory_uri() . '/js/jquery-1.12.2.min.js', array(), '1.12.1', true);
	wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.custom.79639.js', array(), '2.1.1', true);
	wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/js/slider.js', array(), '1.1.1', true);
	//wp_enqueue_script('fullpage', get_stylesheet_directory_uri() . '/js/jquery.fullPage.js', array(), '1.1.1', true);
	wp_enqueue_script('uikitjs', get_stylesheet_directory_uri() . '/js/uikit.min.js', array(), '2.25.0', true);
	wp_enqueue_script('gask', get_stylesheet_directory_uri() . '/js/TweenMax.min.js', array(), '2.18.0', true);
	wp_enqueue_script('customjs', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true);
	wp_enqueue_script('slideshow', get_stylesheet_directory_uri() . '/js/components/slideshow.js', array(), '1.0.1', true);
	wp_enqueue_script('gridparalax', get_stylesheet_directory_uri() . '/js/components/grid.js', array(), '1.0.1', true);
    wp_enqueue_script('slideshowfx', get_stylesheet_directory_uri() . '/js/components/slideshow-fx.js', array(), '2.2.2', true);
    wp_enqueue_script('sliderr', get_stylesheet_directory_uri() . '/js/components/slider.min.js', array(), '2.2.2', true);
    wp_enqueue_script('lightbox', get_stylesheet_directory_uri() . '/js/components/lightbox.min.js', array(), '2.2.2', true);
    wp_enqueue_script('paralax', get_stylesheet_directory_uri() . '/js/parallax.js', array(), '2.2.2', true); 
         
    wp_localize_script('customjs', 'varimg', get_stylesheet_directory_uri());  
    
    }
add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

?>