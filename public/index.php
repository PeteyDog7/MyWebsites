<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Test Website</title>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="javascripts/global.js"></script>
	<script type="text/javascript" src="javascripts/clock.js"></script>
	<script type="text/javascript" src="javascripts/script.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css"/>
</head>
<body>
	<a href="https://twitter.com/noahtk7" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @noahtk7</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div id="clockDiv">
		<h4 id="clockHeader" class="h3Labels">Local Time:</h4>
		<p id="clock"></p>
	</div>
	<h1>Welcome to My "Website"!</h1>
	<br/>
	<nav>
	<div id="globalNavDiv">
	    <a class="globalNav" href="/website/public/index.php">Home Page </a>
	    <a class="globalNav" href="/website/public/jQueryTesting.html">jQuery Testing</a>
	    <a class="globalNav" id="SCLink" href="#">SoundCloud API</a>
        <a class="globalNav" href="/website/public/games.html">Games</a>
	</div>
	</nav>
	<br/>
	<h3 class="h3Labels">Information</h3>
	<p>Welcome to my test "website" hosted by the <a href="https://apachefriends.org">Apache XAMPP</a> web server!</p>
	<br/>
	<h3 class="h3Labels">MySQL Server Test</h3>
	<form action="insert.php" method="post">
		First Name: <input type="text" name="firstname"><br/>
		Last Name: <input type="text" name="lastname"><br/>
		Age: <input type="text" name="age"><br/>
		<input type="submit"><br/>
	</form>
	<br/>
	<p>Current number of records in the database: 
	<?php

		include('../../../htconfig/dbConfig.php');

		$dbSuccess = false;

		$dbConnected = mysqli_connect($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);

		if ($dbConnected) {
			//echo "MySQL Connected: SUCCESS<br/>";
			$dbSuccess = true;
		}

		else {
			//echo "MySQL Connected: FAILED - ".mysqli_connect_error()."<br/>";
			$dbSuccess = false;
		}

		if($dbSuccess){

			$result = mysqli_query($dbConnected, "SELECT * FROM visitors ORDER BY ID DESC;");

			$row = mysqli_fetch_array($result);
 			echo $row['ID'];

 		}

	?>
	</p>
	<br/>
	<p>Transfer Info Between Scripts</p>
	<form method="post" action="transfer.php">
		<input type="hidden" value="Hidden Test String" name="hiddenTest">
		<input type="submit" value="Transfer">
	</form>
</body>
</html>