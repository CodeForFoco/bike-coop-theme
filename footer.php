<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer" class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<article class="column medium-4">
					<h3 class="footer__heading">Donate</h3>
					<p>Donations always welcome!</p>
					<a role="button" class="download large button sites-button" href="/donate">Donate to FCBC</a>
				</article>
				<article class="column medium-4">
					<h3 class="footer__heading">Contact Us</h3>
					<p>
					    1501 North College Avenue
					    <br> Fort Collins, CO 80524
					    <br> (970) 484-3804
					</p>
					<a href="https://www.facebook.com/FortCollinsBikeCoOp" target="_blank"><i class="fa fa-3x fa-facebook-square"></i></a>
					<a href="https://twitter.com/fcbikecoop" target="_blank"><i class="fa fa-3x fa-twitter-square"></i></a>
				</article>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
