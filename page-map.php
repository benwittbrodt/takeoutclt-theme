<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/skyline-hero.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
      </div>  
    </div>
<div class="container container--narrow page-section">
<p>The Map is broken up into clusters to improve responsiveness. Just zoom into your area (or tap on a cluster to zoom in) and the available options will expand</p>
</div>

<style>
    .container--map {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 900px;
    }
</style>

  <div class="container container--map">

  <iframe id="full_map"
        title="full_map"
        width="85%"
        height="100%"
        src="https://wittdata.com/matt/charlotte_covid19_map_clusters.html"
        >
    </iframe> 
        
  </div>
    
  <?php }

  get_footer();

?>