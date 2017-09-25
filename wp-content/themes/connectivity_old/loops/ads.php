<?php query_posts(array('showposts', 'posts_per_page'=> '1', 'post_type'=> 'issues')); while (have_posts()) { the_post(); ?>

    <?php if( have_rows('add_ads') ): ?>
        <?php while ( have_rows('add_ads') ) : the_row(); ?>
        
            <?php if(get_row_layout() == "add_an_ad"): ?>
            
                <?php $post_object = get_sub_field('add_an_ad'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                
                    <div class="package-one">
                
                        <?php include (TEMPLATEPATH . '/loops/ads-ad.php' ); ?>
                    
                    </div>
                        
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            
            <?php endif; ?>
    
        <?php endwhile; ?>
    <?php endif; ?>
    
    <!-- // -->

<?php } ?>