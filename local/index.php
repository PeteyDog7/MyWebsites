<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php
    setcookie("PageID", 1);
    require("/links.html");
    require ("/recordCounter.php");
    ?>
</head>
<body>
	
	<?php require("/global.php") ?>

	<h3 class="h3Labels">Information</h3>
	<p>Welcome to my test "website" hosted by the <a href="https://apachefriends.org">Apache XAMPP</a> web server!</p>
	<a href="/website/local/serverInfo.php">Server Info</a>
	<br/>
	<h3 class="h3Labels">MySQL Server Test</h3>
	<form action="insert.php" method="post">
		First Name: <input type="text" name="firstname"><br/>
		Last Name: <input type="text" name="lastname"><br/>
		Email Address: <input type="text" name="email"><br/>
		<input type="submit"><br/>
	</form>
	<br/>
	<p>Current number of records in the database: <?= $amount ?></p>
	<br/>
	<p>Transfer Info Between Scripts</p>
	<form method="post" action="transfer.php">
		<input type="hidden" value="Hidden Test String" name="hiddenTest">
		<input type="submit" value="Transfer">
	</form>
</body>
</html>