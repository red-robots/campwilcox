<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row-1">
			<img src="<?php echo get_template_directory_uri()."/images/small-clock.png";?>" alt="clock">
		</div><!--.row-1-->
		<div class="row-2">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div><!--.row-2-->
		<?php $disclaimer_row_1 = get_field("disclaimer_row_1","option");
		$disclaimer_col_1 = get_field("disclaimer_col_1","option");
		$disclaimer_col_2 = get_field("disclaimer_col_2","option");
		$disclaimer_col_3 = get_field("disclaimer_col_3","option");?>
		<?php if($disclaimer_row_1||$disclaimer_col_1||$disclaimer_col_2||$disclaimer_col_3):?>
			<div class="row-3">
				<?php if($disclaimer_row_1):?>
					<div class="row-1">
						<?php echo $disclaimer_row_1;?>
					</div><!--.row-1-->
				<?php endif;
				if($disclaimer_col_1||$disclaimer_col_2||$disclaimer_col_3):?>
					<div class="row-2">
						<?php if($disclaimer_col_1):?>
							<div class="col-1">
								<?php echo $disclaimer_col_1;?>
							</div><!--.col-1-->
						<?php endif;
						if($disclaimer_col_2):?>
							<div class="col-2">
								<?php echo $disclaimer_col_2;?>
							</div><!--.col-2-->
						<?php endif;
						if($disclaimer_col_3):?>
							<div class="col-3">
								<?php echo $disclaimer_col_3;?>
							</div><!--.col-3-->
						<?php endif;?>
					</div><!--.row-2-->
				<?php endif;?>
			</div><!--.row-3-->
		<?php endif;?>
		<?php $copyright = get_field("copyright","option");
		if($copyright):?>
			<div class="row-4">
				<?php echo $copyright;?>
			</div><!--.row-4-->
		<?php endif;?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
