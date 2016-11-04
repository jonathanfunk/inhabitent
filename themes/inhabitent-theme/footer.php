<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<div class="contact">
					</div>
					<div class="business">
					</div>
					<div class="footer-logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/inhabitent-logo-text.svg" alt="Inhabitent Logo" />
					</div>
				</div><!--container-->
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
