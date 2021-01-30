
<?php 
    $carousel_images = get_field('carousel_images');
    $title = get_field('title');
    $description = get_field('description');
    $details = get_field('details');
    $shipping_text = get_field('shipping_text');
    $home =  home_url();
    $artistNew = get_post_meta(get_the_id(), 'link_an_artist')[0];   
    
?>



<div class="art-single">
  <div class="art-single__breadcrumbs-wrap container grid">
    <div class="art-single__breadcrumb-left"><a href="<?php echo  get_permalink($artistNew) ?>"><svg class="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 404.258 404.258" style="enable-background:new 0 0 404.258 404.258;" xml:space="preserve"><polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "/></svg>
        <h3><?php echo  get_the_title($artistNew)?></h3></a></div>
    <div class="art-single__breadcrumb-right"><a href="<?php echo $home . '/art' . '#' . $artistNew ?>">
        <h3>All works</h3><svg class="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 404.258 404.258" style="enable-background:new 0 0 404.258 404.258;" xml:space="preserve"><polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "/></svg></a></div>
  </div>
  <div class="art-single__carousel-wrap container grid"><svg class="art-single__slide-left" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 404.258 404.258" style="enable-background:new 0 0 404.258 404.258;" xml:space="preserve"><polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "/></svg>   
    <div class="art-single__carousel">  
    <?php foreach ($carousel_images as $item):?>
      <div class="">
        <img class="js-lightbox" src="<?php echo $item['image']['url'] ?>" alt="Double one">
      </div>
    <?php endforeach; ?>  
    </div>
    <svg class="art-single__slide-right" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 404.258 404.258" style="enable-background:new 0 0 404.258 404.258;" xml:space="preserve"><polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "/></svg>
  </div>


  <div class="art-single__title grid container">
    <h1 class="js-visibility reveal-slide"><?php echo $title ?></h1><svg xmlns="http://www.w3.org/2000/svg" width="156" height="217" viewBox="0 0 156 217"><g><g><g><path fill="red" d="M73.951 15.648L48.108 39.873l-5.596-5.97L78.048.592l35.526 33.31-5.598 5.97L82.14 15.645v123.53h-8.184z"/></g><g><path fill="red" d="M155.782 216.916H.303V61.436h57.282v8.184H8.486v139.113H147.6V69.62H98.5v-8.183h57.282z"/></g></g></g></svg>
  </div>
  <div class="animated-line__container">
    <div class="animated-line js-visibility animated-line-show"> </div>
  </div>
  <div class="art-single__details grid container">
    <div class="art-single__details-left">
      <p><?php echo $description ?></p>
    </div>
    <div class="art-single__details-right"> 
      <?php echo $details ?>
      <h4 class="art-single__line-after"><?php echo $shipping_text ?></h4>
    </div>
    <div class="art-single__details-btns js-visibility reveal-slide">
      <div class="art-single__details-btn">
        <p>Shipping options</p>
      </div>
      <div class="art-single__details-btn js-artworks-form">
        <p>Talk to artmother</p>
      </div>
    </div>
  </div>
</div>

<div class="art-single__popup">
  <div class="art-single__popup-inner"><svg id="Capa_1" enable-background="new 0 0 413.348 413.348" height="512" viewBox="0 0 413.348 413.348" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"/></svg>
    <h4>We'll help you choose the right shipping option for this work: we can arrange the shipping for you or if you'd prefer you can arrange collection yourself</h4>
    <div class="art-single__popup-form">
      <h4>For a purchase option with shipping quote</h4>
      <form action="">
        <label for="">First name*</label>
        <input type="text">
        <label for="">Surname* </label>
        <input type="text">
        <label for="">Contact email*</label>
        <input type="text">
        <label for="">Contact number*</label>
        <input type="text">
        <label for="">Delivery country*</label>
        <input type="text">
        <label for="">Delivery postcode*</label>
        <input type="text">
        <button>Send</button>
        <h4>If you'd prefer to discuss other options:</h4>
        <h5>Email us:</h5>
        <h5>collecting@artmother.com</h5>
        <h5>call us: 07007007000</h5>
      </form>
    </div>
  </div>
</div>