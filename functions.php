<?php 

    function rrf_basic_files(){
        wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.min.css', array(),  '1.0', 'all' );
        wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(),  '1.0', 'all' );
        wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(),  '1.0', 'all' );
        wp_enqueue_style( 'bootsnav-css', get_template_directory_uri() . '/assets/css/bootsnav.css', array(),  '1.0', 'all' );
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(),  '1.0', 'all' );
        wp_enqueue_style( 'main-css', get_stylesheet_uri(), array(),  '1.0', 'all' );


        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'bootsnav-js', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'ajaxchimp-js', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'ajaxchimp-config-js', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true );
    }

    add_action('wp_enqueue_scripts', 'rrf_basic_files' );


    function rrf_basic_setup(){

        // load theme text domain
        load_theme_textdomain( 'rrf_basic', get_template_directory() . '/languages' );

        // Genarate automated feed links
        add_theme_support( 'automatic-feed-links' );
        
        // add title tad to the theme
        add_theme_support( 'title-tag' );

        // add post thumbnail
        add_theme_support( 'post-thumbnails' );

        // menu regester
        register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'rrf_basic' ),
			)
		);

        // add html5 support
        add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
        );
        
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        
        // add custom logo support
        add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

    }

    add_action( 'after_setup_theme', 'rrf_basic_setup' );
    
    // register custom post
    function rrf_basic_cpt() {
        register_post_type('slider',
            array(
                'labels'      => array(
                    'name'          => __('slides'),
                    'singular_name' => __('slide',),
                ),
                    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
                    'public'      => false,
                    'show_ui' => true,
            )
        );

        register_post_type('feature',
            array(
                'labels'      => array(
                    'name'          => __('features'),
                    'singular_name' => __('feature',),
                ),
                    'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
                    'public'      => false,
                    'show_ui' => true,
            )
        );
    
        register_post_type('service',
            array(
                'labels'      => array(
                    'name'          => __('services'),
                    'singular_name' => __('service',),
                ),
                    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
                    'public'      => false,
                    'show_ui' => true,
            )
        );
    }
    add_action('init', 'rrf_basic_cpt');




    
    
    
    
    
    