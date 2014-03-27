<?php

/*require_once "db.php";*/
/*require_once "siteModel.php";*/
require_once "siteView.php";


/*$model = new siteModel(MY_DSN, MY_USER, MY_PASS);*/

$view = new siteView();
$view->showHeader();
?>
<div id="guests">
	<div id="okc">
	<img class="right" src="img/okc.jpg" alt="Oklahoma City" width="276" height="185"/>
		<h2>Oklahoma City</h2>
		<div id="Oklahoma City" class="cushycms">
		<p>Oklahoma City has grown considerably in the last 20 years.  There is so much to do around the metro area.</p> 
		<p>You could check out downtown, known as Bricktown has many options for dining and entertainment. Bricktown also has a beautiful riverwalk to check out.  The wedding location is near Quail Springs Mall, which hosts an AMC 24. There are also a lot of other shopping opportunities.</p>
		</div>
		
	</div>
	
	<div id="accomodations">
	<h2>Accomodations</h2>
		<div id="location1">
		<img class="right" src="img/springhill.jpg" alt="Springhill Suites" width="207" height="127"/>
			<h5><a href="http://www.marriott.com/hotels/travel/okcsh-springhill-suites-oklahoma-city-quail-springs/">Springhill Suites</a></h5>
			<p>123 Main</p>
			<p>OKC, OK 73071</p>
		</div>
		
		<div id="location2">
		<img src="img/courtyard.jpg" alt="Courtyard Marriott" width="207" height="127"/>
			<h5><a href="http://www.marriott.com/hotels/travel/okcdt-courtyard-oklahoma-city-downtown/">Courtyard Marriott</a></h5>
			
			<p>433 Main</p>
			<p>Edmond, OK 73013</p>
		</div>	
		
	</div>
	
	<div id="registries">
		<h2>Registries</h2>
		<a href="http://wwww.kohls.com"><img class="reg" src="img/kohls.jpg" alt="Kohls" width="300" height="130"/></a>
		<a href="http://www.williams-sonoma.com"><img class="reg" src="img/williamsonoma-1.jpg" alt="William Sonoma" width="350" height="130"/></a>
	</div>
<?$view->showFooter();?>