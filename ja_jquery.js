
function enableSocial() {

	if ( this.title == null ) {
		this.title = "";
	}

// 	var fb_shareURL = encodeURIComponent("http://www.johanabelson.com/w2/showimage.php?img=" + $(this.element).attr("image"));			
// 	var tw_shareURL = "http://www.johanabelson.com/w2/showimage.php?img=" + $(this.element).attr("image");
	
	// New line
	this.title += '<div id="fancyshare">';
// 
// 	// Add FaceBook like button
// 	this.title += '<li><iframe src="//www.facebook.com/plugins/like.php?href=' + fb_shareURL + '&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:23px;" allowTransparency="true"></iframe></li>';
// 	
// 	// Add tweet button
// 	this.title += '<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="' + tw_shareURL + '" data-via="johanabelson" data-lang="sv" data-hashtags="johanabelson">Tweeta</a></li>';
// 
// 	// Pinterest buttons
// 
// 	var pn_shareURL = encodeURIComponent("http://www.johanabelson.com/w2/showimage.php?img=" + $(this.element).attr("image"));
// 	var pn_shareIMG = encodeURIComponent("http://www.johanabelson.com/w2/" + $(this.element).attr("image"));
// 	
// 	this.title += '<li><a href="http://pinterest.com/pin/create/button/?url=' + pn_shareURL + '&media=' + pn_shareIMG + '&description=Johan%20Abelson%20Photography" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></li>';
// 
// 	this.title += '<li><div class="g-plusone" data-size="medium"></div><script type="text/javascript"> window.___gcfg = {lang: "sv"};(function() {var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);})();</script></li>';

	this.title += '</div>';

	/* Disable right click */
	$.fancybox.wrap.bind("contextmenu", function (e) {
		return false; 
	});
}

function enableShop() {

// 		<h4 class="item_artnr">Art. 2966</h4>
// 		<h2 class="item_name">Great Wall</h2>
// 		<p>Bilden tog jag en tidig morgon i jingchen asdasdads </p>
// 		<br />
// 		<span class="price item_price">4900<span class="currency"> SEK</span></span>
// 		<a href="javascript:;" class="blackbutton item_add"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Lägg i kundvagn</a>

	this.title += '<div id="fancybuy" class="simpleCart_shelfItem">';
	this.title += '		(artnr.<small class="item_artnr">' + $(this.element).data("artnr") + '</small>)';
	this.title += '		<span class="item_name" style="display: none;">' + $(this.element).attr("caption") + '</span>';
	this.title += '		<span class="price item_price">995<span class="currency"> SEK</span></span>';
	this.title += '		<a href="javascript:;" class="blackbutton item_add"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Köp förstoring</a>';
	this.title += '</div>';

	/* Disable right click */
// 	$.fancybox.wrap.bind("contextmenu", function (e) {
// 		return false; 
// 	});
}

var carouselSettings = {
		beforeLoad: function() {
			this.title = $(this.element).attr('caption');
		},
		beforeShow: enableShop,
// 		beforeShow: enableSocial,
//         afterShow: function() {
// 
//             // Render tweet button
// //             twttr.widgets.load();
// 			// Display social buttons
// 			$("#fancyshare").delay(1000).fadeIn();
//         },
		'speedIn'		:	600, 
		'speedOut'		:	200,
		'index'			: 	true,
		'overlayShow'	:	true,
		openEffect  : 'elastic',
		closeEffect : 'elastic',
		prevEffect : 'elastic',
		nextEffect : 'elastic',
		padding: 10,
		closeBtn: false,
		helpers	: {
			overlay	: {
				opacity : 1,
				css : {
					'background-color' : '#2D2E2F',
					'background' : 'url(/images/ios-linen.jpg)'
				}
			},
			thumbs	: {
				width	: 75,
				height	: 75
			},
			titleFormat: function() {
				return "Testing";
			},
			title : {
				type : 'float' // 'float', 'inside', 'outside' or 'over'
			},
		}
	}

