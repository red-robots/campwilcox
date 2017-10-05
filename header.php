<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			
			<?php if(is_home()) { ?>
	            <h1 class="logo col-1">
	            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo col-1">
	            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
	            </div>
	        <?php } ?>

			<nav id="site-navigation" class="main-navigation col-2" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<div class="numbers col-3">
				<?php $phone_1 = get_field("phone_1","option");
				$phone_1_pre = get_field("phone_1_pre","option");
				$phone_2 = get_field("phone_2","option");
				$phone_2_pre = get_field("phone_2_pre","option");
				$fax_pre = get_field("fax_pre","option");
				$fax = get_field("fax","option");
				if($phone_1&&$phone_1_pre):?>
					<div class="phone-1">
						<?php echo $phone_1_pre.$phone_1;?>
					</div><!--.fax-->
				<?php endif;
				if($phone_2&&$phone_2_pre):?>
					<div class="phone-2">
						<?php echo $phone_2_pre.$phone_2;?>
					</div><!--.fax-->
				<?php endif;
				if($fax&&$fax_pre):?>
					<div class="fax">
						<?php echo $fax_pre.$fax;?>
					</div><!--.fax-->
				<?php endif;?>
			</div><!--.numbers-->
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
