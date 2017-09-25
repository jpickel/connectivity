<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="col-md-3 col-sm-4 col-xs-6 issue">
    
        <div class="cover">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('cover'); ?>"></a>
        </div>
        <div class="date">
            <a href="<?php the_permalink(); ?>"><?php the_time('F Y'); ?></a>
        </div>
        <div class="clear"></div>
        
    </div>

<?php endwhile; ?>

	<?php else : ?>

<?php endif; ?>

<?php if ( get_theme_mod( 'archive_html' ) ) : ?>
    <!-- Start of Old Archives -->
    <?php echo get_theme_mod( 'archive_html' ); ?>
<?php endif; ?>