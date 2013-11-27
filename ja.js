
	/* Get viewport width and height */

	function openPage(id,xoffset,menutab) {

		var c = "#gallerycontainer";

		$("ul#menu li").removeClass("selected");
		$("ul#menu li#" + id).addClass("selected");

		$("#pageslides").animate({left: "-" + xoffset + "px",leaveTransforms: true},400,function() {

			if ( menutab ) {
				$("#pageslides .menuarrow").remove();
				$("#" + id + "slide").append('<div class="menuarrow"><i id="' + id + 'arrow" class="fa fa-caret-up"></i></div>');

				var arrowXPos = ($(menutab).offset().left - $("#menu").offset().left) + Math.ceil($(menutab).outerWidth()/2) - 12;
				$("div.menuarrow i#" + id + "arrow").css({
					marginLeft: arrowXPos + "px"
				});
				$(".menuarrow").animate({bottom: "-20px",leaveTransforms: true},400);
			}
		});
	}

	function sendMessage(f) {

		$.post("/cgi-bin/FormMail.pl", $("#msgform").serialize())
		.success(function() {
			$("#mailstatus").fadeIn("fast",function() {
				setTimeout(function() {
					$(this).fadeOut();
				},2000);
			});
		});
	}
