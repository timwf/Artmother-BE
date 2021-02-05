

<?php 
  $title = get_field('title');
  $include_image = get_field('include_image');
  $image = get_field('image');
  $copy = get_field('copy');
  $include_giant_hyphen = get_field('include_giant_hyphen');
  
?>


<section class="reading">
  <?php if($include_giant_hyphen) { ?>
    <div class="animated-line__container">
      <div class="animated-line js-visibility animated-line-show"> </div>
    </div>
  <?php } ?>
  <div class="reading__inner container grid">
    <h3 class="js-visibility reveal-slide"><?php echo $title ?></h3>
    <?php if($include_image){ ?>
    <img class="" src="<?php echo $image['url']  ?>" alt="Double two">
    <?php } ?>
    <?php echo $copy ?>
  </div>
</section>