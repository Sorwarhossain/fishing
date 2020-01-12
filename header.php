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

    <!-- Preloader -->
	<div class="tm-preloader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tm-preloader-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logoloader.png" alt="logo">
                    </div>
                    <span class="tm-preloader-progress"></span>
                </div>
            </div>
        </div>
    </div>
    <!--// Preloader -->


    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <div class="tm-header tm-header-sticky">

            <div class="tm-header-toparea">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-12">
                            <ul class="tm-header-info">
                                <li><i class="ion-ios-telephone"></i>+32 497 64 58 76</li>
                                <li><a href="mailto:contact@fishingthings.be" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#fff'"><i class="ion-android-mail"></i>contact@fishingthings.be</a></l</ul>
                        </div>
                        <div class="col-lg-4 col-12">
                            <ul class="tm-header-icons">
                                <li><a href="login-register.html" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#fff'">Log In / Partner worden</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tm-header-bottomarea">
                <div class="container">
                    <div class="tm-header-inner">
                        <a href="index.html" class="tm-header-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="malic">
                        </a>
                        <nav class="tm-header-nav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Over ons</a></li>
                                <li class="tm-header-nav-dropdown"><a href="#">Producten</a>
                                    <ul>
                                        <li><a href="producten.html">Dobbers</a></li>
                                        <li><a href="producten.html">Soft Balls</a></li>
                                    </ul>
                                </li>
                                <li><a href="partners.html">Partners</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="tm-mobilenav"></div>
                    </div>
                </div>
            </div>

        </div>
        <!--// Header -->
