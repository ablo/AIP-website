<!-- 
<span class="simpleCart_quantity"></span> items - <span class="simpleCart_total"></span>
<a href="javascript:;" class="simpleCart_checkout">Checkout</a>
 -->

<div id="cart" class="_simpleCart_items">
	<span class="simpleCart_quantity"></span> varor i kundvagnen - <span class="simpleCart_total"></span>
	<a href="javascript:;" class="simpleCart_checkout" style="float:right;"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Gå till kassan</a>
	<a href="javascript:;" class="simpleCart_empty" style="float:right;margin:0 10px 0 0;"><i class="fa fa-trash-o"></i>&nbsp;&nbsp;Töm</a>
	<div class="cartlist">
		<div class="simpleCart_items"></div>
		<hr />
		<a href="https://www.paypal.com/webapps/mpp/paypal-popup" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" id="paypal"><i class="fa fa-credit-card fa-lg"></i>&nbsp;&nbsp;<u>Betalningen hanteras av PayPal<span style="font-family:helvetica;">&trade;</span> och är säker att använda. Klicka för mer info.</u></a>
		<span class="simpleCart_total"></span>
	</div>
</div>

<!-- 
<div id="tavla" class="simpleCart_shelfItem">
	<div id="ram">
		<div id="passepartout">
			<img src="gallery/timthumb.php?src=tavlor/2966/_MG_2966.jpg&amp;h=300&amp;zc=1&amp;q=100" alt="" />
		</div>
	</div>
	<div id="tavlatext_landscape" class="box">
		<h4 class="item_artnr">Art. 2966</h4>
		<h2 class="item_name">Great Wall</h2>
		<p>Bilden tog jag en tidig morgon i jingchen asdasdads </p>
		<br />
		<span class="price item_price">4900<span class="currency"> SEK</span></span>
		<a href="javascript:;" class="blackbutton item_add"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Lägg i kundvagn</a>
	</div>
</div>
 -->

<div class="menuarrow"><i id="tavlaarrow" class="fa fa-caret-up"></i></div>

<script type="text/javascript">

	$(document).ready(function() {
		$("#cart").delay(1000).slideDown();

		simpleCart({
			checkout: {
				type: "PayPal",
				email: "you@yours.com"
			},
			currency: "SEK",
			cartColumns: [
				{ attr: "artnr" , label: false } ,
				{ attr: "name" , label: false } ,
				{ attr: "price" , label: false, view: 'currency' } ,
				{ view: "decrement" , label: false , text: "-" } ,
				{ attr: "quantity" , label: false } ,
				{ view: "increment" , label: false , text: "+" } ,
// 				{ attr: "total" , label: false, view: 'currency' } ,
				{ view: "remove" , text: "Ta bort tavla" , label: false }
			]
		});
	});

</script>

