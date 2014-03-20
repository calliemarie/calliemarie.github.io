<?php

require_once "db.php";
require_once "siteModel.php";
require_once "siteView.php";

$model = new siteModel(MY_DSN, MY_USER, MY_PASS);

$view = new siteView();
$view->showHeader();
?>
<div id="guests">
	<div id="okc">
		<h2>Oklahoma City</h2>
		<p>Oklahoma City has grown considerably in the last 20 years.  There is so much to do around the metro area.</p> 
		<p>You could check out downtown, known as Bricktown has many options for dining and
entertainment.  Bricktown also has a beautiful riverwalk to check out.  The wedding location is near Quail Springs Mall, which hosts an AMC 24. There are also a lot of other shopping opportunities.</p>
		<img src="img/okc.jpg" alt="Oklahoma City" width="276" height="185"/>
	</div>
	
	<div id="accomodations">
	<h2>Accomodations</h2>
		<div id="location1">
			<h5><a href="#">Springhill Suites</a></h5>
			<img src="img/springhill.jpg" alt="Springhill Suites" width="207" height="127"/>
			<p>123 Main</p>
		</div>
		<div id="location2">
			<h5><a href="#">Courtyard Marriott</a></h5>
			<img src="img/courtyard.jpg" alt="Courtyard Marriott" width="207" height="127"/>
			<p>433 Main</p>
		</div>	
	</div>
	
	<div id="registries">
		<h2>Registries</h2>
		<p>Callie and Grant are registered at the locations below. Please click the photo to take you to 		each specific registry.</p>
		<a class="reg" href="http://wwww.kohls.com"><img src="img/kohls.jpg" alt="Kohls" width="300" height="130"/></a>
		<a class="reg" href="http://wwww.williams-sonoma.com"><img src="img/williamsonoma-1.jpg" alt="William Sonoma" width="355" height="130"/></a>
	</div>
</div>	
</body>