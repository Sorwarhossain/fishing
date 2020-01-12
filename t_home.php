<?php
/*
Template Name: Homepage
*/
// Getting the header.php
get_header();
?>


        <!-- Heroslider Area -->
        <div class="tm-heroslider-area bg-grey">

            <div class="tm-heroslider-slider">

                <!-- Heroslider Item -->
                <div class="tm-heroslider">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 order-2 order-md-1">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
									    <p>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logobig.png" alt="logo"><br /><br />
										Welkom op onze website.
										</p>
                                        <a href="contact.html" class="tm-button">Contacteer ons</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 order-1 order-md-2">
                                <div class="tm-heroslider-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroslider-image-1.png" alt="heroslider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

                <!-- Heroslider Item -->
                <div class="tm-heroslider">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 order-2 order-md-1">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                        <h1>Alles voor de sportvisser</h1>
                                        <p>Wij produceren Dobbers en Soft balls aan de hoogte kwaliteit.</p>
                                        <a href="about.html" class="tm-button">Meer info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 order-1 order-md-2">
                                <div class="tm-heroslider-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroslider-image-2.png" alt="heroslider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

                <!-- Heroslider Item -->
                <div class="tm-heroslider">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 order-2 order-md-1">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                        <h1>Ontdek onze partners</h1>
                                        <p>Of beter nog: word er zelf één!
                                         Wij verkopen enkel aan winkels en bedrijven.<br />
										 Dus particulieren en sportvissers, haast jullie naar één van onze partners en ondervind vandaag nog onze kwaliteit.
										 </p>
                                        <a href="partners.html" class="tm-button">Onze partners</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 order-1 order-md-2">
                                <div class="tm-heroslider-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroslider-image-3.png" alt="heroslider image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

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

        <!-- Page Content -->
        <main class="page-content">


            <!-- About Area -->
            <section id="tm-about-area" class="tm-section tm-about-area tm-padding-section-bottom bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12 order-2 order-lg-1">
                            <div class="tm-about-content tm-scrollanim">
								<br /><br />
                                <h6>About Fishing Things</h6>
                                <h3>Kwaliteit is onze reclame</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a convallis nisl, at
                                    aliquam dolor. Morbi in iaculis nunc. Nulla eu mi at velit imperdiet sollicitudin
                                    sed vel risus. It is a long established fact that a reader will be distracted.</p>
                                <p>Cras a convallis nisl, at aliquam dolor. Morbi in iaculis nunc. Nulla eumiat velit
                                    imperdiet sollicitudin sed vel risus. </p>
                                <ul class="stylish-list-color">
                                    <li><i class="ion-android-checkmark-circle"></i> One of the reasons why people use
                                        Lorem Ipsum is because it adjusts very well in
                                        <i class="ion-android-checkmark-circle"></i> every ocasion.</li>
                                    <li><i class="ion-android-checkmark-circle"></i> Quisque eleifend lorem ipsum, et
                                        tempus nulla convallis nec.</li>
                                    <li><i class="ion-android-checkmark-circle"></i> Suspendisse tempus consequat odio,
                                        quis tempus augue vulputate at.</li>
                                </ul>
                                <a href="about.html" class="tm-button">Meer info</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 col-12 order-1 order-lg-2">
                            <div class="tm-about-image tm-scrollanim">
								<br /><br />
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-image.png" alt="about image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About Area -->

            <!-- Service Area -->
            <div id="tm-service-area" class="tm-section tm-service-area tm-padding-section-bottom bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h2>Onze Producten</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-divider-img.png" alt="section divider">
                                </span>
                                <p>Lorem Ipsum is a latin placeholder text commonly used to fulfill certain areas of
                                    your website or app where content is not the main concern of the developer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30-reverse">

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center tm-scrollanim">
                                <div class="tm-service-inner">
                                    <div class="tm-service-frontside" data-bgimage="<?php echo get_template_directory_uri(); ?>/assets/images/service-image-1.jpg">
                                        <h6>Dobbers</h6>
                                    </div>
                                    <div class="tm-service-backside">
                                        <h6>Dobbers</h6>
                                        <p>Kwaliteitsdobbers</p>
                                        <a href="producten.html" class="tm-readmore">Lees meer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center tm-scrollanim">
                                <div class="tm-service-inner">
                                    <div class="tm-service-frontside" data-bgimage="<?php echo get_template_directory_uri(); ?>/assets/images/service-image-2.jpg">
                                        <h6>Soft Balls</h6>
                                    </div>
                                    <div class="tm-service-backside">
                                        <h6>Soft Balls</h6>
                                        <p>Soft Balls van de hoogste kwaliteit.</p>
                                        <a href="producten.html" class="tm-readmore">Lees meer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center tm-scrollanim">
                                <div class="tm-service-inner">
                                    <div class="tm-service-frontside" data-bgimage="<?php echo get_template_directory_uri(); ?>/assets/images/service-image-3.jpg">
                                        <h6>Partners</h6>
                                    </div>
                                    <div class="tm-service-backside">
                                        <h6>Partners</h6>
                                        <p>Wij leveren enkel aan winkels en bedrijven. Bekijk onze partners om onze producten te bestellen.</p>
                                        <a href="partners.html" class="tm-readmore">Bekijk onze partners</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                    </div>
                </div>
            </div>
            <!--// Service Area -->

        </main>
        <!--// Page Content -->




<?php
get_footer();
?>