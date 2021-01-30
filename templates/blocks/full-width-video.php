<?php 
  $upload_a_video = get_field('upload_a_video');
  $headline = get_field('headline');
  $credits = get_field('credits');
?>

<section class="full-width-video">
  <div class="full-width-video__inner container grid">
    <div class="full-width-video__video-container"><svg class="full-width-video__play" width="395" height="389" viewBox="0 0 395 389" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M394.607 198.59C394.607 305.921 306.562 390.879 197.553 388.733C88.545 386.587 0.5 298.163 0.5 190.833C0.5 83.5 88.545 -1.45803 197.553 0.687969C305.723 2.81797 394.607 91.259 394.607 198.59ZM25.655 191.327C25.655 284.623 102.8 362.099 197.553 363.964C292.307 365.83 369.451 291.391 369.451 198.094C369.451 104.799 292.307 27.323 197.553 25.458C102.8 23.593 25.655 98.032 25.655 191.328V191.327ZM139.87 109L293 198.094L139.87 280V109Z" fill="white"/></svg>
      <svg class="full-width-video__pause" width="395" height="389" viewBox="0 0 395 389" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M394.737 198.59C394.737 305.921 306.692 390.879 197.683 388.733C88.6749 386.587 0.629883 298.163 0.629883 190.833C0.629883 83.5 88.6749 -1.45803 197.683 0.687969C305.853 2.81797 394.737 91.259 394.737 198.59ZM25.7849 191.327C25.7849 284.623 102.93 362.099 197.683 363.964C292.437 365.83 369.581 291.391 369.581 198.094C369.581 104.799 292.437 27.323 197.683 25.458C102.93 23.593 25.7849 98.032 25.7849 191.328V191.327ZM126.408 114.874L176.72 115.864V272.733L126.408 271.743V114.874ZM218.646 116.689L268.958 117.679V274.549L218.646 273.559V116.689Z" fill="white"/></svg>
      <video id="myVideo">
        <source src="<?php echo $upload_a_video['url'] ?>" type="video/mp4">
      </video>
    </div>
  </div>
  <div class="full-width-video__text-wrap container grid">
    <h2><?php echo $headline ?></h2>
    <div class="full-width-video__info">
      <h5><?php echo $credits ?></h5><svg xmlns="http://www.w3.org/2000/svg" width="156" height="217" viewBox="0 0 156 217"><g><g><g><path fill="red" d="M73.951 15.648L48.108 39.873l-5.596-5.97L78.048.592l35.526 33.31-5.598 5.97L82.14 15.645v123.53h-8.184z"/></g><g><path fill="red" d="M155.782 216.916H.303V61.436h57.282v8.184H8.486v139.113H147.6V69.62H98.5v-8.183h57.282z"/></g></g></g></svg>
    </div>
  </div>
  <div class="animated-line__container">
    <div class="animated-line js-visibility animated-line-show"> </div>
  </div>
</section>
