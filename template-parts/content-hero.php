<section class="hero relative dark-bg min-vh-100">

  <a href="<?php the_permalink()?>" data-hover="read">
    <div class="hero-slideshow absolute top-0 right-0 cover bg-right" style="
      <?php nice_background('hero_image'); ?>
    ">
    </div>
  </a>


  <div class="hero-menu absolute top-0 left-0">
    <h1 class="pt4 mt0 mb2"><img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" />
    </h1>
  </div>

  <div class="hero-content absolute left-0 pb4 pr2">
    <!-- country -->
    <?php if( get_field('country') ): ?>
      <p class="f6 f4-ns gothic accent ttu tracked mv0"><?php the_field('country'); ?></p>
    <?php endif; ?>
    <!-- title -->
    <h1 class="gothic light mv2 f1 f-subheadline-m f-headline-l lh-solid"> <?php the_title(); ?></h1>
    <!-- subhead -->
    <?php if( get_field('subhead') ): ?>
      <p class="subhead editorial light f5 f4-ns mv0 lh-copy"><?php the_field('subhead'); ?></p>
    <?php endif; ?>
  </div>

  <nav class="hero-changer absolute flex space-between">
      <span class="change-slide br-100 ba bw-1"></span>
      <span class="change-slide br-100 ba bw-1"></span>
      <span class="change-slide br-100 ba bw-1"></span>
  </nav>

</section>