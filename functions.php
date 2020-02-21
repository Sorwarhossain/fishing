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
		'name'          => esc_html__( 'Footer Sidebar', 'fishing' ),
		'id'            => 'footer-sidebar',
		'description'   => esc_html__( 'Add footer widgets here.', 'fishing' ),
		'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 col-12 widget %2$s"><div class="single-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
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
 * Load admin scripts
 */
add_action( 'admin_enqueue_scripts', 'fishing_admin_scripts' );
function fishing_admin_scripts(){
	wp_enqueue_style('admin-css', get_template_directory_uri() . '/assets/css/admin.css');
}

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

/**
 * Load fishing-template functions
 */
require get_template_directory() . '/inc/fishing-template-functions.php';

/*** ACF OPTIONS PAGE */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}


// Support SVG images
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');



add_filter( 'wp_nav_menu_objects', 'add_has_children_to_nav_items' );
function add_has_children_to_nav_items( $items )
{
    $parents = wp_list_pluck( $items, 'menu_item_parent');

    foreach ( $items as $item )
        in_array( $item->ID, $parents ) && $item->classes[] = 'tm-header-nav-dropdown';

    return $items;
}



add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button gform_button tm-button tm-button-block' id='gform_submit_button_{$form['id']}'><span>Bericht verzenden</span></button>";
}

add_filter( 'gform_submit_button_2', 'register_form_submit_button', 10, 2 );
function register_form_submit_button( $button, $form ) {
    return "<button class='button gform_button tm-button tm-button-block' id='gform_submit_button_{$form['id']}'><span>Aanvraag indienen</span></button>";
}




add_action( 'init', 'fishing_hide_price_add_cart_not_logged_in' );
function fishing_hide_price_add_cart_not_logged_in() {   
	if ( ! is_user_logged_in() ) {      
	 //remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	 remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );   
     
	 add_action( 'woocommerce_single_product_summary', 'fishing_print_login_to_see', 31 );
	 add_action( 'woocommerce_after_shop_loop_item', 'fishing_print_login_to_see', 11 );
	}
}
  
function fishing_print_login_to_see() {
	//echo '<a href="' . get_home_url() . '/partner-worden">' . __('Login to see prices', 'theme_name') . '</a>';
    echo '&nbsp;';
}






add_shortcode ('woo_cart_but', 'fishing_woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function fishing_woo_cart_but() {
	ob_start();
 
        $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
        $cart_url = wc_get_cart_url();  // Set Cart URL
  
        ?>
        <div class="cart_icon"><a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">	
			<?php
        if ( $cart_count > 0 ) {
       ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?>
		</a></div>
		
		


        <?php
	        
    return ob_get_clean();
 
}



add_filter( 'woocommerce_add_to_cart_fragments', 'fishing_woo_cart_but_count' );
/**
 * Add AJAX Shortcode when cart contents update
 */
function fishing_woo_cart_but_count( $fragments ) {
 
    ob_start();
    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
    
    ?>
    <a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
	<?php
    if ( $cart_count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php            
    }
        ?></a>
    <?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}


add_filter( 'wp_nav_menu_top-menu_items', 'fishing_woo_cart_but_icon', 10, 2 ); // Change menu to suit - example uses 'top-menu'

/**
 * Add WooCommerce Cart Menu Item Shortcode to particular menu
 */
function fishing_woo_cart_but_icon ( $items, $args ) {
       $items .=  '[woo_cart_but]'; // Adding the created Icon via the shortcode already created
       
       return $items;
}

//add_filter('acf/settings/show_admin', '__return_false');




/*** customize login screen */
function esni_custom_login_page() {
    $logo = get_field('site_logo', 'options');
    echo '<style type="text/css">
        h1 a { background-image:url('. $logo .') !important; height: 120px !important; width: 100% !important; margin: 0 auto !important; background-size: contain !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_template_directory_uri().'/assets/images/footer-area-bg.jpg") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before { background-color: rgba(0, 0, 0, 0.9); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
    </style>';
}
add_action('login_head', 'esni_custom_login_page');

function esni_login_logo_url_title() {
 	return 'Fishing Things';
}
add_filter( 'login_headertitle', 'esni_login_logo_url_title' );
function esni_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'esni_login_logo_url' );


// hide admin bar for specific role
function cc_wpse_278096_disable_admin_bar() {
   if (current_user_can('administrator') ) {
     // user can view admin bar
     show_admin_bar(true); 
   } else {
     // hide admin bar
     show_admin_bar(false);
   }
}
add_action('after_setup_theme', 'cc_wpse_278096_disable_admin_bar');


//echo var_dump(get_user_meta(14));


add_filter('user_contactmethods', 'fishing_add_custom_meta_fields');
function fishing_add_custom_meta_fields($methods){
	$methods['naam-van-uw-bedrijf-winkel'] = 'Naam van uw bedrijf/winkel';
    $methods['btm-nummer'] = 'BTW-Nummer';
    $methods['latitude'] = 'Latitude';
    $methods['longitude'] = 'Longitude';
    
    
    return $methods;
}


add_action('admin_head-user-edit.php', 'fishing_setup_user_edit');

function fishing_setup_user_edit() {

    add_filter('gettext', 'fishing_change_profile_labels');
}

function fishing_change_profile_labels($input) {

    if ('Biographical Info' == $input)
        return 'Motivatie / toelichting';

    return $input;
}

remove_action( ‘admin_color_scheme_picker’, ‘admin_color_scheme_picker’ );