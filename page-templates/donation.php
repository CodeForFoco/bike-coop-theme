<?php
/*
Template Name: Donate
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php do_action( 'full_width_slider', $post ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<section id="paypal-donations-wrapper" class="paypal-donations-wrapper">
				<header>
					<h2>Monetary Donations</h2>
				</header>
				<div class="one-time-donation">
					<h4 class='title'>One Time Donations</h4>
					<p>You can make a one monetary donation to the co-op securely through paypal by clicking ont he butotn below (A paypal account is NOT required).</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="5249669">
						<!--<input type="image" src="http://fcbikecoop.org/images/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
						<button type="submit" role="button" class="download button sites-button" title="PayPal - The safer, easier way to pay online!">
							<i class="fa fa-paypal" aria-hidden="true"></i>
							Donate
						</button>
						<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
					</form>
					<br />

					<h4 class='title'>Donate to our outreach</h4>
					<p>$90 pays for one bike mechanic for a day to support our earn-a-bike and youth outreach programs</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					 	<input type="hidden" name="cmd" value="_s-xclick">
					 	<input type="hidden" name="hosted_button_id" value="1190629">
					 	<button type="submit" role="button" class="download button sites-button" title="PayPal - The safer, easier way to pay online!">
							<i class="fa fa-paypal" aria-hidden="true"></i>
							Donate $90.00
						</button>
					 	<!--<input type="image" src="http://fcbikecoop.org/images/btn_donate_LG.gif" name="submit" alt="Paypal">-->
					 	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" hidden="" style="display: none !important;">
					</form>
				</div>
				<hr />
				<div class="reoccuring-donations">
					<h4 class='title'>Ongoing support of the Co-op</h4>
					<p>You can set up a subscription to donate a little each month.</p>
				</div>
			</section>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_footer();
