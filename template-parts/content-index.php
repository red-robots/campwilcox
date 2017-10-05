<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
	<section class="row-1">
		<div class="col-1">
			<?php $title = get_field("row_1_title");
			$copy = get_field("row_1_copy");
			if($title):?>
				<header><h2><?php echo $title;?></h2></header>
			<?php endif;
			if($copy):?>
				<div class="copy">
					<?php echo $copy;?>
				</div><!--.copy-->
			<?php endif;?>
		</div><!--.col-1-->
		<div class="col-2">
			<?php $image = get_field("row_1_image");
			if($image):?>
				<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
			<?php endif;?>
		</div><!--.col-2-->
	</section><!--.row-1-->
	<?php get_template_part("template-parts/content","boxes");?>
</article><!-- #post-## -->
