<?php
/*
Template Name: Partners
*/
get_header();
$page_id = get_queried_object_id();
?>

        
<!-- Page Content -->
<main class="page-content">

    <!-- Service Details Area -->
    <div class="tm-section tm-service-details-area tm-padding-section bg-white">
        <div class="container">
            <div class="row">

                <?php
                
                $partners_content = get_field('partners_content', $page_id);

                ?>
                <div class="col-lg-8 col-12 order-1 order-lg-2">
                    <div class="tm-service-details clearfix">
                    	
                    <?php
                    	echo $partners_content;
                    ?>
                    </div>
                </div>
            

                <div class="col-lg-4 col-12 order-2 order-lg-1">
                <?php
                $partners_list_title = get_field('partners_list_title', $page_id);

                $partners_list = get_field('partners_list', $page_id);

                $become_partner_button = get_field('become_partner_button', $page_id);          

                ?>

                    <div class="widgets widgets-leftsidebar">
                        <!-- Single Widget -->
                        <div class="single-widget widget-services">
                        <?php
                            if(!empty($partners_list_title)){
                                echo sprintf('<h6 class="widget-title">%s</h6>', $partners_list_title);
                            }
                            $args = array(
                                'role'    => 'customer',
                            );
                            $users = get_users( $args );
                            
                            if(!empty($users)){
                                echo '<ul>';
                                foreach($users as $user){
                                    echo sprintf('<li>%s</li>', $user->display_name);
                                }
                                echo '</ul>';
                            }
                        ?>                     
                        </div>
                        <!--// Single Widget -->


                        <!-- Single Widget -->
                        <div class="single-widget widget-help">
                        <?php
                            if(!empty($become_partner_button['title'])){
                                echo sprintf('<h6 class="widget-title">%s</h6>', $become_partner_button['title']);
                            }
                            if(!empty($become_partner_button['label'])){
                                echo sprintf('<h3><a href="%s">%s</a></h3>', $become_partner_button['link'], $become_partner_button['title']);
                            }
                        ?>
                            

                            
                        </div>
                        <!--// Single Widget -->

                    </div>
                </div>



            </div>
        </div>
    </div>
    <!--// Service Details Area -->

<?php
if(get_field('enable_partners_map', $page_id)) :

$partners_map_title = get_field('partners_map_title', $page_id);

$partners_map_subtitle = get_field('partners_map_subtitle', $page_id);

$google_map_api_key = get_field('google_map_api_key', $page_id);

$google_map_zoom_level = get_field('google_map_zoom_level', $page_id);

$map_center_position = get_field('map_center_position', $page_id);

$partner_locations = get_field('partner_locations', $page_id);

?>

    <!-- Partners Map Area -->
    <div class="tm-newsletter-area tm-section tm-padding-section bg-pattern">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-12">
                <?php
                    if(!empty($partners_map_title)){
                        echo sprintf('<h4 class="tm-newsletter-title">%s</h4>', $partners_map_title);
                    }
                ?>  
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                <?php
                    if(!empty($partners_map_subtitle)){
                        echo sprintf('<div class="tm-newsletter-call"><p>%s</p></div>', $partners_map_subtitle);
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <div id="google-map" class="google-map"></div>
    <!--// Partners Map Area -->

<!-- JS FILES HERE -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_api_key; ?>"></script>
<script>
// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);
function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: <?php echo $google_map_zoom_level; ?>,

        scrollwheel: true,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(<?php echo $map_center_position['latitude']; ?>, <?php echo $map_center_position['longitude']; ?>), // België
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('google-map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

<?php

$args = array(
    'role'    => 'customer',
);
$users = get_users( $args );

if(!empty($users)) :
    foreach($users as $user) :
    
    $display_name = $user->display_name;
    $latitude = get_user_meta($user->ID, 'latitude', true);
    $longitude = get_user_meta($user->ID, 'longitude', true);
    
    
    if(!empty($latitude) && !empty($longitude)) :
?>
    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
        map: map,
        title: '<?php echo $display_name; ?>',
        icon: '<?php echo $partner_location['pin_icon']; ?>'
    });
    <?php  
    endif;
    ?>
    
    
<?php endforeach; endif; ?>
}
</script>
<?php endif; ?>


</main>
<!--// Page Content -->
 

<?php
    get_footer();
?>