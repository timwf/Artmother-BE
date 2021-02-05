
<?php 
  $title = get_field('title');
  $step_one = get_field('step_one');
  $step_two = get_field('step_two');
  $step_three = get_field('step_three');
  $step_four = get_field('step_four');
?>






<section class="shipping">
  <div class="shipping__inner grid container">
    <div class="shipping__heading js-visibility reveal-slide">
      <h2><?php echo $title ?></h2>
    </div>
    <div class="shipping__row-one">
      <div class="shipping__text-wrap">
        <h3><?php echo $step_one['heading'] ?></h3>
        <p><?php echo $step_one['copy'] ?></p>
      </div>
      <?php _get_template_part('templates/components/_resp-img', ['field' => $step_one['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>    
    </div>
    <div class="shipping__row-two">
    <?php _get_template_part('templates/components/_resp-img', ['field' => $step_one['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>
      <div class="shipping__text-wrap">
        <h3><?php echo $step_two['heading'] ?></h3>
        <p><?php echo $step_two['copy'] ?></p>
      </div>
    </div>
    <div class="shipping__row-three">
      <div class="shipping__text-wrap">
        <h3><?php echo $step_three['heading'] ?></h3>
        <p><?php echo $step_three['copy'] ?></p>
      </div>
      <?php _get_template_part('templates/components/_resp-img', ['field' => $step_three['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>
    </div>
    <div class="shipping__row-four">
    <?php _get_template_part('templates/components/_resp-img', ['field' => $step_four['image'], 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>
      <div class="shipping__text-wrap">
        <h3><?php echo $step_four['heading'] ?></h3>
        <p><?php echo $step_four['copy'] ?></p>
      </div>
    </div>
  </div>
</section>