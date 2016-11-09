<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class="contact">
		<h2>Contact Info</h2>
		<p><i class="fa fa-phone" aria-hidden="true"></i>778-456-7891</p>
		<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
		<p><i class="fa fa-map-marker" aria-hidden="true"></i>1490 W Broadway<br> Vancouver, BC V6H 1H5</p>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
