<?php if( have_rows('add_content') ): ?>
    <?php while ( have_rows('add_content') ) : the_row(); ?>
    
        <?php if(get_row_layout() == "add_an_article"): ?>
        
            <?php $post_object = get_sub_field('add_an_article_article'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <?php if ( in_category( 'customer-spotlight' ) ) { ?>
                
                    <div class="item">
                
                        <div class="block image border" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                        
                        <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                        <h3><?php the_title(); ?></h3>
                        
                        <?php the_excerpt(); ?>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                        
                        <div class="clear"></div>
                    
                    </div>
                    
                <?php } elseif ( in_category( 'mr-pest-control' ) ) { ?>
                
                    <div class="item">
                
                        <div class="block image border" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                        
                        <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                        
                        <?php if( have_rows('question_and_answer') ): ?>
                            <div class="excerpt">
                                <?php while ( have_rows('question_and_answer') ) : the_row(); ?>
                            
                                    <?php if(get_row_layout() == "add_a_question"): ?>
                                
                                        <?php the_sub_field('add_a_question_question'); ?>
                                    
                                    <?php endif; ?>
                                
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                            
                        <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                        
                        <div class="clear"></div>
                    
                    </div>
                
                <?php } elseif ( in_category( 'whats-new' ) ) { ?>
                
                    <div class="item">
                    
                        <div class="block image border" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                
                        <h2><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h2>
                        
                        <?php if( have_rows('add_an_item') ): ?>
                            <div class="excerpt">
                                <?php while ( have_rows('add_an_item') ) : the_row(); ?>
                            
                                    <?php if(get_row_layout() == "add_an_item"): ?>
                                
                                        <?php the_sub_field('add_an_item_content'); ?>
                                    
                                    <?php endif; ?>
                                
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                        
                        <div class="clear"></div>
                    
                    </div>
                    
                <?php } else { ?>
                
                    <div class="item">
                
                        <div class="block image border" style="background-image: url(<?php the_field('featured_image' ); ?>)">
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                        
                        <h2><?php the_title(); ?></h2>
                        
                        <?php if(get_field('subheadline' )) { ?>
                            <h3><?php the_field('subheadline' ); ?></h3>
                        <?php } ?>
                        
                        <?php the_excerpt(); ?>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read Article</a>
                        
                        <div class="clear"></div>
                    
                    </div>
                
                <?php } ?>
                    
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>
        
        <?php if(get_row_layout() == "add_a_pom"): ?>
        
            <?php $post_object = get_sub_field('add_a_pom_pom'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
            
                <div class="item pom">
            
                    <div class="block image border" style="background-image: url(<?php the_field('pom_promotion_graphic' ); ?>)">
                        <a href="<?php the_permalink(); ?>"></a>
                    </div>
            
                    <h2><?php $obj = get_post_type_object( 'pom' ); echo $obj->labels->singular_name; ?></h2>
                    <h3><?php the_field('pom_product_name'); ?></h3>
                    
                    <?php the_field('pom_product_details'); ?>
                    
                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">View Promotion Details</a>
                    
                    <div class="clear"></div>
                
                </div>
            
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>