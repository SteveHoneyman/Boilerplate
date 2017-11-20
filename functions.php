<?php
// enqueue stylesheets
function theme_styles() {
	wp_enqueue_style('main_css', get_template_directory_uri(). '/css/main.css?v=' .time() );
    wp_enqueue_style('slick_css', get_template_directory_uri(). '/css/slick.css');
	}
	
add_action('wp_enqueue_scripts', 'theme_styles');

// enqueue scripts
function theme_js() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', true, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('theme_boot_js', get_template_directory_uri().'/js/boot.js', '', '', true);
    wp_enqueue_script('slick_min_js', get_template_directory_uri().'/js/slick.min.js', '', '', true);   
}

add_action('wp_enqueue_scripts', 'theme_js');

// add menus
function register_theme_menus() {
	register_nav_menus( // register multiple custom menus
		array(
			'header-menu' => __('Header Menu'), 
			'footer-menu' => __('Footer Menu') 
			)
		);
}
// add_action('name of action to hook function too','name of function')
add_action('init', 'register_theme_menus');


// set Options
$args = array(
	'page_title' => 'Options'
	);

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page($args);
}

// enable featured images
add_theme_support('post-thumbnails');

// show admin bar
add_filter('show_admin_bar', '__return_true');

// add custom post type and taxonomy
// custom post type
function create_cpt() {

    // set up labels
    $labels = array(
        'name' => 'Custom Post',
        'singular_name' => 'Custom Post',
        'add_new' => 'Add new Custom Post',
        'add_new_item' => 'Add new Custom Post',
        'edit_item' => 'Edit Custom Post',
        'new_item' => 'New Custom Post',
        'all_items' => 'All Custom Posts',
        'view_item' => 'View Custom Post',
        'menu_name' => 'Custom Post'
    ); // end customjam labels array

    //register post type
    register_post_type( 'custompost', 
        array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'slug', 'thumbnail'),
        'taxonomies' => array( 'post_tag', 'category' ),
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'Custom Post' )
        )
    );
}
add_action( 'init', 'create_cpt' );

// custom taxonomy
function create_taxo() {

    // set up labels
    $labels = array(
        'name'  =>  'Taxo',
        'singular_name' => 'Taxo',
        'all_items' => 'All Taxos',
        'edit_item' => 'Edit Taxo',
        'update_item' => 'Update Taxo',
        'add_new_item' => 'Add New Taxo',
        'new_item_name' => 'New Taxo Name',
        'menu_name' => 'Taxo',
        'view_item' => 'View Taxos'
    ); // end taxo labels array

    // register taxonomy
    register_taxonomy( 'taxo' , 'custompost', 
        array(
        'labels' => $labels,
        'hierarchical' => 'true',
        'query_var' => 'true',
        'rewrite' => 'true'
        )
    );
}
add_action( 'init' , 'create_taxo');


//enable widget area
function boilerplate_widgets_init() {
    
    register_sidebar( array (
        'name'          => __( 'Right Hand Sidebar', 'Boilerplate' ),
        'id'            => 'rh-widget-sidebar',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        ));

    } // end widgets function array
 
 add_action( 'widgets_init', 'boilerplate_widgets_init' );   

 //hex to rgb
 function hex2rgba( $colour , $opacity = 1) {
        if ( !$colour) return 'transparent';
        if ( $colour[0] == '#' ) {
                $colour = substr( $colour, 1 );
        }
        if ( strlen( $colour ) == 6 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif ( strlen( $colour ) == 3 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
                return false;
        }
        $r = hexdec( $r );
        $g = hexdec( $g );
        $b = hexdec( $b );
        return "rgba( {$r}, {$g}, {$b}, {$opacity} )";
}

// shortcodes
// basic button
add_shortcode( 'Button', 'basic_button' );

function basic_button($atts, $content = '') {
    return '<a class="btn">' . $content . '</a>';
}



















