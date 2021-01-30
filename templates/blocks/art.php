<?php 
    $cat = get_field('category');
    $title = get_field('title');
    $args = array(
      'post_type' => 'artwork',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'tax_query' => array(),
    );
    $query = new WP_Query($args);
?>




<section class="artists">
        <div class="artists__inner grid container">
          <h1 class="js-artist-title">Artworks</h1>
          <div class="artists__search-bar">
            <input id="art__search-input" type="text"><svg xmlns="http://www.w3.org/2000/svg" width="84" height="86" viewBox="0 0 84 86"><g><g><path d="M54.574 62.184a34.048 34.048 0 0 1-20.391 6.74c-18.88 0-34.186-15.296-34.186-34.164C-.003 15.89 15.302.594 34.183.594c18.88 0 34.187 15.297 34.187 34.166 0 8.153-2.858 15.639-7.627 21.512l21.408 22.523a4.269 4.269 0 0 1-.155 6.038 4.275 4.275 0 0 1-6.042-.155zm5.249-27.424c0-14.152-11.48-25.624-25.64-25.624S8.543 20.608 8.543 34.76c0 14.151 11.48 25.623 25.64 25.623s25.64-11.472 25.64-25.623z"/></g></g></svg>
          </div>
          <div class="art__options">
            <div class="art__filter btn">
              <p>Filter</p>
            </div>
            <div class="art__sort btn">
              <p>Sort</p>
            </div>
          </div>
        </div>
        <div class="art__filter-conatainer container">
          <div class="art__filter-item">
            <h1>medium</h1>
            <div class="art__filter-medium art__filter-radios" data-category="medium">
              <div class="art__filter-radio-container">
                <input type="radio" id="all medium" name="medium" all="true" checked>
                <label for="all medium">All</label>
              </div>
            </div>
          </div>
          <div class="art__filter-item">
            <h1>price</h1>
            <div class="art__filter-price art__filter-radios" data-category="price">
              <div class="art__filter-radio-container">
                <input type="radio" id="all price" name="price" all="true" checked>
                <label for="all price">All      </label>
              </div>
            </div>
          </div>
          <div class="art__filter-item">
            <h1>size</h1>
            <div class="art__filter-size art__filter-radios" data-category="size">
              <div class="art__filter-radio-container">
                <input type="radio" id="all size" name="size" all="true" checked>
                <label for="all size">All</label>
              </div>
            </div>
          </div>
        </div>
        <div class="art__sort-conatainer container">
          <div class="art__sort-options">
            <p>- Default</p>
            <p>- Price ascending</p>
            <p>- Price descending</p>
            <p>- Earliest work first</p>
            <p>- Latest work first</p>
          </div>
        </div>
        <div id="items">   
          <ul class="art__grid grid container list">     
            
          



          <?php if($query->have_posts()) {
            while($query->have_posts()) {
              $query->the_post(); 
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
              $artworkPrice = get_the_terms( $post, 'artwork_price' ); 
              $artworkSize = get_the_terms( $post, 'artwork_size' ); 
              $artworkMedium = get_the_terms( $post, 'artwork_medium' );
              $artworkArtist = get_post_meta(get_the_id(), 'link_an_artist');            
              ?>
            <li class="art__item" 
              data-medium="<?php echo $artworkMedium[0]->name?>" 
              data-price="<?php echo $artworkPrice[0]->name?>" 
              data-size="<?php echo $artworkSize[0]->name?>"
              data-artist="<?php echo $artworkArtist[0]?>"
              data-artistTitle="<?php echo get_the_title($artworkArtist[0])?>">
              <a href="<?php the_permalink() ?>">
   
              <div class="content">
                <div class="art__img-container"><img src="<?php echo $image[0] ?>" alt="Double two"></div>
                <h5 class="art-name"><?php the_title() ?></h5>
              </div>
              </a>
            </li>
            <?php }} ?>
          </ul>
        </div>
      </section>




