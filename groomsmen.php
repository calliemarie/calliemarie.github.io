<?php

require_once "db.php";
require_once "siteModel.php";
require_once "siteView.php";

$model = new siteModel(MY_DSN, MY_USER, MY_PASS);

$view = new siteView();
$view->showHeader();
?>
<div id="loggedin">

	<div id="thanks">
		<h2>Groomsmen</h2>
		<h3>THANK YOU!</h3>
		<p>I wanted to let y’all know how much everything means to me. I’m looking forward to the wedding and getting see you all and spend some time together. Seriously, it’s going to be awesome.</p>
		<p>thanks again,</p>
		<p>Grant</p>
	</div>
	<form name="input" action="menu.html" method="get">
		<input type="submit" value="back to login" class="button">
	</form>
	<div id="attire">
		<h2>Attire</h2>
		<p>The groomsmen will be wearing tuxedos from Men’s Wearhouse.  Callie and I haven’t gone to pick them out yet, but as soon as we have we’ll let you know and post the info here.</p>
		<img src="img/menswearhouse.png" alt="Men's Wearhouse" width="276" height="185"/>
	</div>
	
	<div id="party">
		<h2>Bachelor Party</h2>
		<p>Erik and Mike a are planning the bachelor party together.  Please email them if you have any specific questions.  The party will be held one weekend in March in New Orleans!  We’ll probably be driving there.</p> 
		<p>Please contact Mike at (214) 555-1234 and Erik at (214) 555-5432.</p>
		<img src="img/neworleans.jpg" alt="New Orleans" width="276" height="185"/>	
	</div>
	
</div>		
</body>