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

	<!-- hero needs bg image -->
	<section class="hero min-vh-100 cover bg-right" style="
		<?php if( get_field('hero_image') ): ?>
				background-image: url(<?php the_field('hero_image'); ?>);
			<?php endif; ?>
	">
		<div class="hero-menu pl5">
			<h1 class="mv0 pv4"><img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" />
			</h1>
			<nav>
				<ul class="ma0 pl0">
					<li class="mb2"><img src="<?php echo get_template_directory_uri() . '/images/youtube.svg'; ?>" /></li>
					<li class="mb2"><img src="<?php echo get_template_directory_uri() . '/images/instagram.svg'; ?>" /></li>
					<li><img src="<?php echo get_template_directory_uri() . '/images/email.svg'; ?>" /></li>
				</ul>
			</nav>
		</div>

		<div class="hero-content pl5">
			<!-- country -->
			<?php if( get_field('country') ): ?>
				<p class="gothic light tracked mv0"><?php the_field('country'); ?></p>
			<?php endif; ?>
			<!-- title -->
			<h1 class="gothic light f-headline mv0"> <?php the_title(); ?></h1>
			<!-- subhead -->
			<?php if( get_field('subhead') ): ?>
				<p class="subhead editorial light f5 mv0"><?php the_field('subhead'); ?></p>
			<?php endif; ?>
		</div>

		<nav class="hero-changer flex space-between">
				<span class="change-slide mr2 br-100 ba bw-1"></span>
				<span class="change-slide mr2 br-100 ba bw-1"></span>
				<span class="change-slide br-100 ba bw-1"></span>
		</nav>
	</section>

	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //billowmagazine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
