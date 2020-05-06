<?php
get_header(); 
pageBanner(array(
  'title' => 'All Neighborhoods'
));
?>

<div class="container container--narrow page-section">

  <ul class="link-list min-list archive-results-mobile">

    <?php
      //Custom query to check for what restaurants are in the neighborhood
      $hoods = new WP_Query(array(
        'posts_per_page' => 30,
        'paged' => get_query_var('paged', 1),
        'post_type' => 'neighborhood',      
        'order' => 'ASC',
        'orderby' => 'title'
      )); 

      while ($hoods->have_posts()) {
        $hoods->the_post();  ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        
      <?php } ?>
    <p class="headline--tiny">
      <?php
      echo paginate_links(array(
        'total' => $hoods->max_num_pages));
      ?>
    </p>
  </ul>

<?php wp_reset_postdata(); ?>

<?php 
$col = new WP_Query(array(
  'post_type' => 'neighborhood',   
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
        foreach ($rows as $row)
        {
            if (false == isset($row[$column]))
            {
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