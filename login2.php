<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "callieandgrant";

mysql_connect($host, $user, $pass);
mysql_select_db($db);


if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE userName='".$username."' AND password='".$password."' LIMIT 1";
$res = mysql_query($sql);

if (mysql_num_rows($res)==1){
	echo"Welcome!";
	exit();
	}else{
			echo "Invalid info. Please return to previous page.";
			exit ();
		}
	
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>callieandgrant.com</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<script src='https://cdn.firebase.com/v0/firebase.js'></script>
	<script type='text/javascript'
        src='https://cdn.firebase.com/js/simple-login/1.3.0/firebase-simple-login.js'>

</head>

<body>
<header>
	<div id="chevron">
	</div>
	<nav>
		<ul>
			<li><a href="story.html">our story</a></li>
			<li><a href="day.html">our day</a></li>
			<li><a class="logo" href="index.html"><img src="img/logo.png" alt="Home"/></a></li>
			<li><a href="guests.html">our guests</a></li>
			<li><a href="login.html">login</a></li>
		</ul>
	</nav>
</header>

	<div id="wrapper">
	<p>If you were issued a username and password please login here:</p>

	<form method="post" action="menu.html">
	<input type="text" name="username">   username <br />
	<input type="password" name="password">   password <br />
	<input type="submit" name="submit" value="log in" class="button">

	</form>
	 
 	</div>