
<?php 
  $heading = get_field('heading');
  $image = get_field('image');
  $copy = get_field('copy');
?>




<section class="contact-us">
  <div class="contact-us__inner">
    <div class="contact-us__header grid container">
      <h2><?php echo $heading ?></h2>
    </div>
    <div class="contact-us__main grid container">
      <div class="contact-us__image-wrap js-visibility reveal-slide-left">
        <<?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>
      </div>
      <div class="contact-us__text-wrap js-visibility reveal-slide-right">
      <?php echo $copy ?>
      </div>
    </div>
  </div>
</section>