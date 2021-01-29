

<?php 
  $featured = get_field('featured_artist');
?>

<?php
$loop = new WP_Query(
  array(
      'post_type' => 'artist', // This is the name of your post type - change this as required,
      'posts_per_page' => -1,    
  )
);
while ( $loop->have_posts() ) : $loop->the_post();
// The content you want to loop goes in here:
?>

  <?php 
    $title = get_the_title();


    if ($featured->post_title == $title ){
      the_content(); 
    }else{
      echo $title;
    }
  
  ?>

<?php endwhile;
wp_reset_postdata();
?>
</div>