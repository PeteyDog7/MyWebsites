<?php
	
	session_start();

	$sessionCount = 0;

	if (!isset($_COOKIE["PageID"])) {
		$_COOKIE["PageID"] = 0;
	}

	switch ($_COOKIE["PageID"]) {

		case '1':
			
			if (isset($_SESSION["counter1"])) {
				$sessionCount = $_SESSION["counter1"];
			}
			
			$_SESSION["counter1"] = $sessionCount + 1;

		break;

		case '2':
			
			if (isset($_SESSION["counter2"])) {
				$sessionCount = $_SESSION["counter2"];
			}
			
			$_SESSION["counter2"] = $sessionCount + 1;

		break;

		case '3':
			
			if (isset($_SESSION["counter3"])) {
				$sessionCount = $_SESSION["counter3"];
			}
			
			$_SESSION["counter3"] = $sessionCount + 1;

		break;

		case '4':
			
			if (isset($_SESSION["counter4"])) {
				$sessionCount = $_SESSION["counter4"];
			}
			
			$_SESSION["counter4"] = $sessionCount + 1;

		break;

	}

	session_write_close();

?>