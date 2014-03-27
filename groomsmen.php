<?php

/*require_once "db.php";*/
/*require_once "siteModel.php";*/
require_once "siteView.php";


/*$model = new siteModel(MY_DSN, MY_USER, MY_PASS);*/

$view = new siteView();
$view->showHeader();
?>
<div id="loggedin">

	<div id="thanks">
		<h1>Groomsmen</h1>
		<h3>THANK YOU!</h3>
		<div id="Groomsmen note" class="cushycms"><p>I wanted to let y&rsquo;all know how much everything means to me. I&rsquo;m looking forward to the wedding and getting see y&#39;all and spend some time together. Seriously, it&rsquo;s going to be awesome.</p>
</div>
		<p class="greeting">thanks again,</p>
		<p class="sig">Grant</p>
			<form name="input" action="menu.php" method="get">
		<input type="submit" value="back to login" class="button">
	</form>
	</div>

	<div id="attire">
		<img class"right" src="img/menswearhouse.png" alt="Men's Wearhouse" width="276" height="185"/>
		<h2>Attire</h2>
		<p id="Groomsmen Attire" class="cushycms">The groomsmen will be wearing tuxedos from Men&rsquo;s Wearhouse. Callie and I haven&rsquo;t gone to pick them out yet, but as soon as we have we&rsquo;ll let you know and post the info here.</p>
	</div>
	
	<div id="party">		
		<img class="right" src="img/neworleans.jpg" alt="New Orleans" width="276" height="185"/>	
		<h2>Bachelor Party</h2>
		<div id="Bachelor Party" class="cushycms"><p>Erik and Mike a are planning the bachelor party together. Please email them if you have any specific questions. The party will be held one weekend in March in New Orleans! We&rsquo;ll probably be driving there.</p>


<p>Please contact Mike at (214) 555-1234 and Erik at (214) 555-5432.</p>
</div>
	</div>
	
	
</div>		
<?$view->showFooter();?>