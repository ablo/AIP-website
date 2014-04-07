<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" />

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Johan Abelson, fotograf, Falköping, ateljé, studio, bröllop, porträtt, produktfotografering, reportage, event" />
<meta name="description" content="Ateljé i centrala Falköping. Bröllop, Produkt, Porträtt, Mode m.m." />
<meta http-equiv="cache-control" content="no-cache" />

<title>Fotograf Johan Abelson</title>

<base href="/AIP-website/">

<!-- Site CSS -->
<link href="css/base.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="libs/fancybox2/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="libs/fancybox2/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<link rel="stylesheet" href="libs/fancybox2/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="libs/fontawesome/css/font-awesome.css" />

<!-- JQuery -->
<!-- <script src="libs/jquery/jquery.min.js" type="text/javascript"></script> -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!-- jquery.animate-enhanced plugin -->
<!-- <script src="libs/jquery/jquery.animate-enhanced.min.js" type="text/javascript"></script> -->
<!-- Fancybox -->
<script type="text/javascript" src="libs/fancybox2/jquery.fancybox.pack.js"></script>
<!-- Optionally add button and/or thumbnail helpers -->
<script type="text/javascript" src="libs/fancybox2/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="libs/fancybox2/helpers/jquery.fancybox-thumbs.js"></script>
<!-- jflickrfeed -->
<script type="text/javascript" src="libs/jflickrfeed/jflickrfeed.min.js"></script>
<!-- Slider -->
<script type="text/javascript" src="libs/slidesjs/jquery.slides.min.js"></script>
<!-- Simple Cart -->
<script type="text/javascript" src="libs/simplecart/simpleCart.min.js"></script>

<?php

	$tmpimg = substr($_SERVER["REQUEST_URI"],22);
	$tmpimg = explode("/",$tmpimg);

	$album = $tmpimg[0];
	$image = $tmpimg[1];

	echo '
		<script type="text/javascript">
			var imageURL = "gallery/' . $album . '/' . $image . '";
		</script>
	';
?>
</head>
<body>
<? 
	$share_address = "http://www.johanabelson.com/lightbox/" . $album . "/" . $image;
?>

<!-- Site JS -->
<script type="text/javascript" src="js/ja.js"></script>

<script type="text/javascript">

	$(document).ready(function() {

		$.fancybox({
			href: window.imageURL,
			modal: true,
			helpers	: {
				title	: {
					type: 'inside'
				},
				overlay	: {
					opacity : 1,
					css : {
						'background' : 'url(/images/ios-linen.jpg)'
					}
				}
			},
			beforeLoad: function() {
				this.title = $(this.element).attr('caption');
			},
			beforeShow: function() {
				
			},
			afterShow: function() {
	
				// Render tweet button
				twttr.widgets.load();
				// Display social buttons
				$("#fancyshare").delay(1000).fadeIn();
			}
		});
	});

</script>
</body>
</html>
