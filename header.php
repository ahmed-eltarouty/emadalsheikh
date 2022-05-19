<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emad-alsheikh
 */

?>
<!doctype html>
<html dir="rtl" lang="ar">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
			<nav id="navbar" class="navbar">
					<?php
							wp_nav_menu(
								array(
									'theme_location' => 'Primary',
									'menu_class'     => '',
									'container'      => false,
									'depth'          => 2,
									'walker'         => new wp_bootstrap_navwalker()
								)
							);
						?>
        		<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->
			<!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
			<?php  echo get_custom_logo(); ?>
		</div>		
	</header><!-- #masthead -->
