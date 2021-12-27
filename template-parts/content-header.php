<div class="flex-l">
					
  <!-- our header background image -->
  <div class="w-100 w-60-l vh-50 min-vh-100-l cover bg-center" style="<?php nice_background('hero_image'); ?>"></div>
  
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