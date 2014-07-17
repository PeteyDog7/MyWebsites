 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Games</title>
    <?php
    setcookie("PageID", 4);
    require("/links.html");
    ?>
    <script type="text/javascript" src="javascripts/games.js"></script>
</head>
<body>
	
	<?php require("/global.php") ?>

	<h3 class="h3Labels">Games</h3>
	<h4 class="h3Labels">Mario</h3>
	<p id="marioText">Use the arrow keys on your keyboard to control the Mario figure!</p>
	<p id="marioText">(Hint: You can't hold the arrow keys down!)</p>
	<div id="marioDiv">
	    <img id="mario" src="http://i1061.photobucket.com/albums/t480/ericqweinstein/mario.jpg"/>
	</div>
</body>
<html>