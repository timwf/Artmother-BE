
<?php 
  $include_image = get_field('include_image');
  $image_position = get_field('image_position');
  $image_lightbox = get_field('image_lightbox');
  $image = get_field('image');
  $image_caption = get_field('image_caption');
  $paragraph = get_field('paragraph');
?>

<section class="author-copy">   
  <div class="author-copy__inner grid container">
    <div class="author-copy__wrap">
      
    <?php if ($include_image): ?>
      <div class="author-copy__image-wrap <?php if($image_position == 'Right') {?> author-copy__image-wrap--right <?php } ?> js-visibility reveal-slide-left">

        <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?> 
        <h5>Mud 2005</h5>
      </div>
    <?php endif ?>     
    
      <?php echo $paragraph ?>
    </div>
  </div>
</section>       
        
<!-- <section class="author-copy">   
  <div class="author-copy__inner grid container">
    <div class="author-copy__wrap">
      <div class="author-copy__image-wrap author-copy__image-wrap--right js-visibility reveal-slide-right">
        <img class="js-lightbox" src="./img/double-one.jpg" alt="Double two"/>
        <h5>Mud 2005</h5>
      </div>
      <p>RIGHT We moved back to the city when I was twelve. My mother was worried that we were too isolated and antisocial. I loved having time alone and running around barefoot, but when we moved back to the city I’m from Saginaw, in the middle of the Michigan. There can be beauty to all different types of landscapes, but Saginaw is just very flat, and post-industrial. The city’s population has halved since the ‘70s and ‘80s.</p>
      <p>My mother was worried that we were too isolated and antisocial. I loved having time alone and running around barefoot, but when we moved back to the city I’m from Saginaw, in the middle of the Michigan. There can be beauty to all different types of landscapes, but Saginaw is just very flat, and post-industrial. The city’s population has halved since the ‘70s and ‘80s.</p>
    </div>
  </div>
</section> -->