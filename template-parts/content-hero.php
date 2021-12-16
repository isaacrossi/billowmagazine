<section class="hero relative dark-bg min-vh-100">

  <div class="hero-slideshow absolute top-0 right-0 cover bg-right"  style="
    <?php if( get_field('hero_image') ): ?>
      background-image: url(<?php the_field('hero_image'); ?>);
    <?php endif; ?>
  ">
  </div>

  <div class="hero-menu absolute top-0 left-0 pl5">
    <h1 class="pt4 mt0 mb2"><img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" />
    </h1>
    <nav>
      <ul class="ma0 pl0 list">
        <li><img src="<?php echo get_template_directory_uri() . '/images/youtube.svg'; ?>" class="mb2"/></li>
        <li><img src="<?php echo get_template_directory_uri() . '/images/instagram.svg'; ?>" class="mb2"/></li>
        <li><img src="<?php echo get_template_directory_uri() . '/images/email.svg'; ?>" /></li>
      </ul>
    </nav>
  </div>

  <div class="hero-content absolute left-0 pl5">
    <!-- country -->
    <?php if( get_field('country') ): ?>
      <p class="gothic light ttu tracked mv0"><?php the_field('country'); ?></p>
    <?php endif; ?>
    <!-- title -->
    <h1 class="gothic light mv2  f-headline lh-solid"> <?php the_title(); ?></h1>
    <!-- subhead -->
    <?php if( get_field('subhead') ): ?>
      <p class="subhead editorial light f5 mv0"><?php the_field('subhead'); ?></p>
    <?php endif; ?>
  </div>

  <nav class="hero-changer absolute flex space-between">
      <span class="change-slide br-100 ba bw-1"></span>
      <span class="change-slide br-100 ba bw-1"></span>
      <span class="change-slide br-100 ba bw-1"></span>
  </nav>

</section>