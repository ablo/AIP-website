<div id="cart" class="_simpleCart_items">
<span class="simpleCart_quantity"></span> varor i kundvagnen - <span class="simpleCart_total"></span> SEK
<a href="javascript:;" class="blackbutton simpleCart_empty" style="float:right;">Töm</a>
<a href="javascript:;" class="simpleCart_checkout" style="float:right;">Gå till kassan</a>
<!-- <a href="javascript:;" class="simpleCart_empty" style="float:right;margin:0 10px 0 0;">Töm</a> -->
</div>



<div id="tavla" class="simpleCart_shelfItem">
<!-- 
	<div id="ram">
		<div id="passepartout">
			<img src="gallery/timthumb.php?src=tavlor/2966/_MG_2966.jpg&amp;h=300&amp;zc=1&amp;q=100" alt="" />
		</div>
	</div>
 -->
 	<div id="tavlatext_landscape" class="box">
 		<img src="gallery/timthumb.php?src=tavlor/2966/_MG_2966.jpg&amp;w=285&amp;zc=1&amp;q=100" alt="" />
<!-- 		<h4 class="item_name">Art. 2966</h4> -->
		<h2>Great Wall</h2>
		<p>Bilden tog jag en tidig morgon i jingchen asdasdads </p>
		<br />
		<span class="price item_price">995</span><span class="currency"> SEK</span>
		<a href="javascript:;" class="blackbutton item_add" style="float:right;"><i class="icon-shopping-cart"></i>&nbsp;&nbsp;Köp</a>
	</div>
 	<div id="tavlatext_portrait" class="box">
 		<img src="gallery/timthumb.php?src=gallery/4_Resa/_MG_1806.jpg&amp;w=195&amp;zc=1&amp;q=100" alt="" />
<!-- 		<h4 class="item_name">Art. 2966</h4> -->
		<h2>Tailboat</h2>
		<p>Solnedgång i Thailand</p>
		<br />
		<span class="price item_price">4900<span class="currency"> SEK</span></span>
		<a href="javascript:;" class="blackbutton item_add" style="float:right;"><i class="icon-shopping-cart"></i>&nbsp;&nbsp;Köp</a>
	</div>
	<div id="tavlatext_landscape" class="box">
 		<img src="gallery/timthumb.php?src=tavlor/2966/_MG_2966.jpg&amp;w=285&amp;zc=1&amp;q=100" alt="" />
<!-- 		<h4 class="item_name">Art. 2966</h4> -->
		<h2>Great Wall</h2>
		<p>Bilden tog jag en tidig morgon i jingchen asdasdads </p>
		<br />
		<span class="price item_price">4900<span class="currency"> SEK</span></span>
		<a href="javascript:;" class="blackbutton item_add" style="float:right;"><i class="icon-shopping-cart"></i>&nbsp;&nbsp;Köp</a>
	</div>
</div>

<div class="menuarrow"><i id="tavlaarrow" class="icon-caret-up"></i></div>

<script type="text/javascript" src="simplecart/simpleCart.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
// 		$("#cart").delay(1000).slideDown();

		simpleCart({
			checkout: {
				type: "PayPal",
				email: "you@yours.com"
			},
			currency: "SEK"
		});
	});

</script>

