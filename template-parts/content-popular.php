
<div class="center container ph3 ph4-l pv5 pv6-l">


  <h2 class="gothic accent f1 mv0 ph3 explore-title">
    Popular Stories
  </h2>

  <div class="flex flex-wrap justify-between">

    <?php 
    $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
    while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
    
      <a href="<?php the_permalink() ?>" class="db link w-100 w-third-ns ph3 mb3 mb0-ns">
        <img src="<?php the_field('hero_image'); ?>"> 
        <p class="f6 gothic ttu accent mt4 mb2"><?php the_field('country'); ?></p>
        <h4 class="f2 gothic dark mt0 mb3"><?php the_title(); ?></h4>
        <p class="dark ma0"><?php the_field('subhead'); ?></p>
      </a>
    
    <?php endwhile; ?>

  </div>  

</div>  
