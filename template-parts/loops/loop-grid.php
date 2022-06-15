
<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<article class="post-card">
	<a href="<?php echo get_permalink();?>" class="post-card-link" tabindex="-1"><?php the_title();?></a>
	<div class="post-card-body">
		<h2 class="post-card-title">
			<a href="<?php echo get_permalink();?>"><?php the_title();?></a>
		</h2>
		<div class="post-card-category">
			<?php if (orbital_customize_option('orbital_loop_category') && ! is_archive()) : ?>
			<?php echo orbital_the_category_link(); ?>
			<?php endif; ?>
		</div>
		<div class="post-card-date"><!-- Tiene flex -->
			<time><?php if (orbital_customize_option('orbital_loop_date')) : ?>
				<?php echo get_the_date(); ?>
			<?php endif; ?>	</time>
		</div>
	</div>
	<div class="post-card-background" style="background-image:url('<?php echo $feat_image;?>');"></div>
</article>
