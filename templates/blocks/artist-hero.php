
<?php 
  $first = get_field('artist_first_name');
  $second = get_field('artist_second_name');
  $image = get_field('image');
  $copy = get_field('copy');
?>






<section class="artist-hero">
  <div class="animated-line__container">
    <div class="animated-line js-visibility animated-line-show"> </div>
  </div>
  <div class="artist-hero__inner container">
    <div class="artist-hero__title grid js-visibility reveal-slide">
      <div class="artist-hero__name reveal-container">
        <h1 class="artist-hero__first-name js-visibility reveal-text"><?php echo $first ?></h1>
      </div>
      <div class="artist-hero__name reveal-container">
        <h1 class="artist-hero__second-name js-visibility reveal-text"><?php echo $second ?></h1>
      </div>
    </div>
    <div class="artist-hero__image-text grid"> 
      <div class="artist-hero__image-wrap">
      <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']); ?>  
        <!-- <img src="./img/double-one.jpg" alt=""> -->
      </div>
      <div class="artist-hero__text-wrap"> 
        <h3><?php echo $copy ?></h3>
      </div>
    </div>
  </div>
</section>
<div class="artist-hero__height">
  <div class="artist-hero__arrow"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512.011 512.011" style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve"><g>	<g>		<path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0			s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667			C514.096,145.416,514.096,131.933,505.755,123.592z"/>	</g></svg></div>
</div>