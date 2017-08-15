<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

Class hk_FrameWork {
    
    public function __construct() {
        
        add_action( 'wp_enqueue_scripts', array($this, 'cs_style_and_scripts'));
        add_action( 'init', array($this, 'hk_menus') );
        $this->helper();
        
    }


    /**
     * Setup Theme Functions
     */
    public function cs_theme_setup() {
        
        load_theme_textdomain( 'hk', get_template_directory() . '/languages' );

    }

    /** Call to JS & CSS **/
    function hk_style_and_scripts() {

        // CSS
        wp_enqueue_style( 'main-css', get_stylesheet_uri() );

        // Js
        wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true );

    }

    // Register Navigation Menus
    public function hk_menus() {
        
        $locations = array(
            'header_menu' => __( 'Header Menu', 'hk' ),
            'footer_menu' => __( 'Footer Menu', 'hk' ),
        );
        register_nav_menus( $locations );
        
    }
    
    public function helper(){
        // Iclude Functions Files
        // include_once('in/sample.php');
    } 
    
}

// Install Theme
$theme = new hk_FrameWork();


?>
