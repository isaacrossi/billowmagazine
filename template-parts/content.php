<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package billowmagazine
 */

?>


	<div class="entry-content">

		<!-- Our header for individual story pages-->
		<?php get_template_part('template-parts/content-header'); ?>

		<!-- if we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
		// this is our text block
			if ( get_row_layout() == 'text_block' ): ?>
				<?php get_template_part('template-parts/content-text'); ?>

			<?php elseif ( get_row_layout() == 'gallery' ) : ?>

				<?php get_template_part('template-parts/content-gallery'); ?>	

			<?php endif;
		endwhile; endif; ?>
		
	</div><!-- .entry-content -->


	

	<footer class="entry-footer">
		<?php //billowmagazine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
