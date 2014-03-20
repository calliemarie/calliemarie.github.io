<?php

require_once "db.php";
require_once "siteModel.php";
require_once "siteView.php";

$model = new siteModel(MY_DSN, MY_USER, MY_PASS);

$view = new siteView();
$view->showHeader();
?>

	<div id="wrapper">
	<p>If you were issued a username and password please login here:</p>


	
	<form method="post" action="menu.php">
	<input type="text" name="username">   username <br />
	<input type="password" name="password">   password <br />
	<input type="submit" name="submit" value="log in" class="button">


 	</div>