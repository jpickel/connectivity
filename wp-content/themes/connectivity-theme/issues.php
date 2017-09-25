<body class="xsecondary archive home">

	<?php include (TEMPLATEPATH . '/header.php' ); ?>
	
	<div id="content">
	    <div class="container">
	    
	        <?php if ( is_archive( ) ) { ?>
	        
	            <h1>Connectivity Archives</h1>
	        
	            <?php include (TEMPLATEPATH . '/loops/archives.php' ); ?>
	        
	        <?php } else { ?>
	        
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
	
	    </div>
	</div>
	
	<?php get_footer(); ?>
	
	<?php include (TEMPLATEPATH . '/meta-footer.php' ); ?>

</body>
