<?php 
  $add_a_pair_of_events = get_field('add_a_pair_of_events');

?>



<section class="author-timeline">
  <div class="author-timeline__center-line"></div>
  <div class="author-timeline__inner grid container">


    <?php foreach ($add_a_pair_of_events as $pair):?>
      
      <?php if($pair['event_left']) { ?>
        <div class="author-timeline__image-pos-<?php echo($pair['event_left']['layout_desktop'])?>">
          <img class="js-lightbox" src="<?php echo($pair['event_left']['image']['url'])?>" alt="timeline 1">
          <h5>Mud, 2005</h5>
        </div>
        <div class="author-timeline__text-pos-<?php echo($pair['event_left']['layout_desktop'])?>">
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
        <div class="author-timeline__row-1-right-text">
          <div class="reveal-container">
            <h3><?php echo($pair['event_right']['date'])?></h3>
          </div>
          <h4><?php echo($pair['event_right']['title'])?></h4>
          <h4><?php echo($pair['event_right']['subtitle'])?>
            <div class="author-timeline__leading-line"></div>
          </h4>
          <p><?php echo($pair['event_right']['copy'])?></p>
        </div>
        <div class="author-timeline__row-1-right-img">
          <img class="js-lightbox" src="<?php echo($pair['event_right']['image']['url'])?>" alt="timeline 2">
          <h5>Mud, 2005</h5>
        </div>
      <?php } ?>

    <?php endforeach; ?>  


    <div class="author-timeline__row-1-left-img">
      <img class="js-lightbox" src="./img/double-2.jpg" alt="timeline 1">
      <h5>Mud, 2005</h5>
    </div>
    <div class="author-timeline__row-1-left-text">
      <div class="reveal-container">
        <h3>Dec 2019</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
    </div>


    <div class="author-timeline__row-1-right-text">
      <div class="reveal-container">
        <h3>Feb 2020</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
    </div>
    <div class="author-timeline__row-1-right-img">
      <img class="js-lightbox" src="./img/double-1.jpg" alt="timeline 2">
      <h5>Mud, 2005</h5>
    </div>





    <div class="author-timeline__row-2-left-img">
      <img class="js-lightbox" src="./img/double-2.jpg" alt="timeline 3">
      <h5>Mud, 2005</h5>
    </div>
    <div class="author-timeline__row-2-left-text">
      <div class="reveal-container">
        <h3>Apr 2020</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free</p>
    </div>



    <div class="author-timeline__row-2-right-text">
      <div class="reveal-container">
        <h3>Nov 2020</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
    </div>
    <div class="author-timeline__row-2-right-img">
      <img class="js-lightbox" src="./img/artist-hero.jpg" alt="timeline 4">
      <h5>Mud, 2005</h5>
    </div>



    <div class="author-timeline__row-3-left-img">
      <img class="js-lightbox" src="./img/double-1.jpg" alt="timeline five">
      <h5>Mud, 2005</h5>
    </div>
    <div class="author-timeline__row-3-left-text">     
      <div class="reveal-container">
        <h3>Dec 2020</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
    </div>



    <div class="author-timeline__row-3-right-text">
      <div class="reveal-container">
        <h3>Jan 2021</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free MacDowell Colony residency in Florida. It was set up to support artists who innovate</p>
    </div>


    <div class="author-timeline__row-3-right-img">
      <img class="js-lightbox" src="./img/double-2.jpg" alt="timeline six">
      <h5>Mud, 2005</h5>
    </div>




    <div class="author-timeline__row-1-left-img">
      <img class="js-lightbox" src="./img/double-2.jpg" alt="timeline seven">
      <h5>Mud, 2005</h5>
    </div>
    <div class="author-timeline__row-1-left-text">
      <div class="reveal-container">
        <h3>Dec 2019</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
    </div>


    <div class="author-timeline__row-1-right-text">
      <div class="reveal-container">
        <h3>Feb 2020</h3>
      </div>
      <h4>SOLO EXERBITION:</h4>
      <h4>Kate McGarry, London
        <div class="author-timeline__leading-line"></div>
      </h4>
      <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
    </div>
    <div class="author-timeline__row-1-right-img"><img class="js-lightbox" src="./img/double-1.jpg" alt="timeline eight">
      <h5>Mud, 2005</h5>
    </div>



  </div>
