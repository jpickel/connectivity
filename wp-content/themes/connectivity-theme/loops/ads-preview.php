<?php if( have_rows('add_ads') ): ?>
    <?php while ( have_rows('add_ads') ) : the_row(); ?>
    
        <?php if(get_row_layout() == "add_an_ad"): ?>
        
            <?php $post_object = get_sub_field('add_an_ad'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <div class="col-md-12">
                
                    <h3><?php the_field('manufacturer'); ?></h3>
                    
                    <?php if(get_field('top_placement_collateral' )) { ?>
                    
                        <div class="col-md-12">
                            <img src="<?php the_field('top_placement_collateral'); ?>">
                            <a href="<?php the_field('top_placement_url'); ?>"><?php the_field('top_placement_url'); ?></a>
                        </div>
                        
                    <?php } ?>
                    
                    <?php if(get_field('secondary_placement_collateral' )) { ?>
                    
                        <div class="col-md-12">
                            <img src="<?php the_field('secondary_placement_collateral'); ?>">
                            <a href="<?php the_field('secondary_placement_url'); ?>"><?php the_field('secondary_placement_url'); ?></a>
                        </div>
                        
                    <?php } ?>
                    
                    <?php if(get_field('tertiary_placement_collateral' )) { ?>
                    
                        <div class="col-md-12">
                            <img src="<?php the_field('tertiary_placement_collateral'); ?>">
                            <a href="<?php the_field('tertiary_placement_url'); ?>"><?php the_field('tertiary_placement_url'); ?></a>
                        </div>
                    
                    <?php } ?>
                    
                </div>
                    
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>