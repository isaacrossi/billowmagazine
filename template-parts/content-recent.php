<section class="center container ph3 ph4-l pv5 pv6-l container">

  <h2 class="gothic accent f1 mv0 ph2 ph3-l explore-title">
    Recent Stories
  </h2>

  <div class="flex flex-column flex-row-l">

    <div class="latest-story vh-100-l w-100 w-50-l mb5-m flex flex-row flex-wrap justify-between">

      <?php
          // organise our options into a data object
        $args = array(
          'posts_per_page' => 1,
          'orderby' => 'date',
        );
        // a variable with our query and options
        $query = new WP_Query( $args );
        // do a loop with our new query code
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post()
      ?>
        <a href="<?php the_permalink() ?>" class="db link w-100 ph2 ph3-l mb5 mb0-ns" data-hover="read">
          <img src="<?php the_field('hero_image'); ?>"> 
          <p class="f5 tracked gothic ttu accent mt3 mb2"><?php the_field('country'); ?></p>
          <h4 class="f3 f2-ns gothic dark mt0 mb2"><?php the_title(); ?></h4>
          <p class="dark ma0"><?php the_field('subhead'); ?></p>
        </a>
        
      <?php endwhile; endif; ?>

    </div>

    <div class="w-100 w-50-l flex flex-row flex-wrap justify-between">

      <?php
          // organise our options into a data object
        $args = array(
          'posts_per_page' => 10,
          'orderby' => 'date',
          'offset'=> 1,
        );
        // a variable with our query and options
        $query = new WP_Query( $args );
        // do a loop with our new query code 
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post()
      ?>
        <a href="<?php the_permalink() ?>" class="recent-stories db link w-100 w-50-ns ph2 ph3-l mb5 mb0-ns mt4" data-hover="read">
          <img src="<?php the_field('hero_image'); ?>"> 
          <p class="f5 tracked gothic ttu accent mt3 mb2"><?php the_field('country'); ?></p>
          <h4 class="f3 f2-ns gothic dark mt0 mb2"><?php the_title(); ?></h4>
          <p class="dark ma0"><?php the_field('subhead'); ?></p>
        </a>
        
      <?php endwhile; endif; ?>

    </div>

  </div>

</section>