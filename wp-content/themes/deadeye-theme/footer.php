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
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<div class="address">
					<h5 class="footer-font">Deadeye BBQ</h5>
					<p>2408 SW 38th St. | Ankeny, Iowa 50023 
					<br>515-238-1046 | deadeyebbq@gmail.com</p>
				</div>
				
				<div class="social-media-icons" id="social1">
					<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					<a href="http://www.instagram.com/deadeyebbq/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://www.twitter.com/deadeyebbqsauce?lang=eng"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<a href="https://www.facebook.com/DeadEyeBBQ"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				</div>

				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
