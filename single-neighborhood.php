<?php
get_header();

while(have_posts()){
    the_post(); 
    pageBanner();
    ?>
    
    <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('neighborhood'); ?>"><i class="fa fa-home" aria-hidden="true"></i> All Neighborhoods</a> <span class="metabox__main"><?php the_title(); ?> </span></p>
        </div> 
        <div class="generic-content"><?php the_content(); ?></div>

    <?php 
        
        //Custom query to check for what restaurants are in the neighborhood
        $restaurants = new WP_Query(array(
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'post_type' => 'restaurant',      
        'meta_query' => array(
            array(
                'key' => 'related_neighborhood',
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"'
            )
          )
        )); 

        //Creates list of every restaurant located within that neighborhood
        if ( $restaurants->have_posts() ) {

            echo '<ul>';

            while ($restaurants->have_posts()) {
                $restaurants->the_post(); 
                
                //pulls in the template to display links in the list  
                get_template_part('/template-parts/content', 'restaurant-list');
            
            }
            
            echo '</ul>';
        } 
        ?>
     
</div>

<?php }

get_footer();

?>