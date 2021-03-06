
<div class="center container ph3 ph4-l pv5 pv6-l mb5 mb6-l">

  <h2 class="gothic accent f1 mv0 ph2 ph3-l explore-title">
    More Stories
  </h2>

  <div class="flex flex-wrap justify-between">

    <?php
    // organise our options into a data object
      $args = array(
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'post__not_in' => array($post->ID)
      );
      // a variable with our query and options
      $query = new WP_Query( $args );
      // do a loop with our new query code 
      if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
      
        <a href="<?php the_permalink() ?>" class="db link w-100 w-third-ns ph2 ph3-l mb3 mb0-ns" data-hover="read">
          <img src="<?php the_field('hero_image'); ?>"> 
          <p class="f6 gothic ttu accent mt4 mb2"><?php the_field('country'); ?></p>
          <h4 class="f2 gothic dark mt0 mb3"><?php the_title(); ?></h4>
          <p class="dark ma0"><?php the_field('subhead'); ?></p>
        </a>
        
      
    <?php endwhile; endif; ?>

  </div>

</div>    