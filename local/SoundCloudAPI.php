<!DOCTYPE html>
<html lang="en">
<head>
	<title>SoundCloud API</title>
	<?php
	setcookie("PageID", 3);
	require("/links.html");
	?>
	<script type="text/javascript" src="javascripts/SoundCloudAPI.js"></script>
	<script src="//connect.soundcloud.com/sdk.js"></script>
	<meta http-equiv="refresh" content="0; url=http://localhost/website/local" />
</head>
<body>
	
	<?php require("/global.php") ?>

	<h3 class="h3Labels">SoundCloud API Test</h3>
	<a href="#" class="connect">Connect with SoundCloud</a>
    <p id="SCwelcome">Hello, <span id="username"></span></p>
	<br/>
	<ul id="playTracks">
	<li><a href="#" class="playATrack">Play a Suggested Track (WIP)</a></li>
	<li><a href="#" class="playAFavTrack">Play one of your Favorited Tracks</a></li>
	</ul>
	<p id="playWarning">(Make sure you connect with SoundCloud with the link above before you try to play a track!)</p>
	<div id="player"></div>
	<div id="player1"></div>
	<br/>
	<a id="poweredBySC" href="https://www.soundcloud.com"><img src="/images/powered_by_SoundCloud.png" alt="Powered By SoundCloud"></a>
</body>
</html>