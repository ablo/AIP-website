
function openPage(id,idx,menutab) {

	var pageWidht = $("#pagecontainer").width();
	var offsetVal = (pageWidht * idx);

	var c = "#gallerycontainer";

	$("ul#menu li").removeClass("selected");
	$("ul#menu li#" + id).addClass("selected");

	$(".menuarrow").transition({y: 0},400);

	$("#pageslides").transition({x:"-" + offsetVal + "px", y: 0},1000,"snap",function() {

		if ( menutab ) {
// 			$("#pageslides .menuarrow").remove();
// 			$("#" + id + "slide").append('<div class="menuarrow"><i id="' + id + 'arrow" class="fa fa-caret-up"></i></div>');
// 			$("#menu .menuarrow").remove();
// 			$("#menu").prepend('<li class="menuarrow"><i id="' + id + 'arrow" class="fa fa-caret-up"></i></div>');

			var arrowXPos = ($(menutab).offset().left - $("#menu").offset().left) + Math.ceil($(menutab).outerWidth()/2) - 12;
			$(".menuarrow").css({
				marginLeft: arrowXPos + "px"
			});
			$(".menuarrow").transition({y: "-17px"},200);

			/* Contact */
			if ( id == "contact" ) {
				$(".contactname").focus();
			}
			/* - */
		}
	});

// 	$("#pageslides").animate({left: "-" + xoffset + "px",leaveTransforms: true},400,function() {
// 
// 		if ( menutab ) {
// 			$("#pageslides .menuarrow").remove();
// 			$("#" + id + "slide").append('<div class="menuarrow"><i id="' + id + 'arrow" class="fa fa-caret-up"></i></div>');
// 
// 			var arrowXPos = ($(menutab).offset().left - $("#menu").offset().left) + Math.ceil($(menutab).outerWidth()/2) - 12;
// 			$("div.menuarrow i#" + id + "arrow").css({
// 				marginLeft: arrowXPos + "px"
// 			});
// 			$(".menuarrow").animate({bottom: "-20px",leaveTransforms: true},400);
// 
// 			/* Contact */
// 			if ( id == "contact" ) {
// 				$(".contactname").focus();
// 			}
// 			/* - */
// 		}
// 	});
}

function sendMessage() {

	if ( $(".contactname").val() != "" && $(".contactemail").val() != "" && $(".contactmessage").val() != "" ) {

		$.post("/cgi-bin/FormMail.pl", $("#msgform").serialize())
		.success(function() {
			$(".mailstatus.error").hide();
			$(".mailstatus.success").fadeIn("fast",function() {
				setTimeout(function() {
					$(".mailstatus.success").fadeOut();
				},2000);
			});
		});
	} else {
		$(".mailstatus.success").hide();
		$(".mailstatus.error").fadeIn("fast",function() {
			setTimeout(function() {
				$(".mailstatus.error").fadeOut();
			},2000);
		});
	}
}


function enableShop() {

// 		<h4 class="item_artnr">Art. 2966</h4>
// 		<h2 class="item_name">Great Wall</h2>
// 		<p>Bilden tog jag en tidig morgon i jingchen asdasdads </p>
// 		<br />
// 		<span class="price item_price">4900<span class="currency"> SEK</span></span>
// 		<a href="javascript:;" class="blackbutton item_add"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Lägg i kundvagn</a>

// 	this.title += '<div id="fancybuy" class="simpleCart_shelfItem" style="float: right;">';
// 	this.title += '	<small style="display: none;">artnr.<span class="item_artnr">' + $(this.element).data("artnr") + '</span></small>';
// 	this.title += '	<span class="item_name" style="display: none;">' + $(this.element).attr("caption") + '</span>';
// 	this.title += '	<span class="price item_price">995<span class="currency"> SEK</span></span>';
// 	this.title += '	<a href="javascript:;" style="position: absolute; right: 0; bottom: 0;" class="blackbutton icon item_add"><i class="fa fa-shopping-cart"></i></a>';
// 	this.title += '</div>';

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
	'speedIn'		:	600, 
	'speedOut'		:	200,
	'index'			: 	true,
	'overlayShow'	:	true,
	openEffect  : 'fade',
	closeEffect : 'fade',
	prevEffect : 'fade',
	nextEffect : 'fade',
	padding: 10,
	closeBtn: false,
	helpers	: {
		overlay	: {
			opacity : 1,
			css : {
				'background-color' : '#2D2E2F',
				'background' : 'url(images/iosbg.jpg)'
			}
		},
// 		buttons	: { tpl: '<div id="fancybox-buttons"><ul style="width:132px"><li><a class="btnPrev" title="Previous" href="javascript:;"></a></li><li><a class="btnPlay" title="Start slideshow" href="javascript:;"></a></li><li><a class="btnNext" title="Next" href="javascript:;"></a></li><li><a class="btnClose" title="Close" href="javascript:jQuery.fancybox.close();"></a></li></ul></div>' },
		buttons	: { tpl: '<div id="fancybox-buttons" class="top simpleCart_shelfItem"><ul style="width: 240px;"><li><a class="btnPrev" title="Previous" href="javascript:;"></a></li><li><a class="btnPlay" title="Start slideshow" href="javascript:;"></a></li><li><a class="btnNext" title="Next" href="javascript:;"></a></li><!--<li><a class="btnToggle" title="Toggle size" href="javascript:;"></a></li>--><li><a href="javascript:;" class="item_add helper-button-override"><i class="fa fa-shopping-cart"></i> <span class="price item_price">795<span class="currency"> SEK</span></span></a></li><li><a class="btnClose" title="Close" href="javascript:;"></a></li></ul></div>' },
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

	$("#flickr").append("<li class='feed-lastitem'><a href='http://www.flickr.com/photos/johanabelson/'><i class='fa fa-external-link'></i></a></li>");
	$("#flickr_loading").remove();
	$("#flickr").fadeIn();

	$(".flickr_image").fancybox(carouselSettings);
}

$(document).ready(function() {

	/* Preload background images */

    var bg = new Image();
	bg.src = "images/iosbg.jpg";
	bg.onload = function() { $("body").css("background-image", "url(" + bg.src + ")"); }

    var floor = new Image();
	floor.src = "images/floorbg.jpg";
	floor.onload = function() { $("div#pagecontainerbg").css("background-image", "url(" + floor.src + ")"); }

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

	$("ul#flickr").jflickrfeed({
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
	$(".album, .box").hover(function() {
		$(this).children(".gName").addClass("hover");
		$(this).addClass("hover");
// 		$(this).children(".mask").fadeIn("fast");
		$(this).children(".mask").fadeTo("fast",0.8);

	}, function() {
		$(this).children(".gName").removeClass("hover");
		$(this).removeClass("hover");
// 		$(this).children(".mask").fadeOut("fast");
		$(this).children(".mask").fadeTo("fast",0);

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
					'background' : 'url(images/iosbg.jpg)'
				}
			}
		}

	});
	
	$(".closeinfo").click(function() {
		$.fancybox.close();
	});

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

