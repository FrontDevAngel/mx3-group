<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<?php get_template_part( 'template-parts/svg-icon-symbols' ); ?>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="<?php echo prefix_theme_class("_header-footer-group") ?>">
			<nav class="navbar container-fluid navbar-expand py-3 <?php echo prefix_theme_class("_navbar") ?>">
				<div class="container">
					<a class="navbar-brand" href="#">
						<svg><use xlink:href="#logo" /></svg>
					</a>

					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<?php
							if ( has_nav_menu( 'primary' ) ) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
										'items_wrap' => '<ul class="navbar-nav d-lg-flex d-none ' . prefix_theme_class("_navbar-nav") . '">%3$s</ul>'
									)
								);

							}
						?>

						<button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" class="btn d-lg-none <?php echo prefix_theme_class("_mobile-btn") ?>"><?php twentytwenty_the_theme_svg( 'ellipsis' ); ?></button>
					</div>
				</div><!-- .header-inner -->
			</nav>
		</header><!-- #site-header -->

		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
			<div class="offcanvas-header">
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div id="navbarNavAltMarkup">
					<?php
						if ( has_nav_menu( 'primary' ) ) {

							wp_nav_menu(
								array(
									'container'  => '',
									'items_wrap' => '%3$s',
									'theme_location' => 'primary',
									'items_wrap' => '<ul class="navbar-nav navbar-nav--mobile ' . prefix_theme_class("_navbar-nav--mobile") . '">%3$s</ul>'
								)
							);

						}
					?>
				</div>
			</div>
		</div>

		<?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );
