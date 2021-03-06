<?php 
    $cat = get_field('category');
    $title = get_field('title');
    $args = array(
      'post_type' => 'artist',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'tax_query' => array(),
    );
    $query = new WP_Query($args);
?>

<section class="artists">
  <div class="artists__inner grid container">
    <h1>Artists</h1>
    <div class="artists__search-bar">
      <input id="artists__search-input" type="text"><svg xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84 86"><g><g><path d="M54.574 62.184a34.048 34.048 0 0 1-20.391 6.74c-18.88 0-34.186-15.296-34.186-34.164C-.003 15.89 15.302.594 34.183.594c18.88 0 34.187 15.297 34.187 34.166 0 8.153-2.858 15.639-7.627 21.512l21.408 22.523a4.269 4.269 0 0 1-.155 6.038 4.275 4.275 0 0 1-6.042-.155zm5.249-27.424c0-14.152-11.48-25.624-25.64-25.624S8.543 20.608 8.543 34.76c0 14.151 11.48 25.623 25.64 25.623s25.64-11.472 25.64-25.623z"/></g></g></svg>
    </div>
  </div>
  <div id="artist__search"> 
    <ul class="artists__grid grid container list"> 
    <?php if($query->have_posts()) {
            while($query->have_posts()) {
              $query->the_post(); 
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
              ?>            
      <li class="artists__item">
        <div class="artists__img-container"><img class="js-lightbox" src="<?php echo $image[0] ?>" alt="Double two"></div>
        <img src="<?php echo $image ?>" alt="">
        <p class="artist-name"><?php the_title() ?></p><a href="/">
          <div class="artists__btn">
            <p>All works</p>
          </div></a>
      </li>
    <?php }} ?>
    </ul>
  </div>
</section>

