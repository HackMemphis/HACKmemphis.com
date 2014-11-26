jQuery(window).on("load", function() {

	/* -----------------------------------------
	 Sliders Functionality
	 ----------------------------------------- */
	jQuery("#main-slider").flexslider({
		slideshow: false,
		controlNav: false,
		animation: "slide",
		start: centerSlider,
		sync: jQuery("#image-slider")
	});

	jQuery("#image-slider").flexslider({
		slideshow: false,
		controlNav: false,
		directionNav: false,
		animationSpeed: 1000
	});

	/* -----------------------------------------
	 Center the main slider
	 ----------------------------------------- */

	function centerSlider() {
		var	mainSlider = jQuery("#main-slider"),
			imageSlider = jQuery("#image-slider"),
			imageHeight = imageSlider.height(),
			imageWidth = imageSlider.width(),
			sliderHeight = mainSlider.height(),
			sliderWidth = mainSlider.width();

		mainSlider.css({
			"left": imageWidth/2 - sliderWidth/2,
			"top": imageHeight/2 - sliderHeight/2
		});
	}
	jQuery(window).on("resize", centerSlider);

	var $speaker = jQuery(".speaker");

	function initQtip(tooltipWidth, tooltipHeight, yPos) {
		$speaker.each(function() {
			var that = jQuery(this);
			that.qtip({
				show: {
					event: 'click',
					solo: true
				},
				hide: {
					event: 'unfocus'
				},
				content: jQuery(this).find(".speaker-desc").clone(),
				position: {
					my: 'left center',
					at: 'right center',
					target: that,
					viewport: jQuery("#speakers").find(".row"),
					adjust: {
						x: 6,
						y: -yPos,
						screen: true,
						target: jQuery(document),
						resize: false
					}
				},
				style: {
					classes: 'qtip-dark qtip-shadow qtip-rounded',
					width: tooltipWidth,
					height: tooltipHeight,
					tip: {
						mimic: 'center',
						height: 4,
						width: 10,
						border: 4
					}
				},
				events: {
					visible: function(event, api) {
						jQuery(this).find(".speaker-desc").mCustomScrollbar();
						jQuery('.mCustomScrollBox > .mCSB_scrollTools').animate({opacity: 1});
					},
					hidden: function(event, api) {
						jQuery(this).qtip('destroy');
						jQuery(this).find(".speaker-desc").mCustomScrollbar('destroy');
					}
				}
			});
		});
	}

	$speaker.click(function() {
		var tooltipWidth = (($speaker.outerWidth())*2) - ($speaker.outerWidth() - $speaker.width()) + 2,
				tooltipHeight = $speaker.height()+ 2,
				yPos = jQuery("#header").outerHeight()-4;

		initQtip(tooltipWidth, tooltipHeight, yPos);
	});

	var tooltipWidth = (($speaker.outerWidth())*2) - ($speaker.outerWidth() - $speaker.width()) + 2,
			tooltipHeight = $speaker.height()+ 2,
			yPos = jQuery("#header").outerHeight()-4;

	initQtip(tooltipWidth, tooltipHeight, yPos);

	/* -----------------------------------------
	 Responsive Menus Init with jPanelMenu
	 ----------------------------------------- */
	var jPM = jQuery.jPanelMenu({
		menu: '#navigation',
		trigger: '.menu-trigger',
		excludedPanelContent: "style, script, #wpadminbar"
	});

	var jRes = jRespond([
		{
			label: 'mobile',
			enter: 0,
			exit: 767
		}
	]);

	jRes.addFunc({
		breakpoint: 'mobile',
		enter: function() {
			jPM.on();
			var tooltipWidth = $speaker.width()+2,
					tooltipHeight = $speaker.height()+2;
			initQtip(tooltipWidth, tooltipHeight, 0);

			$speaker.click(function() {
				var tooltipWidth = $speaker.width()+2,
						tooltipHeight = $speaker.height()+2;
				initQtip(tooltipWidth, tooltipHeight, 0);
			});
		},
		exit: function() {
			jPM.off();
			var tooltipWidth = (($speaker.outerWidth())*2) - ($speaker.outerWidth() - $speaker.width()) + 2,
					tooltipHeight = $speaker.height()+ 2,
					yPos = jQuery("#header").outerHeight()-4;

			$speaker.click(function() {
				var tooltipWidth = (($speaker.outerWidth())*2) - ($speaker.outerWidth() - $speaker.width()) + 2,
						tooltipHeight = $speaker.height()+ 2,
						yPos = jQuery("#header").outerHeight()-4;

				initQtip(tooltipWidth, tooltipHeight, yPos);
			});

			initQtip(tooltipWidth, tooltipHeight, yPos);
		}
	});

	/* -----------------------------------------
	 Smooth Scroll Init
	 ----------------------------------------- */
	jQuery('body').on("click", ".sf-menu a.scroll", function(e) {
		$target = jQuery(this).attr('href');
		jQuery.smoothScroll({
			offset: -120,
			scrollTarget: $target,
			speed: 1000,
			beforeScroll: function() {
				jPM.close();
			}
		});
		e.preventDefault();
	});
});

jQuery(document).ready(function($) {

	/* -----------------------------------------
	 Speakers Effects Init
	 ----------------------------------------- */
	$speaker = $(".speaker, .speaker-pres");

	$speaker.hover(function() {
		$(this).find('h3').stop().animate({"opacity": 1}, 300);
	}, function() {
		$(this).find('h3').stop().animate({"opacity": 0}, 300);
	});


	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$('#btop').fadeIn('slow');
		} else {
			$('#btop').fadeOut('slow');
		}
	});

	$('#btop').click(function(e){
		$.smoothScroll({
			scrollTarget: '#page',
			speed: 1000
		});
		e.preventDefault();
	});

	$('.logo a').click(function(e){
		$.smoothScroll({
			scrollTarget: '#page',
			speed: 1000
		});
		e.preventDefault();
	});

	/* -----------------------------------------
	 Map Init
	 ----------------------------------------- */
	if( $('div#map').length ){
		initialize();
	}

});


/* -----------------------------------------
 Map Configuration
 ----------------------------------------- */
function initialize() {
	var myLatlng = new google.maps.LatLng(ThemeOption.map_coords_lat,ThemeOption.map_coords_long);

	var mapOptions = {
		zoom: parseInt(ThemeOption.map_zoom_level),
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	};

	var map = new google.maps.Map(document.getElementById('map'), mapOptions);

	var contentString = '<div id="content">'+ThemeOption.map_tooltip+'</div>';

	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: ''
	});
	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
}
