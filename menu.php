<?php

require_once "db.php";
require_once "siteModel.php";
require_once "siteView.php";

$model = new siteModel(MY_DSN, MY_USER, MY_PASS);

$view = new siteView();
$view->showHeader();
?>

<div id="menu">

		<h1>WELCOME</h1><h2>to</h2><br>
		<h1>callie</h1><h2>and</h2><h1>grant.com</h1>
		
		<h3>Select a page to view</h3>
		
		<h4><a href="bridesmaids.php">bridesmaids</a></h4>
		<h4><a href="groomsmen.php">groomsmen</a></h4>
		<h4><a href="rehearsal.php">rehearsal dinner</a></h4>

</div>
		
