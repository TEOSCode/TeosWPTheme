<?php
if (! is_active_sidebar('pilar') || ! orbital_get_option_page('sidebar')) {
	return;
}

$sticky = orbital_customize_option('orbital_layout_sidebar_sticky') ? 'sticky' : '';
?>
<aside id="secondary" class="widget-area entry-aside">
	<div class="widget-area-wrapper <?php echo $sticky ?>">
		<?php dynamic_sidebar('pilar'); ?>
	</div>
</aside><!-- #secondary -->