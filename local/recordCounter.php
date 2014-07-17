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
 			$amount = $row['ID'];

 		}

	?>