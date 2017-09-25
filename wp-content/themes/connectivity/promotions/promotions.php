<?php

	//Set Service URL and source name
	$service_url = get_theme_mod( 'api_link' );
    $source_name = get_theme_mod( 'api_source' );
	
	//Create curl request
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	
	//Check for data
	$error = false;
	$errorMessage = "We are unable to connect to $source_name at this time. Sorry for the inconvenience";
	if ($curl_response === false) {
	    $info = curl_getinfo($curl);
	    curl_close($curl);
		$error = true;
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
		$error = true;
	}
?>
<div class="col-sm-8 col-sm-offset-2 promotions">
	<h1>Univar Promotions</h1>
	<?php
		if($error == true || (count($decoded->promotions) == 0)) { ?>
			<h2><?php echo $errorMessage; ?></h2>
	<?php } else { $promotions = $decoded->promotions->promotion;?>
           <div class="details">
           	 	<?php foreach($promotions as $promotion) {
           	 	$start_date = date('Ymd', strtotime($promotion->start_at));
				$end_date = date('Ymd', strtotime($promotion->end_at));
				$today = date('Ymd');
           	 	if($today >= $start_date && $today <= $end_date) {
				?>
                <div class="col-xs-12 item">
                    <div class="col-xs-4">
                        <a href="http://pestweb.com/promotions/<?php echo $promotion->id ?>"><img src="<?php echo $promotion->thumbnail_image ?>"></a>
                    </div>
                    <div class="col-xs-8">
                        <h2><a href="http://pestweb.com/promotions/<?php echo $promotion->id ?>"><?php echo $promotion->title; ?></a></h2>
                        <p><?php echo $promotion->description; ?></p>
                        <p><a href="http://pestweb.com/promotions/<?php echo $promotion->id ?>" class="read-more btn btn-primary">View Details</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php }} ?>
                
            </div>      
	<?php } ?>
</div>