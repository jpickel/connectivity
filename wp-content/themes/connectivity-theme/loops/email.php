<table border="0" cellpadding="8" cellspacing="0" width="100%" style="max-width: 600px; background-color: #b7b7b7;" align="center">
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0" width="100%" style="background-color: #fff;">
                <tr>
                    <td>
                        <img src="<?php bloginfo('template_directory'); ?>/images/email/blue.png" width="100%" height="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php bloginfo('template_directory'); ?>/images/email/header.png" width="100%" height="auto">
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td>
                                    <p class="date"><?php echo $issue_date ?></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php bloginfo('template_directory'); ?>/images/email/grey.png" width="100%" height="1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" width="100%">
                            <tr>
                                <td width="50%" valign="top">
                                    <?php if( have_rows('add_content') ): ?>
                                        <?php while ( have_rows('add_content') ) : the_row(); ?>
                                            <?php if(get_row_layout() == "add_a_pom"): ?>
                                                <?php $post_object = get_sub_field('add_a_pom_pom'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                                    <table width="100%" cellpadding="2" cellspacing="0" style="background-color: #e2e2e2;">
                                                        <tr>
                                                            <td>
                                                                <img src="<?php the_field('pom_promotion_graphic' ); ?>" width="100%" height="auto">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%" cellpadding="2" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <p class="title">Univar Product of the Month for <?php echo $issue_month ?></p>
                                                                <p><?php the_field('pom_product_details'); ?></p>
                                                                <p class="link"><a href="<?php the_permalink(); ?>">View Details &gt;</a></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </td>
                                <td width="50%" valign="top">
                                
                                    <?php if( have_rows('add_content') ): ?>
                                        <?php while ( have_rows('add_content') ) : the_row(); ?>
                                            <?php if(get_row_layout() == "add_an_article"): ?>
                                                <?php $post_object = get_sub_field('add_an_article_article'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                                    <table width="100%" cellpadding="2" cellspacing="0" style="background-color: #e2e2e2;">
                                                        <tr>
                                                            <td>
                                                                <img src="<?php the_field('featured_image' ); ?>" width="100%" height="auto">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%" cellpadding="2" cellspacing="0">
                                                        <tr>
                                                            <td>
                                                                <p class="title"><?php the_title(); ?></p>
                                                                <p><?php the_excerpt(); ?></p>
                                                                <p class="link"><a href="<?php the_permalink(); ?>">Read Article &gt;</a></p
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    
                                                    
                                                    
                                                    
                                                <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" width="100%">
                            <tr>
                                <td>
                                    AD
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" width="100%">
                            <tr>
                                <td width="50%" valign="top">
                                    <?php if( have_rows('add_content') ): ?>
                                        <?php while ( have_rows('add_content') ) : the_row(); ?>
                                            <?php if(get_row_layout() == "add_an_article"): ?>
                                                <?php $post_object = get_sub_field('add_an_article_article'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                                    <?php if ( in_category( 'customer-spotlight' ) ) { ?>
                                                        <table width="100%" cellpadding="2" cellspacing="0" style="background-color: #e2e2e2;">
                                                            <tr>
                                                                <td>
                                                                    <img src="<?php the_field('featured_image' ); ?>" width="100%" height="auto">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table width="100%" cellpadding="2" cellspacing="0">
                                                            <tr>
                                                                <td>
                                                                    <p class="title"><?php the_title(); ?></p>
                                                                    <p><?php the_excerpt(); ?></p>
                                                                    <p class="link"><a href="<?php the_permalink(); ?>">Read Article &gt;</a></p
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    <?php } ?>
                                                <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </td>
                                <td width="50%" valign="top">
                                    <?php if( have_rows('add_content') ): ?>
                                        <?php while ( have_rows('add_content') ) : the_row(); ?>
                                            <?php if(get_row_layout() == "add_an_article"): ?>
                                                <?php $post_object = get_sub_field('add_an_article_article'); if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
                                                    <?php if ( in_category( 'whats-new' ) ) { ?>
                                                        <table width="100%" cellpadding="2" cellspacing="0" style="background-color: #e2e2e2;">
                                                            <tr>
                                                                <td>
                                                                    <img src="<?php the_field('featured_image' ); ?>" width="100%" height="auto">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table width="100%" cellpadding="2" cellspacing="0">
                                                            <tr>
                                                                <td>
                                                                    <?php if( have_rows('add_an_item') ): ?>
                                                                        <?php while ( have_rows('add_an_item') ) : the_row(); ?>
                                                                            <?php if(get_row_layout() == "add_an_item"): ?>
                                                                                <p><?php the_sub_field('add_an_item_content'); ?></p>
                                                                            <?php endif; ?>
                                                                        <?php endwhile; ?>
                                                                    <?php endif; ?>
                                                                    <p class="link"><a href="<?php the_permalink(); ?>">Read Article &gt;</a></p
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    <?php } ?>
                                                <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="10" cellspacing="0" width="100%">
                            <tr>
                                <td>
                                    <p class="link promotions"><a href="<?php echo site_url(); ?>/promotions/">View Current Promotions &gt;</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>