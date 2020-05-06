<?php
get_header();

while(have_posts()){
    the_post(); 
    pageBanner();
    ?>
    
    <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('restaurant'); ?>"><i class="fa fa-home" aria-hidden="true"></i> All Restaurants</a> <span class="metabox__main"><?php the_title(); ?> </span></p>
    </div> 
        <div class="page-links">
            <?php if (! is_post_type_archive()) the_post_thumbnail('medium'); ?>
        </div>

        <div class="generic-content"><?php the_content(); ?></div>
        <?php if ( get_field('phone_number') ) {
        ?>
            <h3><i class="fa fa-phone" aria-hidden="true"></i> - <?php the_field('phone_number');?></h3>
        <?php  } ?>
        
        <h3 class="headline--small-plus-alt">Offering</h3>
        <hr>
        <?php 
            //Checks for and displays delivery type
            $options = get_field('food_availability');
            if ( $options ) { ?>
            <ul class="min-list headline--small-plus-alt">
                <?php  
               foreach($options as $type) { 
                   if ( $type == 'Take Out' ) { ?>
                    <li><i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo $type; ?></li>
                   <?php } 
                   if ( $type == 'Delivery' ) { ?>
                    <li><i class="fa fa-truck" aria-hidden="true"></i> <?php echo $type; ?></li>
                   <?php } 
                   if ( $type == 'Curb-Side' ) { ?>
                    <li><i class="fa fa-car" aria-hidden="true"></i> <?php echo $type; ?></li>
                   <?php } 
                }
               ?>
            </ul>
            <?php }
        ?>
        
        <br>
        <ul class="min-list social-icons-list group">

            <?php 
                //Creates social media links only if they exist for the entry  
                if ( get_field('website') ) {
            ?>
                <li><a href="<?php echo get_field('website');?>" target="_blank" class="social-color-website"><i class="fa fa-external-link" aria-hidden="true"></i></a></li>
            <?php }

                if ( get_field('facebook') ) {
            ?>
                <li><a href="<?php echo get_field('facebook');?>" target="_blank" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <?php }
            
                if ( get_field('instagram') ) {
            ?>
                <li><a href="<?php echo get_field('instagram');?>" target="_blank" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <?php }
            
                if ( get_field('twitter') ) {
            ?>
                <li><a href="<?php echo get_field('twitter');?>" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <?php } 
            ?>
        
        </ul>
       <?php $api = 'AIzaSyDrNsup_wGpCdCSScc_ICkcrp1_hjJSp7M'; ?>
        <div id="gmap" style="margin-top:20px"></div>
        <iframe width="600px" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo get_field('address'); ?>&key=<?php echo $api; ?>" allowfullscreen></iframe>

        <hr class="section-break">


        <?php 
        //outputs the related cuisine types
        $food = get_field('cuisine_type');
        
        if ( $food ) {    
            echo '<h3 class="headline--small-plus-alt">Cuisine</h3>';
            echo '<ul class="link-list min-list">';
            foreach ( $food as $data ) {
            ?>
            <li><a href="<?php echo get_the_permalink( $data );?>"><?php echo get_the_title( $data ); ?></a></li>
        <?php 
            } 
        }
        
        //outputs the neighborhoods that the restaurant is located in
        $relatedNeighborhood = get_field('related_neighborhood');

        if ( $relatedNeighborhood ) {
           
            echo '<h3 class="headline--small-plus-alt">Located in these Neighborhoods</h3>';
            echo '<ul class="link-list min-list">';
            foreach ($relatedNeighborhood as $hood) {
        ?>
            <li><a href="<?php echo get_the_permalink( $hood );?>"><?php echo get_the_title( $hood ); ?></a></li>
        <?php    
            }
            echo '</ul>';
        }
        ?>

</div>

<?php }

get_footer();

?>