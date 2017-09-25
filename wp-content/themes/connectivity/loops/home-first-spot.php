<?php if( have_rows('add_content') ): ?>
    <?php while ( have_rows('add_content') ) : the_row(); ?>
    
        <?php if(get_row_layout() == "add_an_article"): ?>
        
            <?php $post_object = get_sub_field('add_an_article_article'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <?php if ( in_category( 'promotions' ) ) { ?>
                
                    <div class="item item<?php the_id(); ?>">
                
                        <div class="block image first" style="background-image: url(<?php echo esc_url( get_theme_mod( 'images_promotions' ) ); ?>)">
                        
                            <div class="ie">
                                <img src="<?php echo esc_url( get_theme_mod( 'images_promotions' ) ); ?>">
                            </div>
                            
                            <a href="<?php the_permalink(); ?>"><div class="read"><span>View Promotions</span></div></a>
                        
                            <div class="title">
                        
                                <h2>Univar <?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                                
                                <h3>View Current Promotions</h3>
                                
                                <div class="ie">
                                    <div class="clear"></div>
                                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">View Promotions</a>
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                    
                <?php } elseif ( in_category( 'customer-spotlight' ) ) { ?>
                
                    <div class="item item<?php the_id(); ?>">
                
                        <div class="block image first" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                        
                            <div class="ie">
                                <img src="<?php the_field('featured_image' ); ?>">
                            </div>
                            
                            <a href="<?php the_permalink(); ?>"><div class="read"><span>Read Article</span></div></a>
                        
                            <div class="title">
                        
                                <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                                <h3><?php the_title(); ?></h3>
                                
                                <div class="ie">
                                    <div class="clear"></div>
                                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                    
                <?php } elseif ( in_category( 'mr-pest-control' ) ) { ?>
                
                    <div class="item item<?php the_id(); ?>">
                    
                        <div class="block image first" style="background-image: url(<?php echo esc_url( get_theme_mod( 'images_expert' ) ); ?>)">
                        
                            <div class="ie">
                                <img src="<?php echo esc_url( get_theme_mod( 'images_expert' ) ); ?>">
                            </div>
                            
                            <a href="<?php the_permalink(); ?>"><div class="read"><span>Read Article</span></div></a>
                        
                            <div class="title">
                        
                                <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                                
                                <div class="ie">
                                    <div class="clear"></div>
                                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                
                <?php } elseif ( in_category( 'whats-new' ) ) { ?>
                
                    <div class="item item<?php the_id(); ?>">
                    
                        <div class="block image first" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                        
                            <div class="ie">
                                <img src="<?php the_field('featured_image' ); ?>">
                            </div>
                            
                            <a href="<?php the_permalink(); ?>"><div class="read"><span>Read Article</span></div></a>
                        
                            <div class="title">
                        
                                <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                                
                                <div class="ie">
                                    <div class="clear"></div>
                                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                    
                <?php } else { ?>
                
                    <div class="item item<?php the_id(); ?>">
                
                        <div class="block image first" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                        
                            <div class="ie">
                                <img src="<?php the_field('featured_image' ); ?>">
                            </div>
                            
                            <a href="<?php the_permalink(); ?>"><div class="read"><span>Read Article</span></div></a>
                        
                            <div class="title">
                            
                                <h2><?php the_title(); ?></h2>
                                
                                <?php if(get_field('subheadline' )) { ?>
                                    <h3><?php the_field('subheadline' ); ?></h3>
                                <?php } ?>
                                
                                <div class="ie">
                                    <div class="clear"></div>
                                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                
                <?php } ?>
                    
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>
        
        <?php if(get_row_layout() == "add_a_pom"): ?>
        
            <?php $post_object = get_sub_field('add_a_pom_pom'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <div class="item pom item<?php the_id(); ?>">
                
                    <div class="block image first" style="background-image: url(<?php the_field('pom_promotion_graphic' ); ?>)">
                    
                        <div class="ie">
                            <img src="<?php the_field('pom_promotion_graphic' ); ?>">
                        </div>
                        
                        <a href="<?php the_permalink(); ?>"><div class="read"><span>View Promotion Details</span></div></a>
                    
                        <div class="title">
                    
                            <h2><?php $obj = get_post_type_object( 'pom' ); echo $obj->labels->singular_name; ?></h2>
                            <h3><?php the_field('pom_product_name'); ?></h3>
                            
                            <div class="ie">
                                <div class="clear"></div>
                                <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">View Promotions</a>
                            </div>
                        
                        </div>
                    
                    </div>
                
                </div>
            
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>