</section>







<section class="mobile-author-timeline">
  <div class="mobile-author-timeline__inner">
    <div class="mobile-author-timeline__top">
      <div class="mobile-author-timeline__center-line"></div>
      <div class="mobile-author-timeline__title">
        <h2>Timeline</h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="74" viewBox="0 0 30 74"><g><g><path d="M29.47 36.788L2.705.116.028 3.872l23.955 32.916L.028 69.704l2.677 3.757z"/></g></g></svg>
      </div>
      <div class="mobile-author-timeline__top-colomn-1-text">
        <div class="reveal-container">
          <h3>Feb 2020</h3>
        </div>
        <h4>SOLO EXERBITION:</h4>
        <h4>Kate McGarry, London</h4>
        <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
        <div class="mobile-author-timeline__leading-line"></div>
      </div>
      <div class="mobile-author-timeline__top-colomn-1-img"><img class="js-lightbox" src="./img/double-1.jpg" alt="timeline 1">
        <h5>Mud, 2005</h5>
      </div>
      <div class="mobile-author-timeline__top-colomn-2-text">
        <div class="reveal-container">
          <h3>Feb 2020</h3>
        </div>
        <h4>SOLO EXERBITION:</h4>
        <h4>Kate McGarry, London</h4>
        <p>Treib was selected for the inaugural s set up to support artisting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
        <div class="mobile-author-timeline__leading-line"></div>
      </div>
      <div class="mobile-author-timeline__top-colomn-3-text">
        <div class="reveal-container">
          <h3>Feb 2020</h3>
        </div>
        <h4>SOLO EXERBITION:</h4>
        <h4>Kate McGarry, London</h4>
        <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
        <div class="mobile-author-timeline__leading-line"></div>
      </div>
    </div>
    <div class="mobile-author-timeline__bottom">    
      <div class="mobile-author-timeline__bottom-colomn-1-img"><img class="js-lightbox" src="./img/artist-hero.jpg" alt="timeline 3">
        <h5>Mud, 2005</h5>
      </div>
      <div class="mobile-author-timeline__bottom-colomn-1-text">
        <div class="reveal-container">
          <h3>Feb 2020</h3>
        </div>
        <h4>SOLO EXERBITION:</h4>
        <h4>Kate McGarry, London</h4>
        <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
        <div class="mobile-author-timeline__leading-line"></div>
      </div>
      <div class="mobile-author-timeline__bottom-colomn-2-text">
        <div class="reveal-container">
          <h3>Feb 2020</h3>
        </div>
        <h4>SOLO EXERBITION:</h4>
        <h4>Kate McGarry, London</h4>
        <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
        <div class="mobile-author-timeline__leading-line"></div>
      </div>
      <div class="mobile-author-timeline__bottom-colomn-2-img"><img class="js-lightbox" src="./img/double-2.jpg" alt="timeline gour">
        <h5>Mud, 2005</h5>
      </div>
      <div class="mobile-author-timeline__bottom-colomn-3-img"><img class="js-lightbox" src="./img/double-2.jpg" alt="timeline gour">
        <h5>Mud, 2005</h5>
      </div>
      <div class="mobile-author-timeline__bottom-colomn-3-text">
        <div class="reveal-container">
          <h3>Feb 2020</h3>
        </div>
        <h4>SOLO EXERBITION:</h4>
        <h4>Kate McGarry, London</h4>
        <p>Treib was selected for the inaugural MacDowell Colony residency in Florida. It was set up to support artists who innovate with the medium of painting, granting them free It was set up to support artists who innovate with the medium of painting, granting them free </p>
        <div class="mobile-author-timeline__leading-line"></div>
      </div>
    </div>
  </div>
</section>