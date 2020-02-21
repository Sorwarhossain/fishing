<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fishing
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section class="error-404 not-found text-center">
						<header class="page-header">
							<h1 class="hero">404</h1>
							<h3 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'topgun-paintball' ); ?></h3>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'topgun-paintball' ); ?></p>

							<a class="btn my_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Back To Homepage', 'topgun-paintball'); ?></a>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
