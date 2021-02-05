<?php 
  $heading = get_field('heading');
  $image = get_field('image');
  $image_caption = get_field('image_caption');
  $details = get_field('details');
  $left_column_copy = get_field('left_column_copy');
  $right_column_copy = get_field('right_column_copy');
  $home =  home_url();
  $artistNew = get_post_meta(get_the_id(), 'link_an_artist')[0];      
?>

<section class="about">
  <div class="about__inner container">
    <div class="about__top grid">
      <div class="about__top-text-wrap">
        <?php echo $heading ?>
      </div>
      <div class="about__top-image-wrap js-visibility reveal-slide-right">
      <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>
        <h5><?php echo $image_caption?></h5>
      </div>
    </div>
    <div class="about__bottom grid">
      <div class="about__bottom-left">
        <div class="animated-line__container">
          <div class="animated-line js-visibility animated-line-show"> </div>
        </div>
        <?php echo $left_column_copy ?>
      </div>
      <div class="about__bottom-right">       
      <?php echo $right_column_copy ?>
      </div>
    </div>
  </div>
</section>