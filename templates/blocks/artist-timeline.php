<?php 
  $add_a_pair_of_events = get_field('add_a_pair_of_events');
?>

<section class="author-timeline">
  <div class="author-timeline__center-line"></div>
  <div class="author-timeline__inner grid container">
    <?php foreach ($add_a_pair_of_events as $pair):?>      
      <?php if($pair['event_left']) { ?>
        <div class="author-timeline__image-pos-<?php echo($pair['event_left']['layout_desktop'])?>" style="margin-top: <?php echo($pair['event_left']['margin_top_desktop'])?>px">
          <img class="js-lightbox" src="<?php echo($pair['event_left']['image']['url'])?>" alt="timeline 1">
          <h5><?php echo($pair['event_left']['image_caption'])?></h5>
        </div>
        <div class="author-timeline__text-pos-<?php echo($pair['event_left']['layout_desktop'])?>" style="margin-top: <?php echo($pair['event_left']['margin_top_desktop'])?>px">
          <div class="reveal-container">
            <h3><?php echo($pair['event_left']['date'])?></h3>
          </div>
          <h4><?php echo($pair['event_left']['title'])?></h4>
          <h4><?php echo($pair['event_left']['subtitle'])?>
            <div class="author-timeline__leading-line"></div>
          </h4>
          <p><?php echo($pair['event_left']['copy'])?></p>
        </div>
      <?php } ?>

      <?php if($pair['event_right']) { ?>
        <?php if($pair['event_right']['date']) { ?>
          <div class="author-timeline__text-pos-<?php echo($pair['event_right']['layout_desktop'])?>--right" style="margin-top: <?php echo($pair['event_right']['margin_top_desktop'])?>px">
          <div class="reveal-container">
            <h3><?php echo($pair['event_right']['date'])?></h3>
          </div>
          <h4><?php echo($pair['event_right']['title'])?></h4>
          <h4><?php echo($pair['event_right']['subtitle'])?>
            <div class="author-timeline__leading-line"></div>
          </h4>
          <p><?php echo($pair['event_right']['copy'])?></p>
        </div>
        <div class="author-timeline__image-pos-<?php echo($pair['event_right']['layout_desktop'])?>--right" style="margin-top: <?php echo($pair['event_right']['margin_top_desktop'])?>px">
          <img class="js-lightbox" src="<?php echo($pair['event_right']['image']['url'])?>" alt="timeline 2">
          <h5><?php echo($pair['event_right']['image_caption'])?></h5>
        </div>
        <?php } ?>
      <?php } ?>
    <?php endforeach; ?>  
  </div>
</section>

<section class="mobile-author-timeline">
  <div class="mobile-author-timeline__inner">
    <div class="mobile-author-timeline__top">
      <div class="mobile-author-timeline__center-line"></div>
      <div class="mobile-author-timeline__title">
        <h2>Timeline</h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="74" viewBox="0 0 30 74"><g><g><path d="M29.47 36.788L2.705.116.028 3.872l23.955 32.916L.028 69.704l2.677 3.757z"/></g></g></svg>
      </div>

      <?php foreach ($add_a_pair_of_events as $pair):?>
      <?php if($pair['event_right']) { ?>
        <?php if($pair['event_right']['date']) { ?>
          <?php if($pair['event_right']['mobile_image_right']) { ?>
            <div class="mobile-author-timeline__top-colomn-img js-top-mobile-time-width" data-width-count="<?php echo($pair['event_right']['mobile_image_size'])?>" data-general-width="<?php echo($pair['event_right']['mobile_image_size'])?> " style="margin-top: <?php echo($pair['event_right']['mobile_image_margin_top'])?>px">
              <img class="js-lightbox" src="<?php echo($pair['event_right']['image']['url'])?>" alt="timeline 1">
              <h5><?php echo($pair['event_right']['image_caption'])?></h5>
            </div>
          <?php } ?>
          <div class="mobile-author-timeline__top-colomn-text js-top-mobile-time-width" data-width-count="<?php echo($pair['event_right']['mobile_copy_size'])?>" data-general-width="<?php echo($pair['event_right']['mobile_copy_size'])?>">
            <div class="reveal-container">
              <h3><?php echo($pair['event_right']['date'])?></h3>
            </div>
            <h4><?php echo($pair['event_right']['title'])?></h4>
            <h4><?php echo($pair['event_right']['subtitle'])?></h4>
            <p><?php echo($pair['event_right']['copy'])?></p>
            <div class="mobile-author-timeline__leading-line"></div>
          </div>
          <?php if(!$pair['event_right']['mobile_image_right']) { ?>
            <div class="mobile-author-timeline__top-colomn-img js-top-mobile-time-width" data-width-count="<?php echo($pair['event_right']['mobile_image_size'])?>" data-general-width="<?php echo($pair['event_right']['mobile_image_size'])?> " style="margin-top: <?php echo($pair['event_right']['mobile_image_margin_top'])?>px">
              <img class="js-lightbox" src="<?php echo($pair['event_right']['image']['url'])?>" alt="timeline 1">
              <h5><?php echo($pair['event_right']['image_caption'])?></h5>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>
      <?php endforeach; ?>  
    </div>
    <div class="mobile-author-timeline__bottom"> 

    <?php foreach ($add_a_pair_of_events as $pair):?>
      <?php if($pair['event_left']) { ?>
        <?php if($pair['event_left']['date']) { ?>
          <?php if($pair['event_left']['mobile_image_right']) { ?>
            <div class="mobile-author-timeline__bottom-colomn-img js-top-mobile-time-width" data-width-count-bottom="<?php echo($pair['event_left']['mobile_image_size'])?>" data-general-width="<?php echo($pair['event_left']['mobile_image_size'])?> " style="margin-top: <?php echo($pair['event_left']['mobile_image_margin_top'])?>px">
              <img class="js-lightbox" src="<?php echo($pair['event_left']['image']['url'])?>" alt="timeline 1">
              <h5><?php echo($pair['event_left']['image_caption'])?></h5>
            </div>
          <?php } ?>
          <div class="mobile-author-timeline__bottom-colomn-text js-top-mobile-time-width" data-width-count-bottom="<?php echo($pair['event_left']['mobile_copy_size'])?>" data-general-width="<?php echo($pair['event_left']['mobile_copy_size'])?>">
            <div class="reveal-container">
              <h3><?php echo($pair['event_left']['date'])?></h3>
            </div>
            <h4><?php echo($pair['event_left']['title'])?></h4>
            <h4><?php echo($pair['event_left']['subtitle'])?></h4>
            <p><?php echo($pair['event_left']['copy'])?></p>
            <div class="mobile-author-timeline__leading-line"></div>
          </div>
          <?php if(!$pair['event_left']['mobile_image_right']) { ?>
            <div class="mobile-author-timeline__bottom-colomn-img js-top-mobile-time-width" data-width-count-bottom="<?php echo($pair['event_left']['mobile_image_size'])?>" data-general-width="<?php echo($pair['event_left']['mobile_image_size'])?> " style="margin-top: <?php echo($pair['event_left']['mobile_image_margin_top'])?>px">
              <img class="js-lightbox" src="<?php echo($pair['event_left']['image']['url'])?>" alt="timeline 1">
              <h5><?php echo($pair['event_left']['image_caption'])?></h5>
            </div>
          <?php } ?>
        <?php } ?>
      <?php } ?>
      <?php endforeach; ?>  
    </div> 
    </div>
  </div>
</section>