<?php
/**
 * The template for displaying the lasts posts on the main page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Orbital
 * @since 1.0
 */

get_header(); ?>
<style>

	</style>
<div id="content" class="site-main">

	<main id="content-wrapper" class="container site-wrapper flex">
		
		<div class="post-listas entry-content">
		
			<?php if (have_posts()) : ?>
				<?php do_action('orbital_before_page_home_content'); ?>

				<div class="post-list" style="">

					<?php
					while (have_posts()) :
						the_post();
						get_template_part('template-parts/loops/loop', 'grid');
					endwhile;
					?>

				</div>

				<?php orbital_pagination(); ?>

				<?php do_action('orbital_after_page_home_content'); ?>

			<?php else :
				get_template_part('template-parts/none/content', 'none'); ?>

			<?php endif; ?>

			<?php wp_reset_query(); ?>

		</div>

		<?php get_template_part('template-parts/widgets/widget', 'page-home'); ?>
	</main>
</div>


<?php get_footer();