function initCarousel() {

	$("#carousel").append("<li class='feed-lastitem'><a href='http://www.flickr.com/photos/johanabelson/'><i class='fa fa-external-link'></i></a></li>");
	$("#flickr_loading").remove();
	$("#carousel").fadeIn();

	$(".flickr_image").fancybox(carouselSettings);
}



$(document).ready(function() {

	/* Preload background images */

    var bg = new Image();
	bg.src = "images/iosbg.jpg";
	bg.onload = function() { $("body").css("background-image", "url(" + bg.src + ")"); }

    var floor = new Image();
	floor.src = "images/floorbg.jpg";
	floor.onload = function() { $("div#gallerycontainerbg").css("background-image", "url(" + floor.src + ")"); }

	/* Slides */

	$('#slides').slidesjs({
		width: 980,
		height: 525,
		navigation: {
			active: true
		},
		pagination: {
			active: false
		},
		play: {
			auto: true,
			pauseOnHover: true,
			swap: true
		},
		callback: {
			loaded: function(number) {
				// stuff
				$("#slides .slidesjs-previous").addClass("fa fa-chevron-left");
				$("#slides .slidesjs-next").addClass("fa fa-chevron-right");
				$("#slides .slidesjs-previous, #slides .slidesjs-next").text("");
				$("#slides .slidesjs-previous, #slides .slidesjs-next").delay(1500).css({
					display: "block"
				});
			},
			start: function(number) {
				// Do something awesome!
				// Passes slide number at start of animation
			},
			complete: function(number) {

			}
		}
	});

	$('#slides').hover(function() {
// 		$(".caption").show();
// 		$(".caption").animate({
// 			right: "-980px"
// 		});
		$("#slides .slidesjs-previous, #slides .slidesjs-next").css({
			opacity: .7
		});

	},function() {
// 		$(".caption").hide();
// 		$(".caption").css("right", -980);
		$("#slides .slidesjs-previous, #slides .slidesjs-next").css({
			opacity: 0
		});
	});

	/* Flickr feed */

	$("ul#carousel").jflickrfeed({
		limit: 10,
		qstrings: {
			id: "7496321@N04"
		},
		itemTemplate: 
		'<li>' +
			'<a href="{{image_b}}" image="{{image_b}}" class="flickr_image" rel="flickr"><img src="{{image_s}}" alt="{{title}}" width="75" height="75" /></a>' +
		'</li>'
	},function(data) {
		setTimeout("initCarousel();",1000);
	});

	/* Gallery */

// 	$(".gallery_image").click(function(e) {
// 		e.preventDefault();
// 	});
	$(".gallery_image").fancybox(carouselSettings);
	$(".album").hover(function() {
		$(this).children(".gName").toggleClass("hover");
		$(this).toggleClass("hover");
		$(this).children(".mask").fadeToggle("fast");

	});

	/* Info page */

	$(".showinfo").fancybox({
		padding:'0',
		closeBtn:false,
		openEffect:"fade",
		closeEffect:"fade",
		openSpeed: "fast",
		openOpacity: false,
		helpers	: {
			overlay	: {
				opacity : 1,
				css : {
					'background-color' : '#2D2E2F',
					'background' : 'url(/images/ios-linen.jpg)'
				}
			}
		}

	});
	
	$(".closeinfo").click(function() {
		$.fancybox.close();
	});

// 	setTimeout(function() {
// 		$("body").css("background-image", "url(" + bg.src + ")");  
// 		$("#outerContainer").fadeIn(function() {
// 			$(".loading").remove();
// 		});
// 	},3000);

// 	$("#" + currentPage).click();

// 	$(".box").hover(function() {
// 		$(this).children(".plusbutton").fadeToggle();
// 	});

	/* Map icon */

	$("#studiomap").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect : 'none'
	});

	/* Cart */

	$("#cart").hover(function() {
		$(".cartlist").slideDown();
	}, function() {
		$(".cartlist").slideUp(100);
	});

});

$(document).keydown(function(e){
	if (e.keyCode == 37) { 
		$(".slidesjs-previous").click();
		return false;
	}
});

$(document).keydown(function(e){
	if (e.keyCode == 39) { 
		$(".slidesjs-next").click();
		return false;
	}
});
