<?php 

// Adds Custom Post Types

add_action( 'init', 'create_post_type' );
    function create_post_type() {
    
    // Adds for Issues
    	
    register_post_type( 'issues',
        array(
            'labels' => array(
                'name' => __( 'Issues' ),
                'singular_name' => __( 'Issue' ),
                'add_new' => __( '+ Add New Issue' ),
                'add_new_item' => __( 'Add New Issue' ),
                'edit_item' => __( 'Edit Issue' ),
                'new_item' => __( 'New Issue' ),
                'view_item' => __( 'View Issue' ),
                'search_items' => __( 'Search Issues' ),
                'not_found' => __( 'No Issues Found' ),
                'not_found_in_trash' => __( 'No Issues Found' ),
                'all_items' => __( 'All Issues' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'issues', 'with_front' => false),
    		//'rewrite' => array('slug'=>date('Y').'/'.date('m').'','with_front'=>true),
    		'supports' => array('title'),
    		'menu_icon' => 'dashicons-book',
    		'menu_position' => 2,
            )
        );
        
    // Adds for Product of the Month
    	
    register_post_type( 'pom',
        array(
            'labels' => array(
                'name' => __( 'Products of the Month' ),
                'singular_name' => __( 'Product of the Month' ),
                'add_new' => __( 'Add New POM' ),
                'add_new_item' => __( 'Add New POM' ),
                'edit_item' => __( 'Edit POM' ),
                'new_item' => __( 'New POM' ),
                'view_item' => __( 'View POM' ),
                'search_items' => __( 'Search Products of the Month' ),
                'not_found' => __( 'No Products Found' ),
                'not_found_in_trash' => __( 'No Products Found' ),
                'all_items' => __( 'All POMs' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'pom', 'with_front' => false),
    		'supports' => array('title'),
    		'menu_icon' => 'dashicons-star-filled',
    		'menu_position' => 10,
            )
        );
        
    // Adds for Ads
    	
    register_post_type( 'ad',
        array(
            'labels' => array(
                'name' => __( 'Ads' ),
                'singular_name' => __( 'Ad' ),
                'add_new' => __( 'Add New Ad' ),
                'add_new_item' => __( 'Add New Ad' ),
                'edit_item' => __( 'Edit Ad' ),
                'new_item' => __( 'New Ad' ),
                'view_item' => __( 'View Ad' ),
                'search_items' => __( 'Search Ads' ),
                'not_found' => __( 'No Ads Found' ),
                'not_found_in_trash' => __( 'No Ads Found' ),
                'all_items' => __( 'All Ads' ),
                ),
            'public' => true,
    		'comments' => true,
            'has_archive' => true,
    		'rewrite' => array('slug' => 'supplier', 'with_front' => false),
    		'supports' => array('title'),
    		'menu_icon' => 'dashicons-money',
    		'menu_position' => 10,
            )
        );
    
    }
    
    