<div class="gallery container flex flex-wrap center ph4-l">
  <?php $images = get_sub_field('gallery'); ?>
  <?php foreach($images as $image) : ?>
    <!-- here we have added a custom field to our attachment (images) which adds a class name to control its width-->
    <div class="gallery-image center ph3 mb4 <?php the_field('image_width', $image['id']) ?>">
      <?php echo wp_get_attachment_image($image['id'], "full"); ?>
      <!-- here we assign our caption to a variable and if its not empty we display it on the page -->
      <?php $caption = wp_get_attachment_caption($image['id']); ?>
      <?php if(!empty($caption)) : ?>
        <p class="caption editorial f5 o-50 pt3 mv0">
          <?php echo $caption; ?>
        </p>
      <?php endif; ?>	
    </div>
  <?php endforeach; ?>
</div>		