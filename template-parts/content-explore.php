
<div class="center container ph4-l mb5 mb6-l">

  <h2 class="gothic accent f1 mv0 ph3 explore-title">
    More Stories
  </h2>

  <div class="flex-ns flex-wrap justify-between flex-column">

    <?php
    // organise our options into a data object
      $args = array(
        'posts_per_page' => 2,
        'orderby' => 'rand',
        'post__not_in' => array($post->ID)
      );
      // a variable with our query and options
      $query = new WP_Query( $args );
      // do a loop with our new query code 
      if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
      
        <a href="<?php the_permalink() ?>" class="db link w-100 w-third-ns ph3 mb3 mb0-ns">
          <img src="<?php the_field('hero_image'); ?>"> 
          <p class="f6 gothic ttu accent mt4 mb2"><?php the_field('country'); ?></p>
          <h4 class="f2 gothic dark mt0 mb3"><?php the_title(); ?></h4>
          <p class="dark ma0"><?php the_field('subhead'); ?></p>
        </a>
        
      
    <?php endwhile; endif; ?>

  </div>

</div>    