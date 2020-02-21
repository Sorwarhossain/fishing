<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package fishing
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function fishing_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'fishing_woocommerce_setup' );




add_action('woocommerce_before_main_content', 'fishing_woocommerce_before_main_content');
function fishing_woocommerce_before_main_content(){
	echo '<div class="fishing_shop"><div class="container"><div class="row"><div class="col-md-12">';
}

add_action('woocommerce_after_main_content', 'fishing_woocommerce_after_main_content');
function fishing_woocommerce_after_main_content(){
	echo '</div></div></div></div>';
}


add_filter( 'woocommerce_product_tabs', 'fishing_remove_product_tabs', 99 );
function fishing_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] ); 
    return $tabs;
}



// Replace add to cart button by a linked button to the product in Shop and archives pages
add_filter( 'woocommerce_loop_add_to_cart_link', 'replace_loop_add_to_cart_button', 10, 2 );
function replace_loop_add_to_cart_button( $button, $product  ) {
    // Button text here
    $button_text = __( "View Product", "woocommerce" );

    return '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
}



/* ===============================================
== Customize the edit page =======================
=================================================*/

// Removing grouped and external post type
add_filter( 'product_type_selector', 'fishing_remove_grouped_and_external' );
function fishing_remove_grouped_and_external( $product_types ){
	unset( $product_types['grouped'] );
	unset( $product_types['external'] );
 
	return $product_types;
}


// Removing virtual and downloadable checkbox from product edit page
function my_remove_product_type_options( $options ) {
	if ( isset( $options['virtual'] ) ) {
		unset( $options['virtual'] );
	}
	if ( isset( $options['downloadable'] ) ) {
		unset( $options['downloadable'] );
	}

	return $options;
}
add_filter( 'product_type_options', 'my_remove_product_type_options' );


function fishing_remove_linked_products($tabs){
	
    update_option('testing', $tabs);

    unset($tabs['linked_product']);
    unset($tabs['advanced']);
    unset($tabs['marketplace-suggestions']);

    return($tabs);
}
add_filter('woocommerce_product_data_tabs', 'fishing_remove_linked_products', 99, 1);