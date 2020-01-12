<?php
/**
 * fishing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fishing
 */

if ( ! function_exists( 'fishing_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fishing_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fishing, use a find and replace
		 * to change 'fishing' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fishing', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'fishing' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'fishing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fishing_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fishing_content_width', 640 );
}
add_action( 'after_setup_theme', 'fishing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fishing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fishing' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fishing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fishing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fishing_scripts() {

	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/vendors/bootstrap.min.css');
	wp_enqueue_style('meanmenu-css', get_template_directory_uri() . '/assets/css/vendors/meanmenu.min.css');
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/vendors/slick.css');
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/vendors/slick-theme.css');
	wp_enqueue_style('ionicons-css', get_template_directory_uri() . '/assets/css/vendors/ionicons.min.css');
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/vendors/nice-select.css');
	wp_enqueue_style('fancybox-css', get_template_directory_uri() . '/assets/css/vendors/jquery.fancybox.min.css');
	wp_enqueue_style('nstSlider-css', get_template_directory_uri() . '/assets/css/vendors/jquery.nstSlider.min.css');
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'fishing-style', get_stylesheet_uri() );


	wp_enqueue_script( 'fishing-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/assets/js/vendors/modernizr-3.7.1.min.js', array(), false, true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/vendors/bootstrap.bundle.min.js', array(), false, true);
	wp_enqueue_script('meanmenu-js', get_template_directory_uri() . '/assets/js/vendors/jquery.meanmenu.min.js', array(), false, true);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/vendors/slick.min.js', array(), false, true);
	wp_enqueue_script('nice-select-js', get_template_directory_uri() . '/assets/js/vendors/jquery.nice-select.js', array(), false, true);
	wp_enqueue_script('countdown-js', get_template_directory_uri() . '/assets/js/vendors/jquery.countdown.min.js', array(), false, true);
	wp_enqueue_script('ajaxchimp-js', get_template_directory_uri() . '/assets/js/vendors/jquery.ajaxchimp.min.js', array(), false, true);
	wp_enqueue_script('fancybox-js', get_template_directory_uri() . '/assets/js/vendors/jquery.fancybox.min.js', array(), false, true);
	wp_enqueue_script('imagesloaded-js', get_template_directory_uri() . '/assets/js/vendors/imagesloaded.pkgd.min.js', array(), false, true);
	wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/vendors/isotope.pkgd.min.js', array(), false, true);
	wp_enqueue_script('instafeed-js', get_template_directory_uri() . '/assets/js/vendors/instafeed.min.js', array(), false, true);
	wp_enqueue_script('nstslider-js', get_template_directory_uri() . '/assets/js/vendors/jquery.nstslider.min.js', array(), false, true);
	wp_enqueue_script('ScrollMagic-js', get_template_directory_uri() . '/assets/js/vendors/ScrollMagic.min.js', array(), false, true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fishing_scripts' );

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load tgm plugin activator
 */
require get_template_directory() . '/inc/tgm-plugin-activator.php';
