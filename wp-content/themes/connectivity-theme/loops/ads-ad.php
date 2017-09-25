<div class="col-sm-4 col-xs-6 ad-item <?php the_field('package'); ?>" <?php if( get_field('hide_duplicate_ad') )
{ ?>style="display: none;"<?php } ?>>
    <a href="<?php the_field('tertiary_placement_url'); ?>">
    
        <img src="<?php the_field('tertiary_placement_collateral'); ?>">
        
        <p class="supplier"><?php the_field('manufacturer'); ?></p>

    </a>
</div>