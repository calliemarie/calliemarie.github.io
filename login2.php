<?php

require_once "db.php";
require_once "siteModel.php";
require_once "siteView.php";

$model = new siteModel(MY_DSN, MY_USER, MY_PASS);

$view = new siteView();
$view->showHeader();

$username = "guest"; 
$password = "password"; 


if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 

?> 

<p>If you were issued a username and password please login here</p>

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <p><label for="txtUsername">username</label> 
    <br /><input type="text" title="Enter your Username" name="txtUsername" /></p> 

    <p><label for="txtpassword">password</label> 
    <br /><input type="password" title="Enter your password" name="txtPassword" /></p> 

    <p><input type="submit" name="Submit" value="Login" /></p> 

</form> 

<?php 

} 
else { 

?> 

<div id="menu">

		<h1>WELCOME</h1><h2>to</h2><br>
		<h1>callie</h1><h2>and</h2><h1>grant.com</h1>
		
		<h3>Select a page to view</h3>
		
		<h4><a href="bridesmaids.php">bridesmaids</a></h4>
		<h4><a href="groomsmen.php">groomsmen</a></h4>
		<h4><a href="rehearsal.php">rehearsal dinner</a></h4>

</div>

<?php 

} 

?>