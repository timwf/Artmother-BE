

<?php 
  $include_giant_hyphen = get_field('include_giant_hyphen');
  $copy = get_field('copy');
  $make_quote_full_width = get_field('make_quote_full_width');

?>


<?php if ($include_giant_hyphen){ ?>
  <div class="animated-line__container">
    <div class="animated-line js-visibility animated-line-show"> </div>
  </div>
<?php } ?>

<section class="author-quote">
  <div class="author-quote__inner grid container js-visibility reveal-slide">
    <h3 class=" <?php if($make_quote_full_width){ ?>full-width <?php } ?>"><?php  echo $copy ?></h3>
  </div>
</section>