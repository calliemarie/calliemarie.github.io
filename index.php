<?php

/*require_once "db.php";*/
/*require_once "siteModel.php";*/
require_once "siteView.php";


/*$model = new siteModel(MY_DSN, MY_USER, MY_PASS);*/

$view = new siteView();
$view->showHeader();

?>

	<h1 class="cg">Callie & Grant</h1>
	<h4>are getting married!</h4>
	<img src="img/home.jpg" alt="New Fantasyland" width="520" height="440">
	
	<h1>4 . 18 . 2015</h1>
	<h4 class="okc">oklahoma city</h4>
	
<?$view->showFooter();?>

