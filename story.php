<?php

require_once "db.php";
require_once "siteModel.php";
require_once "siteView.php";

$model = new siteModel(MY_DSN, MY_USER, MY_PASS);

$view = new siteView();
$view->showHeader();
?>

	<div id="callie">
		<img src="img/callie.jpg" alt="Photo of Callie" width="150" height="150"/>
		<h2>Callie</h2>
			<p>Callie grew up in Edmond, OK. She went to the University of Oklahoma and graduated with a Bachelor’s Degree in Journalism in 2009.</p>
	
			<p>She was in the Pride of Oklahoma Marching Band for 3 years where she met some of her greatest friends. She wouldn’t trade the experience for anything.</p>
	
			<p>Fall 2009 Callie moved to Orlando, FL where she started her college program at Walt Disney World® Resort.</p>  
	
			<p>She’s currently working towards a second Bachelor’s Degree in Web Design and Development from Full Sail University.</p>
		
	</div>
	<div id="grant">
		<img class="right" src="img/grant.jpg" alt="Photo of Grant" width="150" height="150"/>
		<h2>Grant</h2>
			<p>Grant grew up in Plano, TX. He played football in High School, which he really enjoyed. January 		2010 Grant moved to Orlando, FL to begin his Disney College Program at Walt Disney World® Resort.</p>  
	
			<p>In June of 2010 Grant graduated from Le Cordon Bleu of Dallas.  He continued to work full time at Disney.</p>
	
			<p>He’s had the opportunity to work at many different restaurants, but his favorite experience was being a part of the reopening team of the California Grill in 2013.</p>
		
	</div>
	<div id="met">
	<img class="right" src="img/castle.jpg" alt="Callie and Grant in front of Cinderella Castle" width="168" height= "245"/>
		<img class="left" src="img/universal.jpg" alt="Callie and Grant at Universal Studios" width="150" height="150"/>
		<h2>How We Met</h2>
			<p> Callie & Grant met in 2010 at Cinderella’s Royal Table inside Cinderella Castle at Magic Kingdom. Their first  encounter was in January of 2010 when Callie thought Grant was basically a huge jerk.

			<p>A few months passed and a seater told everyone Callie thought Grant was cute (which was true, of course). Eventually, Grant heard the gossip as well and asked Callie out.  A week later they went on their first date in August 2010.</p>
			<p>They’ve gone on quite a few more dates since then.  They love to stay at home with their dogs Kingsley and Thor, and go check out new restaurants and breweries.</p>
			
	</div>
	
	<div id="proposal">
		<img class="right" src="img/dream1.jpg" alt="Callie and Grant on the Disney Dream"width="168" height= "245" />
		<img class="left" src="img/dream2.jpg" alt="Callie's ring" width="150" height="150"/>
		<h2>Our Proposal</h2>
		<p>On December 8th, 2013, Callie & Grant embarked on the Disney Dream for a 4-night cruise to the Bahamas. This was their joint Christmas present for each other for 2013 and they were both very much looking forward to it.</p>
		<p>On the 3rd night of the Cruise they ate at Palo, a fine dining Italian restaurant on one of the highest decks.  After an amazing dinner, they went out on the private balcony to look out on Nassau.  Grant mentioned that they had gone on a lot of adventures.  He then asked if Callie wanted to go on adventures with him for the rest of her life.  She turned around and he was on one knee asking her to marry him.  She said, “REALLY?!” then “yes, of course!”</p>
		

	</div>
	
</body>