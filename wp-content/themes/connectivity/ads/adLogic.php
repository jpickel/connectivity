<?php
	$message = 'console.log("Welcome to the Ads Debugger");console.log("Note that ad ranges are closed lower bound and open upper bound. The roll range is between 0.01 and 1.");';
	$message .= "console.log('Please check that there are no point gaps');";
	$message .= "console.log('-----------------');console.log('-----------------');";
	//Define ad distribution
	$distribution = json_decode(file_get_contents(TEMPLATEPATH . '/adLogic.json'));
	$ad_attribution = get_theme_mod( 'ad_attribution' );
	$distribution = $distribution[0]->$ad_attribution;
	$leaderboard_count 		= 0;
	$skyscraper_count 		= 0;
	$block_count 			= 0;
	$m_leaderboard_count	= 0;
	$m_skyscraper_count 	= 0;
	// Create array to hold final add resources.
	$ads = array('showposts',
		'leaderboard' 	=> array(
			'image' 	=> get_bloginfo('template_directory','url').'/images/728x90.png',
			'package'	=> 'DNE',
			'link'		=> '',
			'label'		=> 'DNE',
		),
		'skyscraper'	=> array(
			'image' 	=> get_bloginfo('template_directory','url').'/images/300x600.png',
			'package'	=> 'DNE',
			'link'		=> '',
			'label'		=> 'DNE',		
		),
		'block'			=> array(
			'image' 	=> get_bloginfo('template_directory','url').'/images/300x250.png',
			'package'	=> 'DNE',
			'link'		=> '',
			'label'		=> 'DNE',
		),
		'm_leaderboard'	=> array(
			'image' 	=> get_bloginfo('template_directory','url').'/images/300x250.png',
			'package'	=> 'DNE',
			'link'		=> '',
			'label'		=> 'DNE',
		),
		'm_skyscraper'	=> array(
			'image' 	=> get_bloginfo('template_directory','url').'/images/300x250.png',
			'package'	=> 'DNE',
			'link'		=> '',
			'label'		=> 'DNE',
		),
	);
	
	// Get most recent issue
	$args = array(
		'posts_per_page' => 1,
		'post_type' => 'issues',
	);
	if (false !== strpos($url,'preview=true')) {
	 	$args['post_status'] = 'draft';
	} else {
		$args['post_status'] = 'publish';
	}
	 
	$recent_issue = new WP_Query($args);
	
	if($recent_issue->have_posts()) {
		while ($recent_issue->have_posts()) {
			$recent_issue->the_post();
			$message .= "console.log('Ads are from issue ".get_the_title();
			$id = get_the_id();
			$message .= " #$id'); ";
			$message .= "console.log('-----------------');console.log('-----------------');";
			//Get ads from most recent issue
			if( have_rows('add_ads') ) {
				while ( have_rows('add_ads',$id)){
					the_row();
					if(get_row_layout() == "add_an_ad") {
						$post_object = get_sub_field('add_an_ad');
						if( $post_object ) {
							$post = $post_object;
							setup_postdata( $post );
							
							//get 720x90 for leaderboard
							if(get_field('secondary_placement_collateral' ) && get_post_status() == 'publish') {
								
								//Find probability range
								if(!(isset($die_leaderboard))) {
									$die_leaderboard = rand(1,100)/100;
									$message_leaderboard = "console.log('%cLeaderboard Roll: $die_leaderboard', 'color: green');";
								}
								$package = get_field('package');
								$probability = $distribution->$package->middle->desktop;
								$old_leaderboard_count = $leaderboard_count;
								$leaderboard_count += $probability;
								$message_leaderboard .= "console.log(\"%c".get_the_title()."\",'color:blue');";
								$status = get_post_status();
								$message_leaderboard .= "console.log(\"     Package: $package\");";
									$message_leaderboard .= "console.log(\"     Probability: ". $probability*100 ."%\");";
									$message_leaderboard .= "console.log(\"     Winning Range: $old_leaderboard_count - $leaderboard_count ";
								
								if((round($die_leaderboard,2) > round($old_leaderboard_count,2)) && (round($die_leaderboard,2) <= round($leaderboard_count,2)) && ($probability != 0)) {
									$ads['leaderboard'] = array(
										'image' 	=> get_field_object('secondary_placement_collateral')['value'],
										'package'	=> get_field('package'),
										'link'		=> get_field('secondary_placement_url'),
										'label'		=> str_replace("'","\'",get_the_title()),
									);
									$message_leaderboard .= " **WINNER**\");";
								} else {
									$message_leaderboard .= '");';
								}
							}
							
							//get 300x600 for skyscraper
							if(get_field('top_placement_collateral' ) && get_post_status() == 'publish') {
								
								//Find probability range
								if(!(isset($die_skyscraper))) {
									$die_skyscraper = rand(1,100)/100;
									$message_skyscraper = "console.log('%cSkyscraper Roll: $die_skyscraper', 'color: green');";
								}
								$package = get_field('package');
								$probability = $distribution->$package->top->desktop;
								$old_skyscraper_count = $skyscraper_count;
								$skyscraper_count += $probability;
								$message_skyscraper .= "console.log(\"%c".get_the_title()."\",'color:blue');";
								$status = get_post_status();
								$message_skyscraper .= "console.log(\"     Package: $package\");";
								$message_skyscraper .= "console.log(\"     Probability: ". $probability*100 ."%\");";
								$message_skyscraper .= "console.log(\"     Winning Range: $old_skyscraper_count - $skyscraper_count ";
								
								if((round($die_skyscraper,2) > round($old_skyscraper_count,2)) && (round($die_skyscraper,2) <= round($skyscraper_count,2)) && ($probability != 0)) {
									$ads['skyscraper'] = array(
										'image' 	=> get_field_object('top_placement_collateral')['value'],
										'package'	=> get_field('package'),
										'link'		=> get_field('top_placement_url'),
										'label'		=> str_replace("'","\'",get_the_title()),
									);
									$message_skyscraper .= " **WINNER**\");";
								} else {
									$message_skyscraper .= '");';
								}
							}

							//get 300x250 for m_leaderboard, m_skyscraper
							if(get_field('mobile_collateral' ) && get_post_status() == 'publish') {
								
								//Get m_leaderboard ad
								if(!(isset($die_m_leaderboard))) {
									$die_m_leaderboard = rand(1,100)/100;
									$message_m_leaderboard = "console.log('%cMobile Leaderboard Roll: $die_m_leaderboard', 'color: green');";
								}
								$package = get_field('package');
								$probability = $distribution->$package->middle->mobile;
								if($probability != 0) {
									$old_m_leaderboard_count = $m_leaderboard_count;
									$m_leaderboard_count += $probability;
									$message_m_leaderboard .= "console.log(\"%c".get_the_title()."\",'color:blue');";
									$status = get_post_status();
									$message_m_leaderboard .= "console.log(\"     Package: $package\");";
									$message_m_leaderboard .= "console.log(\"     Probability: ". $probability*100 ."%\");";
									$message_m_leaderboard .= "console.log(\"     Winning Range: $old_m_leaderboard_count - $m_leaderboard_count ";
									
									if((round($die_m_leaderboard,2) > round($old_m_leaderboard_count,2)) && (round($die_m_leaderboard,2) <= round($m_leaderboard_count,2))) {
										$ads['m_leaderboard'] = array(
											'image' 	=> get_field_object('mobile_collateral')['value'],
											'package'	=> get_field('package'),
											'link'		=> get_field('secondary_placement_url'),
											'label'		=> str_replace("'","\'",get_the_title()),
										);
										$message_m_leaderboard .= " **WINNER**\");";
									} else {
										$message_m_leaderboard .= '");';
									}
								}

								//Get m_skysraper ad
								if(!(isset($die_m_skyscraper))) {
									$die_m_skyscraper = rand(1,100)/100;
									$message_m_skyscraper = "console.log('%cMobile Skyscraper Roll: $die_m_skyscraper', 'color: green');";
								}
								$package = get_field('package');
								$probability = $distribution->$package->top->mobile;
								if($probability != 0) {
									$old_m_skyscraper_count = $m_skyscraper_count;
									$m_skyscraper_count += $probability;
									$message_m_skyscraper .= "console.log(\"%c".get_the_title()."\",'color:blue');";
									$status = get_post_status();
									$message_m_skyscraper .= "console.log(\"     Package: $package\");";
									$message_m_skyscraper .= "console.log(\"     Probability: ". $probability*100 ."%\");";
									$message_m_skyscraper .= "console.log(\"     Winning Range: $old_m_skyscraper_count - $m_skyscraper_count ";
									if((round($die_m_skyscraper,2) > round($old_m_skyscraper_count,2)) && (round($die_m_skyscraper,2) <= round($m_skyscraper_count,2))) {
										$ads['m_skyscraper'] = array(
											'image' 	=> get_field_object('mobile_collateral')['value'],
											'package'	=> get_field('package'),
											'link'		=> get_field('top_placement_url'),
											'label'		=> str_replace("'","\'",get_the_title()),
										);
										$message_m_skyscraper .= " **WINNER**\");";
									} else {
										$message_m_skyscraper .= '");';
									}
									$message_m_skyscraper .= "console.log('');";
								}
							
							}
							
							//get 300x250 for m_leaderboard, m_skyscraper and block
							if(get_field('tertiary_placement_collateral' ) && get_post_status() == 'publish') {
								
								//Get block ad
								if(!(isset($die_block))) {
									$die_block = rand(1,100)/100;
									$message_block = "console.log('%cBlock Roll: $die_block', 'color: green');";
								}
								$package = get_field('package');
								$probability = $distribution->$package->bottom->desktop;
								if($probability != 0) {
									$old_block_count = $block_count;
									$block_count += $probability;
									$message_block .= "console.log(\"%c".get_the_title()."\",'color:blue');";
									$status = get_post_status();
									$message_block .= "console.log(\"     Package: $package\");";
									$message_block .= "console.log(\"     Probability: ". $probability*100 ."%\");";
									$message_block .= "console.log(\"     Winning Range: $old_block_count - $block_count ";
									
									if((round($die_block,2) > round($old_block_count,2)) && (round($die_block <= $block_count,2))) {
										$ads['block'] = array(
											'image' 	=> get_field_object('tertiary_placement_collateral')['value'],
											'package'	=> get_field('package'),
											'link'		=> get_field('tertiary_placement_url'),
											'label'		=> str_replace("'","\'",get_the_title()),
										);
										$message_block .= " **WINNER**\");";
									} else {
										$message_block .= '");';
									}
								}
							}
							wp_reset_postdata();
						}
					}
				}
			}
		wp_reset_postdata();
		}
	}
	$warning = 'window.alert(\'';
	$alert = false;
	if(round($leaderboard_count,2) != 1) {
		$gap = (1 - $leaderboard_count) * 100;
		$message_leaderboard.= "console.log('%c!!!!!GAP OF $gap POINTS!!!!!','color:red');";
		$alert = true;
	}
	if(round($m_leaderboard_count,2) != 1) {
		$gap = (1 - $m_leaderboard_count) * 100;
		$message_m_leaderboard.= "console.log('%c!!!!!GAP OF $gap POINTS!!!!!','color:red');";
		$alert = true;
	}
	if(round($skyscraper_count,2) != 1) {
		$gap = (1 - $skyscraper_count) * 100;
		$message_skyscraper.= "console.log('%c!!!!!GAP OF $gap POINTS!!!!!','color:red');";
		$alert = true;
	}
	if(round($m_skyscraper_count,2) != 1) {
		$gap = (1 - $m_skyscraper_count) * 100;
		$message_m_skyscraper.= "console.log('%c!!!!!GAP OF $gap POINTS!!!!!','color:red');";
		$alert = true;
	}
	if(round($block_count,2) != 1) {
		$gap = (1 - $block_count) * 100;
		$message_block.= "console.log('%c!!!!!GAP OF $gap POINTS!!!!!','color:red');";
		$alert = true;
	}
	$warning .= "Pages may not display properly. Open the console and type \"debugAds()\" for further details.');";
	$message .= $message_leaderboard. "console.log('--------------------');".$message_m_leaderboard."console.log('--------------------');";
	$message .= $message_skyscraper. "console.log('--------------------');".$message_m_skyscraper."console.log('--------------------');";
	$message .= $message_block;
	//var_dump($ads);
?>

<script>
	<?php if(false !== strpos($url,'debug=true')) {
		if($alert == true) {
			echo "window.alert('Your ads are not configured correctly. Please open the browser console and type debugAds() to determine the cause.');";
		} else {
			echo "window.alert('Congratulations! Your ads are configured correctly.');";	
		}
	} ?>
	<?php echo "function debugAds(){ $message return null;}"; ?>
</script>