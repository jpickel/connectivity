<script>
var TrackImpressions = {
	init: function() {
		TrackImpressions.mobileHit 	= false;
		TrackImpressions.desktopHit	= false;
		TrackImpressions.mobileAds	= jQuery('.mobile img');
		TrackImpressions.desktopAds	= jQuery('.desktop img');
		TrackImpressions.eventController();
		jQuery(window).resize(function(){
			TrackImpressions.eventController();
		});
	},
	
	eventController: function() {
		if(TrackImpressions.desktopAds.is(':visible') && (TrackImpressions.desktopHit == false)) {
			TrackImpressions.desktopHit = true;
			if(jQuery('img.ad-leaderboard').length != 0) {
				TrackImpressions.hit('Leaderboard',jQuery('img.ad-leaderboard').attr('alt'));
			}
			if(jQuery('img.ad-skyscraper').length != 0) {
				TrackImpressions.hit('Skyscraper',jQuery('img.ad-skyscraper').attr('alt'));
			}
			if(jQuery('img.ad-block').length != 0) {
				TrackImpressions.hit('Block',jQuery('img.ad-block').attr('alt'));
			}
		}
		if(TrackImpressions.mobileAds.is(':visible') && (TrackImpressions.mobileHit == false)) {
			TrackImpressions.mobileHit = true;
			if(jQuery('img.ad-m-leaderboard').length != 0) {
				TrackImpressions.hit('Mobile Leaderboard',jQuery('img.ad-m-leaderboard').attr('alt'));
			}
			if(jQuery('img.ad-m-skyscraper').length != 0) {
				TrackImpressions.hit('Mobile Skyscraper',jQuery('img.ad-m-skyscraper').attr('alt'));
			}
		}
	},
	
	hit: function(action, label) {
		dataLayer.push({
			'event' : 'adImpression',
			'action' : action,
			'label' : label
		});
	}
};
jQuery(document).ready(function(){
	TrackImpressions.init();
});

//Sticky Ad Placement
var StickyAd = {
	
	init: function() {
		// Get and check if ad exists on page
		StickyAd.skyscraper = jQuery('.connect-ad .desktop img');
		if(StickyAd.skyscraper.length !== 0) {
			StickyAd.getPosition();
			
			$(window).scroll(StickyAd.checkPosition);
			$(window).resize(function(){
				if($(window).width() > 977) {
					var newWidth = 300;
					var newHeight = 600;
				} else {
					var newWidth = 210;
					var newHeight = 420;
				}
				StickyAd.skyscraper.css({
					'position': 'inherit',
					'width': newWidth,
					'height': newHeight
				});
				StickyAd.getPosition();
				StickyAd.checkPosition();
			});
		}
	},
	
	
	// Get default add metrics BEFORE making sticky
	getPosition: function() {
		StickyAd.width = StickyAd.skyscraper.width();
		StickyAd.height = StickyAd.skyscraper.height();
		StickyAd.right = jQuery(window).width() - StickyAd.width - StickyAd.skyscraper.offset().left;
		StickyAd.top = StickyAd.skyscraper.offset().top;
	},
	
	
	// Check current position of add to see if it should be sticky
	checkPosition: function() {
		var scroll = $(window).scrollTop();
		currentPosition = StickyAd.top - scroll;
		if(currentPosition <= 50 ) {
			StickyAd.skyscraper.css({
				'position': 'fixed',
				'width': StickyAd.width,
				'height': StickyAd.height,
				'top': 50
			});
		} else {
			StickyAd.skyscraper.css({
				'position': 'inherit',
			});
		}
	}
};


// Initialize Sticky Ads
$(window).load(function(){
	StickyAd.init();
});
</script>

<!-- Email Signup Pop-up -->
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>