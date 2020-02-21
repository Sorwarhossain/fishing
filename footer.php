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


            <?php get_sidebar('footer'); ?>

            <div class="tm-footer-bottomarea bg-dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <?php the_field('developer_credits', 'options'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--// Footer -->

        <?php 
        if(get_field( 'enable_back_to_top', 'options' )) : ?>
            <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>
        <?php endif; ?>

	</div>
	
	<?php wp_footer(); ?>
</body>
</html>