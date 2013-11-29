<!DOCTYPE html>
<?php include ("functions.php"); ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Johan Abelson, fotograf, Falköping, ateljé, studio, bröllop, porträtt, produktfotografering, reportage, event" />
<meta name="description" content="Ateljé i centrala Falköping. Bröllop, Produkt, Porträtt, Mode m.m." />
<meta http-equiv="cache-control" content="no-cache" />

<title>Johan Abelson Photography</title>

<link rel="shortcut icon" href="favicon.ico" />

<!-- Site CSS -->
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/slides.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/flickr.css" rel="stylesheet" type="text/css" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<link href="css/cart.css" rel="stylesheet" type="text/css" />
<!-- <link href="css/prints.css" rel="stylesheet" type="text/css" /> -->

<link rel="stylesheet" href="libs/fancybox2/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="libs/fancybox2/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="libs/fontawesome/css/font-awesome.css" />

<!-- JQuery -->
<!-- <script src="libs/jquery/jquery.min.js" type="text/javascript"></script> -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<!-- jquery.animate-enhanced plugin -->
<script src="libs/jquery/jquery.animate-enhanced.min.js" type="text/javascript"></script>
<!-- Fancybox -->
<script type="text/javascript" src="libs/fancybox2/jquery.fancybox.pack.js"></script>
<!-- Optionally add button and/or thumbnail helpers -->
<!-- <script type="text/javascript" src="fancybox2/helpers/jquery.fancybox-buttons.js"></script> -->
<script type="text/javascript" src="libs/fancybox2/helpers/jquery.fancybox-thumbs.js"></script>
<!-- jflickrfeed -->
<script type="text/javascript" src="libs/jflickrfeed/jflickrfeed.min.js"></script>
<!-- Slider -->
<script type="text/javascript" src="libs/slidesjs/jquery.slides.min.js"></script>
<!-- Simple Cart -->
<script type="text/javascript" src="libs/simplecart/simpleCart.min.js"></script>
<!-- Site JS -->
<script src="ja.js" type="text/javascript"></script>

</head>

<body class="ja">
	<div id="outerContainer">
		<div id="mainArea">

			<!-- Header -->

			<?php include("header.php"); ?>

			<!-- Slider & Pages -->

			<div id="pagecontainerbg">
				<div id="pagecontainer">
					<div id="pageslides">
						<div class="pageslide" id="homeslide"><?php include("slide.php"); ?></div>
						<div class="pageslide" id="galleryslide"><?php include("gallery.php"); ?></div>
						<div class="pageslide" id="tjansterslide"><?php include("tjanster.php"); ?></div>
						<div class="pageslide" id="contactslide"><?php include("contact.php"); ?></div>
						<div class="pageslide" id="mintavlaslide"><?php include("mintavla.php"); ?></div>
					</div>
				</div>
			</div>

			<!-- Menu -->

			<?php include("menu.php"); ?>

			<!-- Pages below menu -->

			<div id="pageContainer">
				<?php include("tavlainfo.php"); ?>
			</div>

			<!-- Flickr feed -->

			<?php include("flickr_carousel.php"); ?>

			<!-- Social footer -->

			<?php include("footer.php"); ?>

		</div>
	</div>
	<script type="text/javascript" src="ja_jquery.js"></script>

	<!-- AddThis Smart Layers BEGIN -->
	<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528006cd2ef97c18"></script>
	<script type="text/javascript">
	  addthis.layers({
		'theme' : 'transparent',
		'thankyou' : false,
		'share' : {
		  'services' : "facebook,twitter,google_plusone_share",
		  'position' : 'left',
		  'numPreferredServices' : 5
		}
	  });

	</script>
	<!-- AddThis Smart Layers END -->

</body>
</html>
