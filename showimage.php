<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" />

<meta charset="utf-8" />
<meta http-equiv="content-language" content="sv" />
<meta name="keywords" content="Johan Abelson, fotograf, Falköping, ateljé, studio, bröllop, porträtt, produktfotografering, reportage, event" />
<meta name="description" content="Ateljé i centrala Falköping. Bröllop, Produkt, Porträtt, Mode m.m." />
<meta property="fb:admins" content="618473905" />

<title>Fotograf Johan Abelson</title>

<link href="ja.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/libs/fancybox2/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="/libs/fancybox2/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="/libs/fontawesome/css/font-awesome.css" />

<!-- JQuery -->
<script src="/libs/jquery/jquery.min.js" type="text/javascript"></script>

<!-- Fancybox -->
<script type="text/javascript" src="/libs/fancybox2/jquery.fancybox.pack.js"></script>

<!-- Optionally add button and/or thumbnail helpers -->
<script type="text/javascript" src="/libs/fancybox2/helpers/jquery.fancybox-thumbs.js"></script>

<script type='text/javascript' src="http://platform.twitter.com/widgets.js"></script>

<script src="ja.js" type="text/javascript"></script>

<?php

	$tmpimg = substr($_SERVER["REQUEST_URI"],10);
	$tmpimg = explode("/",$tmpimg);

	$album = $tmpimg[0];
	$image = $tmpimg[1];

	echo '
		<script type="text/javascript">
			var imageURL = "/w2/gallery/' . $album . '/' . $image . '";
		</script>
	';
?>
</head>
<body>
<? 
	$share_address = "http://www.johanabelson.com/lightbox/" . $album . "/" . $image;
// 	include("socialfloat.php");
?>
<script type="text/javascript" src="ja_jquery.js"></script>
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
			beforeShow: window.enableSocial,
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
