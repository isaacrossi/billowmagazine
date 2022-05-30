<section class="hero relative vh-100">

  <div class="hero-menu absolute left-0">
      <h1 class="mt0 mb3"><img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" />
      </h1>
  </div>

  <nav class="hero-changer absolute flex space-between">
    <span class="change-slide br-100 ba bw-1"></span>
    <span class="change-slide br-100 ba bw-1"></span>
    <span class="change-slide br-100 ba bw-1"></span>
  </nav>

  <div class="slideshow relative vh-100 vw-100">

    <div class="holder">
  
      <?php
          // organise our options into a data object
        $args = array(
          'posts_per_page' => 3,
          'orderby' => 'date',
        );
        // a variable with our query and options
        $query = new WP_Query( $args );
        // do a loop with our new query code
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post()
      ?>

        <div class="hero-story relative dark-bg min-vh-100">

          <a href="<?php the_permalink()?>" data-hover="read">
            <div class="hero-image absolute top-0 right-0 cover bg-right" style="
              <?php nice_background('hero_image'); ?>
            ">
            </div>
          </a>

          <div class="hero-text flex flex-column justify-end pb4 pr2 z-5 ph3-l">
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

        </div>

      <?php endwhile; endif; ?>

    </div>

  </div>     

</section>  