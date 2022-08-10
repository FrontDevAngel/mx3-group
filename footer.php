<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="footer-content" class="container-fluid py-5 px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
				<div class="container <?php echo prefix_theme_class("_footer-section-wrapper") ?>">
					<div class="<?php echo prefix_theme_class("_footer-section") ?> ">

						<p class="text-center lead">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p>
					</div>
				</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
