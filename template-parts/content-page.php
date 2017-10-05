<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url(<?php echo get_template_directory_uri()."/images/large-clock.png";?>);">
	<section class="col-1">
		<header><h1><?php the_title();?></h1></header>
		<div class="copy">
			<?php the_content();?>
		</div><!--.copy-->
	</section><!--.col-1-->
	<?php get_template_part("template-parts/content","boxes");?>
</article><!-- #post-## -->
