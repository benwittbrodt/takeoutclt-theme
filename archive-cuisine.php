<?php
get_header(); 
pageBanner(array(
  'title' => 'All Cuisines'
));
?>

<div class="container container--narrow page-section">

  <ul class="link-list min-list archive-results-mobile">

    <?php
      //Custom query to check for what restaurants are in the neighborhood
      $cuisines = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'cuisine',      
        'order' => 'ASC',
        'orderby' => 'title'
      )); 

      while ( $cuisines->have_posts() ) {
        $cuisines->the_post(); ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        
      <?php } ?>
  </ul>

  <?php wp_reset_postdata(); ?>

  <?php 
  $col = new WP_Query(array(
    'post_type' => 'cuisine',   
    'posts_per_page' => -1,
    'paged' => get_query_var('paged', 1),   
    'order' => 'ASC',
    'orderby' => 'title'
  ));
  ?>

  <?php
  if ($col->have_posts())
  {
      $columnCount = 3;
      $rows = array_chunk($col->get_posts(), $columnCount);
      foreach (range(0, $columnCount - 1) as $column)
      {
        echo '<div class="archive-results-desktop link-list min-list column_' . ($column + 1) . '">';
          foreach ($rows as $row) {
            
            if (false == isset($row[$column])) {
              continue;
            }
          
            $post = $row[$column];
            setup_postdata($post);
  ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php            
          }
          echo "</div>";
      }
  } ?>

</div>

<?php
get_footer();
?>
