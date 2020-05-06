<?php
get_header(); 
pageBanner(array(
  'title' => 'All Restaurants',
  'subtitle' => 'Every single listing'
));
?>



<div class="container container--narrow page-section">

<!-- <ul class="link-list min-list"> -->

<?php
  while( have_posts() ) {
    the_post(); 
    //pulls in the template to display links in the list  
    get_template_part('/template-parts/content', 'restaurant-list');
  
  }
    echo paginate_links();
  ?>
<!-- </ul> -->

</div>


<?php
get_footer();
?>