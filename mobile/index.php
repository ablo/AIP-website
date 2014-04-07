<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico" />

    <title>Johan Abelson Photography</title>

    <!-- Bootstrap core CSS -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Custom styles for this template -->
    <link href="ja.css" rel="stylesheet">

	<!-- Content recommendations for mobile websites -->
<!-- 
	<script type="text/javascript">
	  (function() {
		var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
		po.src = "https://apis.google.com/js/plusone.js?publisherid=101757935754005820941";
		var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
 -->

  </head>

  <body>

	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Johan Abelson Photography</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Startsida</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#tjanster">Tjänster</a></li>
					<li><a href="#kontakt">Kontakt</a></li>
					<li><a href="#tavla">Tavla</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>



	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<!-- 			<li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active"><img src="../gallery/_SLIDE/_MG_1712.jpg" width="980" height="525" alt=""><!-- <div class="carousel-caption"></div> --></div>
			<div class="item"><img src="../gallery/_SLIDE/_MG_0466.jpg" width="980" height="525" alt=""><!-- <div class="carousel-caption"></div> --></div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>

<!-- Contact -->
<br />
<div class="container">
<div class="btn-group btn-group-lg">
	<a href="tel:+46706520992" class="btn btn-success"><span class="glyphicon glyphicon-phone-alt"></span> Ring</a>
	<a href="sms:+46706520992" class="btn btn-success"><span class="glyphicon glyphicon-phone"></span> SMS</a>
	<a href="mailto:johan@johanabelson.com" class="btn btn-success"><span class="glyphicon glyphicon-envelope"></span> Maila</a>
</div>
<br /><br />

<div class="panel-group" id="accordion">
	<div class="panel panel-info" id="tjanster">
		<div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Tjänster</a></div>
		<div id="collapseOne" class="panel-collapse collapse">
			<div class="panel-body">
				<?php include("../tjanster.php"); ?>
			</div>
		</div>
	</div>
	<div class="panel panel-info" id="kontakt">
		<!-- Default panel contents -->
		<div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Kontakt</a></div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<?php include("../contact.php"); ?>
				<?php include("../footer.php"); ?>
			</div>
		</div>
	</div>
</div>


<!-- 
<div class="panel panel-default">
	<div class="panel-body">
		<address>
<h4>Studio Omelette</h4>
		<p>Min studio ligger i centrala Falköping. 
		Studion använder jag när jag fotograferar på uppdrag av kund t ex. produkt- fotografering eller personalfoto. 
		Som privatperson kan du boka tid så tar vi snygga porträtt till dig själv eller din familj! Varför inte nya snygga profilbilder till Facebook!?</p>

		
			Hwassgatan 11<br>
			521 42 Falköping<br>
		</address>
		<a class="btn btn-primary" href="https://maps.google.se/maps?f=q&source=embed&hl=sv&geocode=&q=Hwassgatan+11b,+Falk%C3%B6ping&aq=&sll=58.159002,13.55128&sspn=0.008479,0.024118&ie=UTF8&hq=&hnear=Hwassgatan+11B,+521+42+Falk%C3%B6ping&t=m&layer=c&cbll=58.159268,13.550754&panoid=oWaH243TkGoXmwuKh_3NRA&cbp=13,167.79,,0,-0.56&ll=58.154142,13.550777&spn=0.017843,0.060081&z=14&output=svembed"><span class="glyphicon glyphicon-map-marker"></span> Visa på karta</a>
	</div>
</div>
 -->

<p class="text-center"><a href="#">Gå till webbversion</a></p>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>