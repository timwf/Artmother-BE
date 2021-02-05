<?php 
  $image_left = get_field('image_left');
  $image_right = get_field('image_right');
?>


<section class="double-image">
  <div class="double-image__inner grid container">    
    <div class="double-image__one js-visibility reveal-slide-left">
      <a href="<?php echo $image_left['artworks_link']['url']?>">
      <?php _get_template_part('templates/components/_resp-img', ['field' => $image_left['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>  
      </a>      
      <p><?php echo $image_left['image_caption']?></p>
    </div>
    <div class="double-image__two js-visibility reveal-slide-right">
      <a href="<?php echo $image_right['artworks_link']['url']?>">
        <?php _get_template_part('templates/components/_resp-img', ['field' => $image_right['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>  
      </a>   
      <p><?php echo $image_right['image_caption']?></p>
    </div>
  </div>
</section>