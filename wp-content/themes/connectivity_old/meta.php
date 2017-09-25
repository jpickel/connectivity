<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --><head id="<?php echo get_option('home'); ?>" profile="http://gmpg.org/xfn/11">

    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Meta Data -->
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <!-- iPhone & iPad Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	
	<?php if (false !== strpos($url,'email=true')) { ?>
        
        <link href="<?php bloginfo('template_directory'); ?>/css/email.css" type="text/css" rel="stylesheet">
        
    <?php } else { ?>
    
         <!-- Main Style Sheets -->
         <link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
         
         <!-- Framework Style Sheets -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            
    <?php } ?>
    	
    <!-- Framework JavaScript -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/onload.promos.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
        <![endif]-->
    
	<?php wp_head(); ?>
	
	<?php if ( is_user_logged_in() ) { ?>
	    
	    <style><!--
	        #social {
	            top:  32px;
	        }
	    --></style>
	
	<?php } ?>
    
</head>