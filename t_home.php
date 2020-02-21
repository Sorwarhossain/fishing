<?php
/*
Template Name: Homepage
*/
// Getting the header.php
get_header();
$page_id = get_queried_object_id();
?>

<?php
if(get_field('enable_home_slider', $page_id)) :

$slider_items = get_field('home_slider_items', $page_id);

if(!empty($slider_items)):
?>
        <!-- Heroslider Area -->
        <div class="tm-heroslider-area bg-grey">

            <div class="tm-heroslider-slider">

            <?php  
                foreach($slider_items as $slider_item) :
                $slide_content = $slider_item['slider_content'];
            ?>
                <!-- Heroslider Item -->
                <div class="tm-heroslider">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 order-2 order-md-1">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                    <?php  
                                    if(!empty($slide_content['logo'])){
                                        echo sprintf('<img src="%s" alt="logo"><br /><br />', $slide_content['logo']);
                                    }
                                    if(!empty($slide_content['title'])){
                                        echo sprintf('<h1>%s</h1>', $slide_content['title']);
                                    }
                                    if(!empty($slide_content['content'])){
                                        echo sprintf('<div class="slide_content">%s</div>', $slide_content['content']);
                                    }

                                    $slide_button = $slide_content['button'];

                                    $button_link = !empty($slide_button['link']) ? $slide_button['link'] : '#';

                                    if( !empty($slide_button['label']) ){
                                        echo sprintf('<a href="%s" class="tm-button">%s</a>', $button_link, $slide_button['label']);
                                    }
                                        
                                    ?>
 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 order-1 order-md-2">
                            <?php
                            if(!empty($slider_item['slider_image'])) :
                            ?>
                                <div class="tm-heroslider-image">
                                    <img src="<?php echo $slider_item['slider_image']; ?>" alt="heroslider image">
                                </div>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->
            <?php endforeach; ?>
 

            </div>

            <div class="tm-heroslider-pagination">
                <svg viewBox="0 0 33.83098862 33.83098862" xmlns="http://www.w3.org/2000/svg">
                    <circle class="radialbg" cx="16.9" cy="16.9" r="15.9"></circle>
                    <circle class="radialactive" cx="16.9" cy="16.9" r="15.9" stroke-dasharray="33.333333333333336 100">
                    </circle>
                </svg>
                <div class="slides-numbers">
                    <span class="active">1</span>/<span class="total"></span>
                </div>
            </div>

        </div>
        <!--// Heroslider Area -->
<?php endif; endif; ?>



        <!-- Page Content -->
        <main class="page-content">


        <?php
if(get_field('enable_home_about', $page_id)) :

$about_title = get_field('about_title', $page_id);
$about_subtitle = get_field('about_subtitle', $page_id);
$about_content = get_field('about_content', $page_id);
$about_info_list = get_field('about_info_list', $page_id);
$about_button = get_field('about_button', $page_id);
$about_right_image = get_field('about_right_image', $page_id);
?>
            <!-- About Area -->
            <section id="tm-about-area" class="tm-section tm-about-area tm-padding-section-bottom bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12 order-2 order-lg-1">
                            <div class="tm-about-content tm-scrollanim">
                                <br /><br />
                                <?php
                                    if(!empty($about_title)){
                                        echo sprintf('<h6>%s</h6>', $about_title);
                                    }
                                    if(!empty($about_subtitle)){
                                        echo sprintf('<h3>%s</h3>', $about_subtitle);
                                    }
                                    echo $about_content;

                                    if(!empty($about_info_list)){
                                        echo '<ul class="stylish-list-color">';
                                        foreach($about_info_list as $list_item){
                                            echo sprintf('<li><i class="ion-android-checkmark-circle"></i> %s', $list_item['info_item']);
                                        }
                                        echo '</ul>';
                                    }

                                    if(!empty($about_button['label'])){
                                        echo sprintf('<a href="%s" class="tm-button">%s</a>', $about_button['link'], $about_button['label']);
                                    }

                                ?>    
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-12 order-1 order-lg-2">
                            <div class="tm-about-image tm-scrollanim">
                                <br/><br/>
                            <?php
                                if(!empty($about_right_image)){
                                    echo sprintf('<img src="%s" alt="About Image">', $about_right_image);
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About Area -->
<?php endif; ?>


<?php
if(get_field('enable_home_products', $page_id)) :

$products_title = get_field('products_title', $page_id);
$products_subtitle = get_field('products_subtitle', $page_id);
$product_boxes = get_field('product_box', $page_id);

?>
            <!-- Service Area -->
            <div id="tm-service-area" class="tm-section tm-service-area tm-padding-section-bottom bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                            <div class="tm-sectiontitle text-center">

                            <?php
                                if(!empty($products_title)){
                                    echo sprintf('<h2>%s</h2>', $products_title);
                                }
                            ?>
                                <span class="tm-sectiontitle-divider">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-divider-img.png" alt="section divider">
                                </span>
                            <?php
                                if(!empty($products_subtitle)){
                                    echo sprintf('<p>%s</p>', $products_subtitle);
                                }
                            ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30-reverse">

                    <?php
                        if(!empty($product_boxes)){
                            foreach($product_boxes as $product_box){ 
                                $background_image = !empty($product_box['background_image']) ? $product_box['background_image'] : '';
                                $product_box_title = !empty($product_box['title']) ? $product_box['title'] : '';
                                $product_box_subtitle = !empty($product_box['subtitle']) ? $product_box['subtitle'] : '';

                                $product_box_button = $product_box['button'];
                            ?>

                            <div class="col-lg-4 col-md-6 col-12 mt-30">
                                <div class="tm-service text-center tm-scrollanim">
                                    <div class="tm-service-inner">
                                        <div class="tm-service-frontside" data-bgimage="<?php echo $background_image; ?>">
                                            <?php
                                                echo '<h6>'. $product_box_title .'</h6>';
                                            ?>
                                        </div>
                                        <div class="tm-service-backside">
                                            <?php
                                                echo '<h6>'. $product_box_title .'</h6>';
                                                echo '<p>'. $product_box_subtitle .'</p>';
                                                if(!empty($product_box_button['label'])){
                                                    echo sprintf('<a href="%s" class="tm-readmore">%s</a>', $product_box_button['link'], $product_box_button['label']);
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }
                        }
                    ?>

                    </div>
                </div>
            </div>
            <!--// Service Area -->
<?php endif; ?>

        </main>
        <!--// Page Content -->




<?php
get_footer();
?>