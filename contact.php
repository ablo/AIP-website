<div id="contactform" class="box hidden-xs">
<form method="post" action="/cgi-bin/FormMail.pl" id="msgform">
<fieldset>
<label>Ditt namn</label>
<input type="text" name="name" class="contactname" placeholder="Anna Andersson" /><br />
<label>Epost</label>
<input type="text" name="email" class="contactemail" placeholder="min@mail.com" /><br />

<label>Meddelande</label>
<textarea name="message" class="contactmessage" placeholder="Detta är mitt meddelande till fotografen." rows="4" cols="20"></textarea><br />
<a class="blackbutton contactsend" onclick="sendMessage();"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Skicka f&ouml;rfr&aring;gan</a>
<div class="mailstatus success"><i class="fa fa-check-circle fa-lg"></i>&nbsp;&nbsp;Mailet skickades</div>
<div class="mailstatus error"><i class="fa fa-exclamation-circle fa-lg"></i>&nbsp;&nbsp;Fyll i alla fälten ovan!</div>

<input type="hidden" name="recipient" value="johan@johanabelson.com" />
<input type="hidden" name="subject" value="Kontaktfotmul&auml;r - johanabelson.com" />
<input type="hidden" name="redirect" value="/mailredirectfix.html" />
</fieldset>
</form>

</div>

<div class="box contactinfo">

	<div class="me"></div>

</div>

<div class="box contactinfo">

	<ul class="contact hidden-xs">
		<li class='tel'><i class='fa fa-mobile fa-lg'></i>&nbsp;0706-520992</li>
	</ul>

<!-- 	<h2>Bokning/Offert</h2> -->
	<p>Kontakta mig f&ouml;r fr&aring;gor ang. bokning/priser.</p>
	<h2>Adress</h2>
	<p>
		Abelson Imago Production<br />
		Solhemsgatan 19<br />
		521 30 Falk&ouml;ping
	</p>
	<h2>Studio<!--  Omelette --></h2>
	<p>
		Hwassgatan 11<br />
		521 42 Falk&ouml;ping
		&nbsp;<a id="studiomap" class="fancybox.iframe btn btn-primary" href="https://maps.google.se/maps?f=q&amp;source=embed&amp;hl=sv&amp;geocode=&amp;q=Hwassgatan+11b,+Falk%C3%B6ping&amp;aq=&amp;sll=58.159002,13.55128&amp;sspn=0.008479,0.024118&amp;ie=UTF8&amp;hq=&amp;hnear=Hwassgatan+11B,+521+42+Falk%C3%B6ping&amp;t=m&amp;layer=c&amp;cbll=58.159268,13.550754&amp;panoid=oWaH243TkGoXmwuKh_3NRA&amp;cbp=13,167.79,,0,-0.56&amp;ll=58.154142,13.550777&amp;spn=0.017843,0.060081&amp;z=14&amp;output=svembed" title="Hwassgatan 11"><i class="fa fa-map-marker fa-lg glyphicon glyphicon-map-marker"></i></a>
	</p>
	<h2>&Ouml;vrigt</h2>
	<p>
		Org. nr: 19800211-6013<br />
		Innehar F-skattebevis
	</p>

</div>