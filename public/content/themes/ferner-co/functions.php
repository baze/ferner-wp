<?php
/**
 * Ferner & Kollegen functions and definitions
 *
 * @package Ferner & Kollegen
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ferner_co_setup' ) ) :
function ferner_co_setup() {

	load_theme_textdomain( 'ferner-co', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => __( 'Hauptmenü', 'ferner-co' ),
		'secondary' => __( 'Footermenü', 'ferner-co' ),
		'usermenu' => __( 'Nutzermenü', 'ferner-co' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"), true, '2.1.1');
		wp_enqueue_script('jquery');
	}

	function load_css_files() {
	    wp_register_style( 'layout', get_template_directory_uri() . '/css/screen.css');
	    wp_enqueue_style( 'layout' );
	}
	add_action('wp_enqueue_scripts', 'load_css_files');

function load_scripts() {

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.min.js', array(), '20120206', true );
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/libs/respond.js', array(), '20120206', true );
	wp_enqueue_script( 'svgmagic', get_template_directory_uri() . '/js/libs/svgmagic.js', array(), '20120206', true );
	wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/js/libs/responsive-nav.min.js', array(), '20120206', true );
	wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/libs/headroom.min.js', array(), '20120206', true );
	wp_enqueue_script( 'hyphenator', get_template_directory_uri() . '/js/libs/Hyphenator.js', array(), '20120206', true );
		

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_footer', 'load_scripts' );
	
}
endif; // ferner_co_setup
add_action( 'after_setup_theme', 'ferner_co_setup' );

function ferner_co_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ferner-co' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ferner_co_widgets_init' );


require get_template_directory() . '/inc/block-users.php';
require get_template_directory() . '/inc/version-removal.php';
require get_template_directory() . '/inc/clean-head.php';
require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/submenu-classes.php';
require get_template_directory() . '/inc/breadcrumbs.php';

require get_template_directory() . '/inc/mime-types.php';
require get_template_directory() . '/inc/responsive-images.php';

require get_template_directory() . '/inc/datenschutz.php';
require get_template_directory() . '/inc/rechtliches.php';
require get_template_directory() . '/inc/unternehmensinfo.php';

require get_template_directory() . '/inc/extras.php';
// require get_template_directory() . '/inc/customizer.php';
// require get_template_directory() . '/inc/jetpack.php';