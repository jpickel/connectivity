<?php if (have_posts()) : while (have_posts()) : the_post();?>

   <?php if(get_field('hide_ads' )) { ?>
        <style><!--
            .secondary .ad {
                display: none !important;
            }
            .secondary .main-column {
                margin-top:  40px;
            }
        --></style>
    <?php } ?>

    <?php if ( in_category( 'customer-spotlight' ) ) { ?>
    
        <div class="col-sm-12">
            <div class="ad leaderboard">
                <?php include (TEMPLATEPATH . '/ads/leaderboard.php' ); ?>
            </div>
        </div>
    
        <div class="col-sm-8 main-column spotlight <?php if(get_field('hide_ads' )) { ?>col-sm-offset-2<?php } ?>">
        
            <p class="category"><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></p>
            <h1><?php the_title(); ?></h1>
            
            <?php if(get_field('subheadline' )) { ?>
                <h2><?php the_field('subheadline' ); ?></h2>
            <?php } ?>
            
            <?php if(get_field('customers_location' )) { ?>
                <h3><?php the_field('customers_location' ); ?></h3>
            <?php } ?>
            
            <hr>
            
            <div class="image">
                <img src="<?php the_field('featured_image' ); ?>">
            </div>
            
            <?php the_excerpt(); ?>
            
            <div class="ad block">
                <?php include (TEMPLATEPATH . '/ads/block.php' ); ?>
            </div>
            
            <div class="full-content">
                <?php the_content(); ?>
            </div>
        
        </div>
        
        <div class="connect-ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </div>
    
    <?php } elseif ( in_category( 'mr-pest-control' ) ) { ?>
    
        <div class="col-sm-12">
            <div class="ad leaderboard">
                <?php include (TEMPLATEPATH . '/ads/leaderboard.php' ); ?>
            </div>
        </div>
    
        <div class="col-sm-8 main-column expert <?php if(get_field('hide_ads' )) { ?>col-sm-offset-2<?php } ?>">
        
            <h1><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h1>
            
            <hr>
            
            <div class="image">
                <img src="<?php echo esc_url( get_theme_mod( 'images_expert' ) ); ?>">
            </div>
            
            <?php $counter = 0; ?>
            
            <?php if( have_rows('question_and_answer') ): ?>
                <?php while ( have_rows('question_and_answer') ) : the_row(); ?>
                
                    <?php if(get_row_layout() == "add_a_question"): ?>
                    
                        <div class="question">
                            <div class="col-xs-2">
                                <span class="letter">Q:</span>
                            </div>
                            <div class="col-xs-10">
                                <?php the_sub_field('add_a_question_question'); ?>
                                <?php if(get_sub_field('add_a_question_byline' )) { ?>
                                    <span class="byline"><?php the_sub_field('add_a_question_byline'); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        
                        <div class="clear"></div>
                        
                        <div class="answer">
                            <div class="col-xs-2">
                                <span class="letter">A:</span>
                            </div>
                            <div class="col-xs-10">
                                <?php the_sub_field('add_a_question_answer'); ?>
                            </div>
                        </div>
                        
                        <div class="ad block placement<?php echo $counter ?>">
                            <?php include (TEMPLATEPATH . '/ads/block.php' ); ?>
                        </div>
                        
                        <div class="clear"></div>
                        
                        <?php $counter++; ?>
                    
                    <?php endif; ?>
                
                <?php endwhile; ?>
            <?php endif; ?>
            
            <div class="legal">
            
                <p>Want to see more questions and answers? Log on to <a href="http://pestweb.com" target="_blank">PestWeb.com</a> and click on Mr. Pest Control or follow <a href="https://twitter.com/MrPestControl" target="_blank">@MrPestControl</a> on Twitter<sup>&reg;</sup>.</p>
                <p>Please note, Mr. Pest Control is answering questions supplied by PMP customers across North America. The answers are generated from industry and manufacturer-provided information. The answer may not be specific to the laws and regulations for your State, Province, Territory or Country. In addition, products mentioned may not be registered and/or available in all areas. Always check with your local Univar office for specific information to your area. Always read and follow label directions.</p>
            
            </div>
        
        </div>
        
        <div class="connect-ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </div>
    
    <?php } elseif ( in_category( 'whats-new' ) ) { ?>
    
        <div class="col-sm-12">
            <div class="ad leaderboard">
                <?php include (TEMPLATEPATH . '/ads/leaderboard.php' ); ?>
            </div>
        </div>
    
        <div class="col-sm-8 main-column whats-new <?php if(get_field('hide_ads' )) { ?>col-sm-offset-2<?php } ?>">
        
            <h1><?php $cat = get_the_category(); $cat = $cat[0]; echo $cat->cat_name; ?></h1>
            
            <hr>
            
            <?php $counter = 0; ?>
            
            <?php if(get_field('featured_image' )) { ?>
                <img src="<?php the_field('featured_image' ); ?>">
            <?php } ?>
            
            <br><br>
            
            <?php if( have_rows('add_an_item') ): ?>
                <?php while ( have_rows('add_an_item') ) : the_row(); ?>
                
                    <?php if(get_row_layout() == "add_an_item"): ?>
                    
                        <h2><?php the_sub_field('add_an_item_title'); ?></h2>
                        
                        <?php the_sub_field('add_an_item_content'); ?>
                        
                        <div class="ad block placement<?php echo $counter ?>">
                            <?php include (TEMPLATEPATH . '/ads/block.php' ); ?>
                        </div>
                        
                        <div class="clear"></div>
                        
                        <?php $counter++; ?>
                    
                    <?php endif; ?>
                
                <?php endwhile; ?>
            <?php endif; ?>
        
        </div>
        
        <div class="connect-ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </div>
        
    <?php } elseif ( in_category( 'promotions' ) ) { ?>
    	<?php include (TEMPLATEPATH . '/promotions/promotions.php' ); ?>
    <?php get_post_type( $post ) ?>
    <?php } elseif ( 'pom' == get_post_type() ) { ?>
    
        <div class="col-sm-8 col-sm-offset-2 pom">
        
            <h1><?php the_field('pom_article_title'); ?></h1>
        
            <div class="image">
                <a href="<?php the_field('pom_product_link'); ?>"><img src="<?php the_field('pom_promotion_graphic' ); ?>"></a>
            </div>
            
            <div class="details">
            
                <div class="col-sm-8 exclusive">
                    <p class="headline">Exclusive Product of the Month Promotion only at</p>
                    <p class="dates">Offer valid <?php the_field('pom_promotion_date'); ?></p>
                </div>
                
                <div class="col-sm-4 logo univar">
                    <img src="<?php bloginfo('template_directory'); ?>/images/univar-logo.png">
                </div>
                
                <div class="clear"></div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="content">
                <p class="aligncenter"><a href="<?php the_field('pom_product_link'); ?>" class="read-more btn btn-primary">View This Product on PestWeb</a></p>
                <div class="clear gap"></div>
                <?php the_field('pom_article_content'); ?>
            </div>
            
            <?php if(get_field('pom_article_fine_print' )) { ?>
                <div class="disclaimer">
                    <?php the_field('pom_article_fine_print'); ?>
                </div>
            <?php } ?>
            
            <div class="legal">
                <p><?php echo get_theme_mod( 'pom_disclaimer' ); ?></p>
            </div>
        
        </div>
    
    <?php } else { ?>
    
        <div class="col-sm-12">
            <div class="ad leaderboard">
                <?php include (TEMPLATEPATH . '/ads/leaderboard.php' ); ?>
            </div>
        </div>
    
        <div class="col-sm-8 main-column <?php if(get_field('hide_ads' )) { ?>col-sm-offset-2<?php } ?>">
        
            <h1><?php the_title(); ?></h1>
            
            <?php if(get_field('subheadline' )) { ?>
                <h2><?php the_field('subheadline' ); ?></h2>
            <?php } ?>
            
            <hr>
            
            <div class="image">
                <img src="<?php the_field('featured_image' ); ?>">
            </div>
            
            <?php the_excerpt(); ?>
            
            <div class="ad block">
                <?php include (TEMPLATEPATH . '/ads/block.php' ); ?>
            </div>
            
            <div class="full-content">
                <?php the_content(); ?>
            </div>
        
        </div>
        
        <div class="connect-ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </div>
    
    <?php } ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>
