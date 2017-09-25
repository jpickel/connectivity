<?php if( have_rows('add_content') ): ?>
    <?php while ( have_rows('add_content') ) : the_row(); ?>
    
        <?php if(get_row_layout() == "add_an_article"): ?>
        
            <?php $post_object = get_sub_field('add_an_article_article'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <?php if ( in_category( 'customer-spotlight' ) ) { ?>
                
                    <div class="item">
                
                        <a href="<?php the_permalink(); ?>">
                        <div class="block image" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <div class="block color"></div>
                        
                            <div class="title">
                        
                                <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                                <h3><?php the_title(); ?></h3>
                            
                            </div>
                        
                        </div>
                        </a>
                    
                    </div>
                    
                <?php } elseif ( in_category( 'mr-pest-control' ) ) { ?>
                
                    <div class="item">
                    
                        <a href="<?php the_permalink(); ?>">
                        <div class="block image" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <div class="block color"></div>
                        
                            <div class="title">
                        
                                <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                            
                            </div>
                        
                        </div>
                        </a>
                    
                    </div>
                
                <?php } elseif ( in_category( 'whats-new' ) ) { ?>
                
                    <div class="item">
                    
                        <a href="<?php the_permalink(); ?>">
                        <div class="block image" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <div class="block color"></div>
                        
                            <div class="title">
                        
                                <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                            
                            </div>
                        
                        </div>
                        </a>
                    
                    </div>
                    
                <?php } else { ?>
                
                    <div class="item">
                
                        <a href="<?php the_permalink(); ?>">
                        <div class="block image" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <div class="block color"></div>
                        
                            <div class="title">
                            
                                <h2><?php the_title(); ?></h2>
                                
                                <?php if(get_field('subheadline' )) { ?>
                                    <h3><?php the_field('subheadline' ); ?></h3>
                                <?php } ?>
                            
                            </div>
                        
                        </div>
                        </a>
                    
                    </div>
                
                <?php } ?>
                    
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>
        
        <?php if(get_row_layout() == "add_a_pom"): ?>
        
            <?php $post_object = get_sub_field('add_a_pom_pom'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <div class="item pom">
                
                    <a href="<?php the_permalink(); ?>">
                    <div class="block image" style="background-image: url(<?php the_field('pom_promotion_graphic' ); ?>)">
                        <div class="block color"></div>
                    
                        <div class="title">
                    
                            <h2><?php $obj = get_post_type_object( 'pom' ); echo $obj->labels->singular_name; ?></h2>
                            <h3><?php the_field('pom_product_name'); ?></h3>
                        
                        </div>
                    
                    </div>
                    </a>
                
                </div>
            
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>