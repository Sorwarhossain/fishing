<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fishing
 */

get_header();
?>

<!-- Page Content -->
<main class="page-content">

    <!-- Contact Area -->
    <div class="tm-contact-area tm-section tm-padding-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<?php
						while(have_posts()){
							the_post();
							the_content();
						}
					?>
				</div>
            </div>
        </div>
    </div>
    <!--// Contact Area -->

</main>
<!--// Page Content -->

<?php get_footer(); ?>