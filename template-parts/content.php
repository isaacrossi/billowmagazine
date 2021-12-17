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
		<div class="flex">
					
			<!-- our header background image -->
			<div class="w-60 min-vh-100 cover bg-center" style="<?php if( get_field('hero_image') ): ?>background-image: url(<?php the_field('hero_image'); ?>); <?php endif; ?>"></div>
			
			<!-- our header content -->
			<div class="w-40 flex items-center justify-center ph4">
				<div class="tc">
					<p class="f6 gothic dark mt0 mb5 ttu tracked">
						<?php the_field('country'); ?>
						<span class="line accent-bg mt4"></span>
					</p>
					<!-- standard wordpress data -->
					<h1 class="f1 gothic dark mt0 mb3 ttu">
						<?php the_title(); ?>
					</h1>
					<p class="f5 dark editorial mt0 mb4 lh-copy">
						<?php the_field('subhead'); ?>
					</p>
				</div>
			</div>

		</div>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //billowmagazine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
