<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fishing
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- endinject -->
	<div id="fb-root"></div>

	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v4.0"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php echo get_fishing_preloader(); ?>
    

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <div class="tm-header tm-header-sticky">

            <?php echo get_fishing_topbar(); ?>

            <div class="tm-header-bottomarea">
                <div class="container">
                    <div class="tm-header-inner">

                        <?php echo get_fishing_logo(); ?>

                        <?php
                        wp_nav_menu( array(
                            'container'         => "nav", 
                            'container_class'   => "tm-header-nav", 
                            'theme_location' => 'main-menu'
                        ) );
                        ?>

                        <div class="tm-mobilenav"></div>
						<?php if(is_user_logged_in()): ?>
						<div class="cart_items"><?php echo do_shortcode("[woo_cart_but]"); ?></div>
                        <?php endif; ?>
                    </div>
					
                </div>
            </div>

        </div>
        <!--// Header -->

    <?php
    $page_id = get_queried_object_id();
    if(get_field('enable_page_banner', $page_id)) :
    
    $page_banner_bg = get_field('banner_image', $page_id) ? get_field('banner_image', $page_id) : '';

    ?>
        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="<?php echo $page_banner_bg; ?>"
            data-white-overlay="2">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2><?php the_field('title', $page_id); ?></h2>
                    <ul>
                        <li><?php the_field('subtitle', $page_id); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->
    <?php endif; ?>