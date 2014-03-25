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
			<h1>Rehearsal Dinner</h1>
			<h3>4.17.2015</h3>
			<p>Grant’s parents, Debora and Paul Johnson, will be hosting the rehearsal dinner. Once the wedding date gets a little closer we’ll have more information about what time the rehearsal will be and where the dinner will be held.  Stay tuned!</p>
			<p class="greeting" >love,</p>
			<p class="sig" >Callie & Grant</p>
				<form name="input" action="menu.php" method="get">
		<input type="submit" value="back to login" class="button">
	</form>
		</div>

</div>
