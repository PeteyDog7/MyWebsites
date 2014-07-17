	<?php require("/sessionCounter.php") ?>
	<a href="https://twitter.com/noahtk7" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @noahtk7</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div id="clockDiv">
		<h4 id="clockHeader" class="h3Labels">Local Time:</h4>
		<p id="clock"></p>
	</div>
	<div id="sessionCounter">
		<p>You have visited this page <?= $sessionCount ?> times.</p>
	</div>
	<h1>Welcome to My "Website"!</h1>
	<br/>
	<nav>
	<div id="globalNavDiv">
	    <a class="globalNav" href="http://localhost/website/local/index.php">Home Page </a>
	    <a class="globalNav" href="http://localhost/website/local/jQueryTesting.php">jQuery Testing</a>
	    <a class="globalNav" id="SCLink" href="#">SoundCloud API</a>
        <a class="globalNav" href="http://localhost/website/local/games.php">Games</a>
	</div>
	</nav>
	<br/>