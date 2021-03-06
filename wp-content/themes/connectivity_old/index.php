<?php include (TEMPLATEPATH . '/meta.php' ); ?>
<?php include (TEMPLATEPATH . '/google.php' ); ?>
</head>

    <?php if (false !== strpos($url,'&preview=')) { ?>
    
        <div class="preview">
            <p>You are viewing this issue in preview mode. Preview mode includes a list of advertisers and their ads placements at the bottom of this page</p>
        </div>
    
    <?php } ?>

    <?php if (false !== strpos($url,'?signup')) { ?>
    
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p class="aligncenter">Subscribe to</p>
                        <div class="col-sm-6 col-sm-offset-3">
                            <img src="<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Enter your information to be notified when new issues of Connectivity are released.</p>
                        <form>
                            <div class="col-md-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">Subscribe</button>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        
    <?php } ?>

    <?php  get_post_type( $post ) ?>
    <?php if ( is_front_page() ) { ?>
    
        <?php include (TEMPLATEPATH . '/home-page.php' ); ?>
        
    <?php } elseif ( 'issues' == get_post_type() ) { ?>
    
        <?php if (false !== strpos($url,'email=true')) { ?>
            
            <?php include (TEMPLATEPATH . '/email.php' ); ?>
            
        <?php } else { ?>
        
        	<?php include (TEMPLATEPATH . '/issues.php' ); ?>
                
        <?php } ?>
    	
    <?php } elseif ( 'ad' == get_post_type() ) { ?>
    	
    		<?php include (TEMPLATEPATH . '/ads.php' ); ?>
    
    <?php } else { ?>
    
        <?php include (TEMPLATEPATH . '/default-page.php' ); ?>
    
    <?php } ?>
    
    <?php if (false !== strpos($url,'&preview=')) { ?>
    
        <div class="preview-ads">
            <div class="container">
                <h2>Ads in this Issue:</h2>
                <br>
                <?php include (TEMPLATEPATH . '/loops/ads-preview.php' ); ?>
            </div>
        </div>
    
    <?php } ?>

</html>