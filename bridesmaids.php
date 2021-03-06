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
		<h1>Bridesmaids</h1>
		<h3>THANK YOU!</h3>
		<p id="Bridesmaids Thanks" class="cushycms">I just wanted to tell you all again just how much you mean to me and how much I appreciate you being a part of our day. Please use this page as a resource for any information you may need. Of course, you can always contact me with any questions!</p>
		<p class="greeting">love,</p>
		<p class="sig">Callie</p>
			<form name="input" action="menu.php" method="get">
		<input type="submit" value="back to login" class="button">
	</form>
	</div>

	<div id="attire">
		<img class="right" src="img/color.jpg" alt="Bridesmaids dress color" width="276" height="185"/>
		<h2>Attire</h2>
		<div id ="Bridesmaid attire" class="cushycms">
		<p>We want everyone to be as comfortable as possible on our wedding day.  We’re asking the bridesmaids to please order any tea-length regency colored dress from David’s Bridal.</p>  
		<p>Since the ceremony is long and you’ll be standing for most of it, choose whatever dress shoes that you’d like to wear.  Sandals are fine, but please no Chacos until the reception.  Brad, we’ll have more information for you as soon as Grant makes a trip to Men’s Warehouse with his groomsmen.</p>
		</div>
	</div>
	
	<div id="party">
		<img class="right" src="img/denver.jpg" alt="Denver" width="276" height="185"/>	
		<h2>Bachelorette Party</h2>
		<div id="Bachelorette Party" class="cushycms">
		<p>Kirsten and Laura are planning the bachelorette party together. Please email them if you have any specific
questions. The party will be held one weekend in March in Denver, CO. Southwest currently has the best price from Oklahoma City.</p>
		<p>Please contact Laura at (405) 555-1234 and Kirsten at (214) 555-5432.</p>
		</div>
	</div>
	
	<div id="shower">
		<img class="right" src="img/shower.jpg" alt="Shower invitation" width="276" height="185"/>
		<h2>Bridal Shower</h2>
		<p id="Bridal Shower" class="cushycms">Callie's mom, Donna, and aunt Anna are hosting a Bridal Shower in Pompton Lakes, NJ sometime in the Spring. I'll have more information for you soon.</p>
	</div>
</div>	
	<?$view->showFooter();?>