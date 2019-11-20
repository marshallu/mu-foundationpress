<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
	<footer id="footer">
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
</div>

<div class="last-footer">
<div class="row">
<div class="large-12 columns" style="padding-left:0px;padding-right:0px;">

<div class="large-6 columns left" style="padding-left:0px;">
<a href="http://www.marshall.edu/foundation/">Home</a> | <a href="http://www.marshall.edu/foundation/contact">Contact Us</a> | <a href="http://www.marshall.edu/foundation/sitemap">Sitemap</a> | <a href="http://www.marshall.edu/sitedisclaimer">Site Disclaimer</a> | <a href="http://www.marshall.edu/">Marshall.edu</a>
</div>

<div class="large-6 columns right" style="padding-right:0px;text-align: right;">
© 2017 Marshall University Foundation - 519 John Marshall Drive - Huntington, WV 25703
</div>

</div>
</div>
</div>


<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>

<a class="exit-off-canvas"></a>
<?php endif; ?>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
