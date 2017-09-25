
<header id="header" class="header">
    <div class="container">
        <div class="wrapper">
	
	    <div class="col-xs-3">
	        <div class="logo univar">
	            <img src="<?php bloginfo('template_directory'); ?>/images/univar-logo.png">
	        </div>
	    </div>
	    
	    <div class="col-xs-6">
	        <div class="logo connectivity">
	            <a href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>"></a>
	        </div>
	        <div class="tagline">
	            <?php bloginfo( 'description' ); ?>
	        </div>
	    </div>
	    
	    <div class="col-xs-3 ">
	        <div class="date">
	        
	            <?php query_posts(array('showposts', 'posts_per_page'=> '1', 'post_type'=> 'issues')); while (have_posts()) { the_post(); ?>
	                <?php the_field('date'); ?>
    	            <?php include (TEMPLATEPATH . '/ads/adLogic.php' ); ?>
	            <?php } ?>
	            <?php wp_reset_query(); ?>
	            	        	
	        </div>
	    </div>

        </div>
    </div>
</header>

<nav id="nav">
    <div class="container">
    
        <?php wp_nav_menu( array( 'container_class' => 'top-left', 'theme_location' => 'top-left' ) ); ?>
        
        <?php wp_nav_menu( array( 'container_class' => 'top-right', 'theme_location' => 'top-right' ) ); ?>
        
        <div class="social-links">
            <ul>
                <?php if (!empty(get_theme_mod( 'social_facebook' ))) { ?>
                    <li><a href="<?php echo get_theme_mod( 'social_facebook' ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <?php } ?>
                <?php if (!empty(get_theme_mod( 'social_twitter' ))) { ?>
                    <li><a href="<?php echo get_theme_mod( 'social_twitter' ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <?php } ?>
                <?php if (!empty(get_theme_mod( 'social_linkedin' ))) { ?>
                    <li><a href="<?php echo get_theme_mod( 'social_linkedin' ); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    
    </div>
</nav>

<!--<div id="social">
    <div class="container">
        <div class="wrapper">

            <ul>
            
            <?php if ( get_theme_mod( 'social_facebook' ) ) : ?>
            
                <li><a href="<?php echo get_theme_mod( 'social_facebook' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png"></a></li>
            
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'social_twitter' ) ) : ?>
            
                <li><a href="<?php echo get_theme_mod( 'social_twitter' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png"></a></li>
            
            <?php endif; ?>
            
            </ul>

        </div>
    </div>
</div>-->