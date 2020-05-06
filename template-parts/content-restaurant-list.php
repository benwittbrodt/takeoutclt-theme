<div class="event-summary">  
    <a class="event-summary__cuisine t-center" href="<?php echo get_the_permalink();?>"><?php the_post_thumbnail('listingLogo');?></a>
    <div class="event-summary__content">
        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?> "><?php the_title(); ?></a></h5>
        <p><?php 
            if (has_excerpt() ) {
                echo wp_trim_words(get_the_excerpt(), 10);
            } else {
                echo wp_trim_words(get_the_content(), 10);
            } ?> <a href="<?php the_permalink();?> " class="nu gray">Read more</a></p>
    </div>
</div>