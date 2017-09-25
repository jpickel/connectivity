<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
        
        <ad id="ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </ad>
    
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
                <img src="<?php the_field('featured_image' ); ?>">
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
                                <span class="byline"><?php the_sub_field('add_a_question_byline'); ?></span>
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
        
        </div>
        
        <ad id="ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </ad>
    
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
        
        <ad id="ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </ad>
        
    <?php } elseif ( in_category( 'promotions' ) ) { ?>
    
        <div class="col-sm-8 col-sm-offset-2 promotions">
        
            <h1>Univar Promotions</h1>
            
            <!--
                API URL: <?php echo get_theme_mod( 'api_link' ); ?>
            -->
            
            <div class="details">
            
                <div class="col-xs-12 item">
                    <div class="col-xs-4">
                        <a href="http://pestweb.com/promotions/a0299c"><img src="http://pestweb.com/assets/images/promotions/thumbnails/March_POM.png"></a>
                    </div>
                    <div class="col-xs-8">
                        <h2><a href="http://pestweb.com/promotions/a0299c">March Product of the Month</a></h2>
                        <p>Check out these savings exclusively from Univar!</p>
                        <p><a href="http://pestweb.com/promotions/a0299c" class="read-more btn btn-primary">View Details</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                
                <div class="col-xs-12 item">
                    <div class="col-xs-4">
                        <a href="http://pestweb.com/promotions/a0299c"><img src="http://pestweb.com/assets/images/promotions/thumbnails/March_POM.png"></a>
                    </div>
                    <div class="col-xs-8">
                        <h2><a href="http://pestweb.com/promotions/a0299c">March Product of the Month</a></h2>
                        <p>Check out these savings exclusively from Univar!</p>
                        <p><a href="http://pestweb.com/promotions/a0299c" class="read-more btn btn-primary">View Details</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                
            </div>
                    <!--<cite>
                        <ul>
                            <li></li>
                            
                            <li><a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=March%20Product%20of%20the%20Month%20%28via%20PestWeb%2Ecom%29&amp;p[url]=%2Fpromotions%2Fa0299c&amp;p[summary]=Check%20out%20these%20savings%20exclusively%20from%20Univar%21" rel="nofollow" target="_blank">Share on Facebook</a></li>
                            <li><a href="https://twitter.com/home?status=March%20Product%20of%20the%20Month%20%28via%20PestWeb%2Ecom%29%20%2Fpromotions%2Fa0299c" rel="nofollow" target="_blank">Share on Twitter</a></li>
                        </ul>
                    </cite>
                </li>-->
        
        </div>
    
    <?php get_post_type( $post ) ?>
    <?php } elseif ( 'pom' == get_post_type() ) { ?>
    
        <div class="col-sm-8 col-sm-offset-2 pom">
        
            <h1><?php the_field('pom_article_title'); ?></h1>
        
            <div class="image">
                <img src="<?php the_field('pom_promotion_graphic' ); ?>">
            </div>
            
            <div class="details">
            
                <div class="col-sm-8 exclusive">
                    <p class="headline">Exclusive Product of the Month only at</p>
                    <p class="dates">Offer valid <?php the_field('pom_promotion_date'); ?></p>
                </div>
                
                <div class="col-sm-4 logo univar">
                    <img src="<?php bloginfo('template_directory'); ?>/images/univar-logo.png">
                </div>
                
                <div class="clear"></div>
                
            </div>
            
            <div class="clear"></div>
            
            <div class="content">
                <?php the_field('pom_article_content'); ?>
            </div>
            
            <div class="disclaimer">
                <?php the_field('pom_article_fine_print'); ?>
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
        
        <ad id="ad">
            <div class="col-sm-4 ad skyscraper">
                <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
            </div>
        </ad>
    
    <?php } ?>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>