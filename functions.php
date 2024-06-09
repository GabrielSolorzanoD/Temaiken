<?php
    if(!defined('ABSPATH')){die();}

    if(!function_exists('temaiken_1_setup')){
        function temaiken_1_setup(){
          add_theme_support('post-thumbnails');
        }
        add_action('after_setup_theme','temaiken_1_setup');
    }

    if(!function_exists('temaiken_1_enquenue') ){
        function temaiken_1_enquenue(){
            wp_enqueue_style("bootstrapcss", get_stylesheet_uri('assets/css/bootstrap.min.css', __FILE__));
            wp_enqueue_script("bootstrapjs", get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'));
            wp_enqueue_script( "sweetalert2",    get_template_directory_uri().'/assets/js/sweetalert2.js' , array('jquery')); 
            wp_enqueue_script( "funciones",    get_template_directory_uri().'/assets/js/funciones.js' );
        }
        add_action('wp_enquqenue_scripts', 'temaiken_1_enquenue');
    }
?>