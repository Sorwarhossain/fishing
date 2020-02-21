<?php
/*
Template Name: Contact
*/
get_header();
$page_id = get_queried_object_id();
?>

        
<!-- Page Content -->
<main class="page-content">

    <!-- Contact Area -->
    <div class="tm-contact-area tm-section tm-padding-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                <?php
                if(get_field('enable_contact_form', $page_id)) :

                $contact_form_title = get_field('contact_form_title', $page_id);
                $contact_form_shortcode = get_field('contact_form_shortcode', $page_id);

                ?>
                    <div class="tm-contact">
                        <?php
                        if(!empty($contact_form_title)){
                            echo sprintf('<h2>%s</h2>', $contact_form_title);
                        }
                        if(!empty($contact_form_shortcode)){
                            echo do_shortcode( $contact_form_shortcode );
                        }
                        ?>
                        
                        
                    </div>
                <?php endif; ?>


                </div>
                <div class="col-lg-4">
                    <div class="tm-contact-blocks mt-30-reverse">

                    
                    <?php
                    if(get_field('enable_contact_info', $page_id)) :

                    $contact_info_title = get_field('contact_info_title', $page_id);
                    $contact_info_phone_number = get_field('contact_info_phone_number', $page_id);
                    $contact_info_email = get_field('contact_info_email', $page_id);
                    ?>
                        <div class="tm-contact-block text-center mt-30">
                            <i class="ion-ios-telephone-outline"></i>
                            <?php
                            if(!empty($contact_info_title)){
                                echo sprintf('<h6>%s</h6>', $contact_info_title);
                            }
                            if(!empty($contact_info_phone_number)){
                                echo sprintf('<p>Telefoon: %s</p>', $contact_info_phone_number);
                            }
                            if(!empty($contact_info_email)){
                                echo sprintf('<p>Email: <a href="mailto:%s">%s</a></p>', $contact_info_email, $contact_info_email);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php
                    if(get_field('enable_location_info', $page_id)) :

                    $location_info_title = get_field('location_info_title', $page_id);
                    $contact_info_address = get_field('contact_info_address', $page_id);
                    ?>
                        <div class="tm-contact-block text-center mt-30">
                            <i class="ion-ios-location-outline"></i>
                        <?php
                            if(!empty($location_info_title)){
                                echo sprintf('<h6>%s</h6>', $location_info_title);
                            }
                            if(!empty($contact_info_address)){
                                echo sprintf('<p>%s</p>', $contact_info_address);
                            }
                        ?>
                            
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Contact Area -->

</main>
<!--// Page Content -->

        

<?php
    get_footer();
?>