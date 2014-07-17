<!DOCTYPE html>
<html lang="en">
<head>
    <title>jQuery Testing</title>
    <?php 
    setcookie("PageID", 2);
    require("/links.html")
    ?>
	<script type="text/javascript" src="javascripts/jQueryTesting.js"></script>
</head>
<body>
	
    <?php require("/global.php") ?>

	<h3 class="h3Labels">jQuery Testing</h3>
	<p id="first">Click me.</p>
	<p id="second">Click me again.</p>
	<br/>
	<div id="blue" class="coloredDivs"></div>
	<div id="green" class="coloredDivs"></div>
	<br/>
	<h3 class="h3Labels">jQuery <strong>UI</strong> Testing</h3>
	<h4 class="h3Labels">Accordian Menu</h4>
	<p style="font-size:15px;">Click one of the items in the box to learn more about it!</p>
    <div id="accordionMenu">
            <h3>JavaScript</h3>
            <div>
                <p>JavaScript is a programming language used in web browsers, and it's what powers jQuery and jQuery UI.</p>
            </div>
            <h3>jQuery</h3>
            <div>
                <p>jQuery is a JavaScript library that makes your websites look absolutely stunning.</p>
            </div>
            <h3>jQuery UI</h3>
            <div>
                <p>jQuery UI includes even more jQuery goodness!</p>
            </div>
    </div>
    <br/>
    <h4 class="h3Labels">Progress Bar</h3>
    <ul>
    <li class="enablePB"><a href="#" class="enablePB">Enable Progress Bar</a></li>
    <div id="progressBar"></div>
    <li class="pbReset"><a href="#" class="pbReset">Reset Progress Bar</a></li>
    <li class="pb25"><a href="#" class="pb25">25% Complete</a></li>
    <li class="pb50"><a href="#" class="pb50">50% Complete</a></li>
    <li class="pb75"><a href="#" class="pb75">75% Complete</a></li>
    <li class="pb100"><a href="#" class="pb100">100% Complete</a></li>
    <li class="pbAuto"><a href="#" class="pbAuto">Auto Complete</a></li>
    <li class="pbDisable"><a href="#" class="pbDisable">Disable Progress Bar</a></li>
    </ul>
</body>
</html>