<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fishing
 */

?>
        <!-- Footer -->
        <div class="tm-footer">
            <div class="tm-footer-toparea tm-padding-section" data-bgimage="<?php echo get_template_directory_uri(); ?>/assets/images/footer-area-bg.jpg"
                data-black-overlay="9">
                <div class="container">
                    <div class="widgets widgets-footer row">

                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget widget-info">
                                <a class="widget-info-logo" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png"
                                        alt="white logo"></a>
                                <p><b>Fishing Things</b><br />
								<i>Alles voor de sportvisser</i></p>
                                <ul>
                                    <li><a href="https://www.facebook.com/dobbersbelgie/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget widget-contact">
                                <h6 class="widget-title">Contact</h6>
                                <ul>
                                    <li>
                                        <i class="ion-ios-telephone-outline"></i>
                                        <p>+32 497 64 58 76</p>
                                    </li>
                                    <li>
                                        <i class="ion-ios-email-outline"></i>
                                        <p><a href="mailto:contact@fishingthings.be">contact@fishingthings.be</a></p>
                                    </li>
                                    <li>
                                        <i class="ion-ios-location-outline"></i>
                                        <p>Essen, België</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget widget-twitterfeed">
                                <h6 class="widget-title">Facebook</h6>
								<div class="fb-page" data-href="https://www.facebook.com/dobbersbelgie/" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/dobbersbelgie/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dobbersbelgie/">Fishing things</a></blockquote></div>
                            </div>
                        </div>
                        <!--// Single Widget -->

                    </div>
                </div>
            </div>

            <div class="tm-footer-bottomarea bg-dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <p class="tm-footer-copyright">Website By <a href="mailto:williamvandenbuys@gmail.com" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#fff'">WilliamVdB</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer -->

        <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

	</div>
	
	<?php wp_footer(); ?>
</body>
</html>