<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article class="error-404 not-found" style="background-image:url(<?php echo get_template_directory_uri()."/images/large-clock.png";?>);">
				<div class="wrapper cap clear-bottom">
					<section class="col-1">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
						</header><!-- .page-header -->
						<div class="copy">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'acstarter' ); ?></p>
							<?php wp_nav_menu( array( 'theme_location' => 'sitemap') ); ?>
						</div><!--.copy-->
					</section><!--.col-1-->
					<?php get_template_part("template-parts/content","boxes");?>
				</div><!--.wrapper-->
			</article><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
