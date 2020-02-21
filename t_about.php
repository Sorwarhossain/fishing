<?php
/*
Template Name: About
*/
get_header();
$page_id = get_queried_object_id();
?>

        


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
        if(get_field('enable_company_history', $page_id)) :

        $company_title = get_field('company_title', $page_id);

        $company_description = get_field('company_description', $page_id);

        $feature_tabs = get_field('company_feature_tabs', $page_id);

        $left_image = get_field('company_left_image', $page_id);

        ?>
            <!-- Mission Area -->
            <section class="tm-section tm-mission-area tm-padding-section bg-pattern">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tm-mission-video">
                            <?php
                                if(!empty($left_image)){
                                    echo sprintf('<img src="%s" alt="mission image">', $left_image);
                                }
                            ?>
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-mission-content">
                            <?php
                                if(!empty($company_title)){
                                    echo sprintf('<h4>%s</h4>', $company_title);
                                }
                                if(!empty($company_description)){
                                    echo sprintf('<p>%s</p>', $company_description);
                                }
                            ?>


                            <?php  
                            if(!empty($feature_tabs)) :
                            $counter = 1;
                            ?>
                                <div id="accordion-1" class="tm-accordion">
                                    <?php  
                                        foreach($feature_tabs as $feature_tab):
                                            $show_con = ($counter == 1) ? 'show' : '';
                                    ?>
                                        <div class="card">
                                            <div class="card-header" id="accordion-1-heading<?php echo $counter; ?>">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#accordion-1-collapse<?php echo $counter; ?>" aria-expanded="true"
                                                        aria-controls="accordion-1-collapse<?php echo $counter; ?>">
                                                        <?php echo $feature_tab['title']; ?>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="accordion-1-collapse<?php echo $counter; ?>" class="collapse <?php echo $show_con; ?>"
                                                aria-labelledby="accordion-1-heading<?php echo $counter; ?>" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    <?php echo $feature_tab['details']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $counter++; endforeach; ?>
                                </div>
                            <?php endif; ?>
                            </div>
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