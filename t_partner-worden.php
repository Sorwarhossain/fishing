<?php
/*
Template Name: Partner Worden
*/
get_header();
$page_id = get_queried_object_id();
?>

        
        <!-- Page Content -->
        <main class="page-content">

<?php
if(get_field('enable_partner_registration', $page_id)) :

$partner_registration_title = get_field('partner_registration_title', $page_id) ? get_field('partner_registration_title', $page_id) : '';
$content_partner_registration = get_field('content_partner_registration', $page_id) ? get_field('content_partner_registration', $page_id) : '';
$partner_registration_badge = get_field('partner_registration_badge', $page_id) ? get_field('partner_registration_badge', $page_id) : '';
$partner_registration_form_title = get_field('partner_registration_form_title', $page_id) ? get_field('partner_registration_form_title', $page_id) : '';
$partner_registration_form_shortcode = get_field('partner_registration_form_shortcode', $page_id) ? get_field('partner_registration_form_shortcode', $page_id) : '';
?>
<!-- Login Register Area -->
<div class="tm-section tm-login-register-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <?php
                if(!empty($partner_registration_title)){
                    echo sprintf('<h4>%s</h4>', $partner_registration_title);
                }
                echo $content_partner_registration . "<br><br>";

                if(!empty($partner_registration_badge)){
                    echo sprintf('<div class="single-widget widget-help"><h6 class="widget-title">%s</h6></div>', $partner_registration_badge);
                }
                ?>
                    
                <!-- Single Widget -->

                
                <!--// Single Widget -->
                    
            </div>

            <div class="col-lg-6">

                <?php
                if(!empty($partner_registration_form_title)){
                    echo sprintf('<h4>%s</h4>', $partner_registration_form_title);
                }
                if(!empty($partner_registration_form_shortcode)){
                    if(!is_user_logged_in()){
                        echo do_shortcode( $partner_registration_form_shortcode );
                    } else {
                        echo '<p>You have already logged in!</p>';
                    }
                    
                }
                ?>

            </div>

        </div>
    </div>
</div>
<!--// Login Register Area -->
<?php endif; ?>
			
<?php
if(get_field('enable_partner_login', $page_id)) :

$partner_login_side_image = get_field('partner_login_side_image', $page_id) ? get_field('partner_login_side_image', $page_id) : '';
$partner_login_title = get_field('partner_login_title', $page_id) ? get_field('partner_login_title', $page_id) : '';
$partner_login_subtitle = get_field('partner_login_subtitle', $page_id) ? get_field('partner_login_subtitle', $page_id) : '';
$partner_login_form_shortcode = get_field('partner_login_form_shortcode', $page_id) ? get_field('partner_login_form_shortcode', $page_id) : '';
?>			
<!-- Mission Area -->
<section class="tm-section tm-mission-area tm-padding-section bg-pattern">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="tm-mission-video">
                <?php 
                if(!empty($partner_login_side_image)){
                    echo sprintf('<img src="%s" alt="mission image">', $partner_login_side_image);
                }
                ?>
                    <br /><br />
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    if(!empty($partner_login_title)){
                        echo sprintf('<h4>%s</h4>', $partner_login_title);
                    }
                    if(!empty($partner_login_subtitle)){
                        echo sprintf('<h5>%s</h5>', $partner_login_subtitle);
                    }
                    echo do_shortcode( $partner_login_form_shortcode );
                ?>
            </div>
        </div>
    </div>
</section>
<!--// Mission Area -->
<?php endif; ?>



        </main>
        <!--// Page Content -->
 

<?php
    get_footer();
?>