<?php
/**
 * TemplateHosteleria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TemplateHosteleria
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function templatehosteleria_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on TemplateHosteleria, use a find and replace
		* to change 'templatehosteleria' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'templatehosteleria', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'templatehosteleria' ),
	// 	)
	// );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	// Set up the WordPress core custom background feature.
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'templatehosteleria_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
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
add_action( 'after_setup_theme', 'templatehosteleria_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function templatehosteleria_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'templatehosteleria_content_width', 640 );
}
add_action( 'after_setup_theme', 'templatehosteleria_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function templatehosteleria_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Header', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_header',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s container mt-4 mb-4 content">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title section-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Categoria carta', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_carta',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Elementos carta', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_elem_carta',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Tags Menus', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_tags_menu',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Menus', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_menu',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar galeria', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_galeria',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title section-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar UBICACION GMaps', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_ubicacion',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar informacion contacto', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_informacion_contacto',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar post informacion contacto', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_post_informacion_contacto',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar pre-footer', 'templatehosteleria' ),
			'id'            => 'sidebar-contenido_footer',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title section-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar footer', 'templatehosteleria' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s mt-3 mb-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title section-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar scripts', 'templatehosteleria' ),
			'id'            => 'sidebar-scripts',
			'description'   => esc_html__( 'Añadir widgets aqui', 'templatehosteleria' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s scripts">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

	
}
add_action( 'widgets_init', 'templatehosteleria_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function templatehosteleria_scripts() {
	wp_enqueue_style( 'templatehosteleria-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'templatehosteleria-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'templatehosteleria-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	// Vendor scripts
	wp_enqueue_style( 'templatehosteleria-1', get_template_directory_uri() . '/vendor/animate.css/animate.min.css', array(), _S_VERSION, true );
	wp_enqueue_style( 'templatehosteleria-4', get_template_directory_uri() . '/vendor/swiper/swiper-bundle.min.css', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'templatehosteleria_scripts' );

function templatehosteleria_footer_scripts() {
	// Footer scripts
	wp_enqueue_script( 'templatehosteleria-6', get_template_directory_uri() . '/vendor/isotope-layout/isotope.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'templatehosteleria-7', get_template_directory_uri() . '/vendor/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_footer', 'templatehosteleria_footer_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Widgets desarrollados
require_once(get_template_directory() .'/widgets/categoria_carta_widget.php');
require_once(get_template_directory() .'/widgets/elementos_carta_widget.php');
require_once(get_template_directory() .'/widgets/mapa_widget.php');
require_once(get_template_directory() .'/widgets/contacto_widget.php');
require_once(get_template_directory() .'/widgets/tag_menu_widget.php');
require_once(get_template_directory() .'/widgets/elemento_menu_widget.php');

require_once(get_template_directory() .'/widgets/change_color_widget.php');