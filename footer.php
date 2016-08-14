<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Graphy
 */
?>

	</div>
	<!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php get_sidebar( 'footer' ); ?>

		<div class="site-bottom">

			<div class="site-info">

				<form action="<?php bloginfo('url'); ?>/newsletter/" class="site-info--item">
					<input type="submit" value="Newsletter abonnieren" />
				</form>

				<div class="social-container site-info--item">
					<a href="https://www.instagram.com/immerguteswetter/" target="instagram" tite="Folge und auf Instagram">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram.svg" alt="Instagram icon" class="social-logo">
					</a>

					<a href="https://twitter.com/immer_sonne" target="twitter" title="Folge uns auf Twitter">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.svg" alt="Twitter icon" class="social-logo">
					</a>

					<a href="mailto:hi@immerguteswetter.de?subject=Hi" target="email" title="Schreib uns eine E-Mail">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.svg" alt="Email icon" class="social-logo">
					</a>

					<a href="<?php bloginfo('url'); ?>/feed/" target="rss" title="Den RSS Feed abonnieren um immer auf dem Laufenden zu bleiben.">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.svg" alt="RSS icon" class="social-logo">
					</a>					
				</div>

				<div class="site-copyright site-info--item>
					&copy;
					<?php echo date( 'Y' ); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<!-- .site-copyright -->
			</div>
			<!-- .site-info -->

		</div>
		<!-- .site-bottom -->

	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>

	</body>

	</html>