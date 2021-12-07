<?php
/**
* The template for displaying search query
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package WordPress
* @subpackage Orbital
* @since 1.0
*/

get_header(); ?>

<main id="content" class="site-main">
	<div class="container site-wrapper flex">
		<?php if (have_posts()) : ?>
			<?php get_template_part('template-parts/header/header', 'default'); ?>

			<div class="post-listas entry-content">
				<div class="post-list">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/loops/loop', 'grid');
					endwhile;
					?>
				</div>

				<?php orbital_pagination(); ?>

			</div>

		<?php else :
			get_template_part('template-parts/none/content', 'none');
		endif; ?>
	</div>
	

</main>

<?php get_footer();
