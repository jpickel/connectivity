<?php query_posts(array('showposts', 'posts_per_page'=> '1', 'post_type'=> 'issues')); while (have_posts()) { the_post(); ?>

    <div class="col-sm-12">
        <div class="ad leaderboard">
            <?php include (TEMPLATEPATH . '/ads/leaderboard.php' ); ?>
        </div>
    </div>
    
    <div class="clear"></div>

    <div class="first-spot">
    
        <?php include (TEMPLATEPATH . '/loops/home-first-spot.php' ); ?>
    
        <div class="col-sm-4 ad skyscraper">
            <?php include (TEMPLATEPATH . '/ads/skyscraper.php' ); ?>
        </div>
        
        <div class="clear"></div>
        
    </div>
    
    <div class="clear gap"></div>
    <div class="clear gap"></div>
    
    <div class="second-spot">
        <?php include (TEMPLATEPATH . '/loops/home-second-spot.php' ); ?>
    </div>

<?php } ?>