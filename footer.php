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
<footer class="footer-container">
	<div class="footer-grid">
		<h2>Ready for your next adventure?</h2>
        <p>Be the first to get the Trailhead daypack.</p>
        <div class="footer-actions">
            <a href="#" class="btn">Pre-order now</a>

            <form class="newsletter">
                <input type="email" placeholder="Enter your email" aria-label="Email address" required>
                <button type="submit">Notify me</button>
            </form>
        </div>

        <p class="copyright">© <?php echo date('Y');?> Northstone. Built for the long way round.</p>

		<?php //dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
