<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package billowmagazine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="entry-content">

		<!-- Our header for individual story pages-->
		<div class="flex-l">
					
			<!-- our header background image -->
			<div class="w-100 w-60-l vh-50 min-vh-100-l cover bg-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>"></div>
			
			<!-- our header content -->
			<div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l">
				<div class="tc">
					<p class="f6 f5-l gothic dark mt0 mb4 mb5-l pt4 ttu tracked">
						<?php the_field('country'); ?>
						<span class="line accent-bg mt3 mt4-l"></span>
					</p>
					<!-- standard wordpress data -->
					<h1 class="f1 f-subheadline-l center gothic dark mt0 mb3 mw6 ttu lh-solid measure-wide">
						<?php the_title(); ?>
					</h1>
					<p class="f5 f4-l dark editorial mt0 mb4 mw6 lh-copy">
						<?php the_field('subhead'); ?>
					</p>
				</div>
			</div>

		</div>

		<!-- if we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
		// this is our text block
			if( get_row_layout() == 'text_block' ): ?>
				<div class="text-block ph3 ph4-l f5 f4-l measure-wide editorial dark pv5 pv6-l center lh-copy">
					<p><?php the_sub_field('text_content'); ?></p>
				</div>
			<?php endif;
		endwhile; endif; ?>
		
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //billowmagazine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
