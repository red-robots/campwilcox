<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-bio"); ?> style="background-image:url(<?php echo get_template_directory_uri()."/images/large-clock.png";?>);">
	<div class="wrapper cap">
		<header><h1><?php the_title();?></h1></header>
		<?php $args = array(
			"post_type"=>'team',
			'posts_per_page'=>-1,
		);
		$query = new WP_Query($args);
		if($query->have_posts()):?>
			<div class="wrapper">
				<section class="bio" id="container">
					<?php while($query->have_posts()): $query->the_post();?>
						<div class="item clear-bottom">
							<?php $image = get_field("image");
							$prof_title = get_field("prof_title");?>
							<div class="col-1">
								<?php if($image):?>
									<img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
								<?php endif;?>
							</div><!--.col-1-->
							<div class="col-2">
								<header>
									<h2><?php the_title();?></h2>
									<?php if($prof_title):?>
										<div class="title">
											<?php echo $prof_title;?>
										</div><!--.title-->
									<?php endif;?>
								</header>
								<?php if(get_the_content()):?>
									<div class="copy">
										<?php the_content();?>
									</div><!--.copy-->
								<?php endif;?>
							</div><!--.col-2-->
						</div><!--.item-->
					<?php endwhile;?>
				</section><!--.bio-->
			</div><!--.wrapper-->
		<?php endif;?>
	</div><!--.wrapper-->
</article><!-- #post-## -->
