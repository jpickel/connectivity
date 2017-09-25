<?php 

// Adds CSS to Customizer Page

function my_customizer_styles() { ?>
    <style>
    
        li#customize-control-themesimages_backgroundonesize, li#customize-control-themesimages_backgroundoneopacity,
        li#customize-control-themesimages_backgroundtwosize, li#customize-control-themesimages_backgroundtwoopacity
         {
            margin:  -20px 0px 20px 20px;
            padding:  0px 0px 0px 10px;
            border-left:  5px solid #008ec2;
        }
            li#customize-control-themesimages_backgroundtwoopacity {
                padding-top:  10px;
            }
            
        li#customize-control-themescolors_primaryfont, li#customize-control-themescolors_secondaryfont, li#customize-control-themescolors_tertiaryfont {
           margin:  0px 0px 20px 20px;
           padding:  0px 0px 0px 10px;
           border-left:  5px solid #008ec2;
        }
        li#customize-control-themessettings_maintenancemode label {
            font-weight: bold;
            color: red;
        }
        
            li#customize-control-themessettings_maintenancemode label span {
                font-weight: normal;
            }
            
        li#customize-control-archive_html textarea, li#customize-control-email_html textarea {
            font-family: Courier;
            background-color: #393939  ;
            border-color: #ebccd1 ;
            color: #c99455;
            margin: 10px;
            width: 95%;
            border-radius: 5px 5px 5px 5px;
            -moz-border-radius: 5px 5px 5px 5px;
            -webkit-border-radius: 5px 5px 5px 5px;
            box-shadow: none;
            border-color: #000;
            font-style: italic;
            padding: 15px;
            height: 350px;
        }
            
    </style>
    <?php

}
add_action( 'customize_controls_print_styles', 'my_customizer_styles', 999 );

// Removes Static Front Page

add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize) {
  $wp_customize->remove_section( 'static_front_page' );
}


function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   
       // Adds Theme Logo to 'Site Identity'
   
       $wp_customize->add_setting( 'themesimages_logo' );
       
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themesimages_logo', array(
           'label'    => __( 'Logo', 'themesimages' ),
           'section'  => 'title_tagline',
           'settings' => 'themesimages_logo',
       ) ) );
       
   // Adds Theme Images
   
   $wp_customize->add_section( 'images_section' , array(
       'title'       => __( 'Templated Article Images', 'themesimages' ),
       'priority'    => 30,
   ) );
   
       // Adds Expert
       
       $wp_customize->add_setting( 'images_expert' );
           
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'images_expert', array(
           'label'    => __( 'Expert Article Image', 'themesimages' ),
           'section'  => 'images_section',
           'settings' => 'images_expert',
       ) ) );
       
       // Adds Promotions
       
       $wp_customize->add_setting( 'images_promotions' );
           
       $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'images_promotions', array(
           'label'    => __( 'Promotions Article Image', 'themesimages' ),
           'section'  => 'images_section',
           'settings' => 'images_promotions',
       ) ) );
       
   // Adds Social Media Links
   
   $wp_customize->add_section( 'social_section' , array(
       'title'       => __( 'Social Media Profiles', 'themessocial' ),
       'priority'    => 30,
       'description' => 'Add social media profiles here.',
   ) );
   
       // Adds Twitter
       
       $wp_customize->add_setting( 'social_twitter' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_twitter', array(
           'label'    => __( 'Twitter Account', 'themessocial' ),
           'section'  => 'social_section',
           'settings' => 'social_twitter',
           'description' => 'Enter a Twitter URL',
       ) ) );
       
       // Adds Facebook
       
       $wp_customize->add_setting( 'social_facebook' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_facebook', array(
           'label'    => __( 'Facebook Account', 'themessocial' ),
           'section'  => 'social_section',
           'settings' => 'social_facebook',
           'description' => 'Enter a Facebook URL',
       ) ) );
       
       // Adds LinkedIn
       
       $wp_customize->add_setting( 'social_linkedin' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_linkedin', array(
           'label'    => __( 'LinkedIn Account', 'themessocial' ),
           'section'  => 'social_section',
           'settings' => 'social_linkedin',
           'description' => 'Enter a LinkedIn URL',
       ) ) );
       
   // Old 3D Issue Archives
   
   $wp_customize->add_section( 'archive_section' , array(
       'title'       => __( '3D Issue Archives', 'themesarchive' ),
       'priority'    => 30,
   ) );
   
       // Adds Archive Code
       
       $wp_customize->add_setting( 'archive_html' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'archive_html', array(
           'label'    => __( 'Archive Issue HTML', 'themesarchive' ),
           'section'  => 'archive_section',
           'settings' => 'archive_html',
           'type' => 'textarea',
           'description' => 'Enter the HTML for any archived 3D Issue issues here.',
       ) ) );
       
   // Email Signup
   
   $wp_customize->add_section( 'email_section' , array(
       'title'       => __( 'Email Form Collection', 'themesemail' ),
       'priority'    => 30,
   ) );
   
       // Adds Email Form Code
       
       $wp_customize->add_setting( 'email_html' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_html', array(
           'label'    => __( 'Email Collection Form Code', 'themesemail' ),
           'section'  => 'email_section',
           'settings' => 'email_html',
           'type' => 'textarea',
           'description' => 'Enter the HTML for collecting names and email addresses in ActiveCampaign.',
       ) ) );
       
   // Promotions Content
   
   $wp_customize->add_section( 'api_section' , array(
       'title'       => __( 'Promotions & POM Content', 'themesapi' ),
       'priority'    => 30,
   ) );
   
       // Adds API Link
       
       $wp_customize->add_setting( 'api_link' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'api_link', array(
           'label'    => __( 'Promotions API URL', 'themesapi' ),
           'section'  => 'api_section',
           'settings' => 'api_link',
       ) ) );
       
       // Adds API Source
       
       $wp_customize->add_setting( 'api_source' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'api_source', array(
           'label'    => __( 'Promotions API Source', 'themesapi' ),
           'section'  => 'api_section',
           'settings' => 'api_source',
       ) ) );
       
       // Adds POM Details
       
       $wp_customize->add_setting( 'pom_disclaimer' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pom_disclaimer', array(
           'label'    => __( 'POM Disclaimer', 'themesapi' ),
           'section'  => 'api_section',
           'settings' => 'pom_disclaimer',
           'type' => 'textarea',
       ) ) );
	   	
   // Ad Attribution
   
   $wp_customize->add_section( 'attribution_section' , array(
       'title'       => __( 'Ad Attribution Model', 'themesattribution' ),
       'priority'    => 30,
   ) );
   
       // Adds Ads
       
       $wp_customize->add_setting( 'ad_attribution' );
           
       $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ad_attribution', array(
           'label'    => __( 'Ad Attribution Model', 'themesattribution' ),
           'section'  => 'attribution_section',
           'settings' => 'ad_attribution',
           'type' => 'textarea',
           'description' => 'Enter the attribution model name from the JSON file in adLogic.json',
       ) ) );
   
}
add_action( 'customize_register', 'mytheme_customize_register' );