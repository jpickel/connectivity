<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

require_once('inc/wp-modifications.php');
require_once('inc/post-types.php');
require_once('inc/theme-options.php');


// Adds Support for Menus

add_theme_support( 'menus' );

register_nav_menus( array(  
    'top-left' => __( 'Top-Left Navigation' ), 
    'top-right' => __( 'Top-Right Navigation' ),    
    //'main' => __( 'Main Menu' ), 
) );


// Overrides Photo's "Link to" Option 

update_option('image_default_link_type','file');

	
// Adds Style to Admin

add_action('admin_head', 'my_custom_logo');

function my_custom_logo() {
echo '
<link href="'.get_bloginfo('template_directory').'/css/fonts.css" type="text/css" rel="stylesheet">
<link href="'.get_bloginfo('template_directory').'/css/grid.css" type="text/css" rel="stylesheet">
<link href="'.get_bloginfo('template_directory').'/css/admin.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=1100, initial-scale=0.5">
';
}


// Trims Default Excerpt to One Paragraph

add_filter( 'wp_trim_excerpt', 'my_custom_excerpt', 10, 2 );
 
function my_custom_excerpt($text, $raw_excerpt) {
    if( ! $raw_excerpt ) {
        $content = apply_filters( 'the_content', get_the_content() );
        $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
    }
    return $text;
}


// Removes width from caption and images

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));
	if ( 1 > (int) $width || empty($caption) )
		return $content;
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

// Ads First Image as Featured Image

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  $new_img_tag = "";

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image with 0 width
  $new_img_tag = "<img src='./images/bargainsfrenzy.com.gif' class='alignleft' />";
  }

  else{
    echo $new_img_tag = "<img src='./thumb.php?gd=2&src=".$first_img."&maxw=120' class='alignleft' />";
  }

  return $new_img_tag;
}


// Defines Content Width for Gallery - Sized bigger than the container

if ( ! isset( $content_width ) )
$content_width = 768;


// Changes Preview Link Length

add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 7; // 7 days
}


?>