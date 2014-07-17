<meta http-equiv="refresh" content="5; url=/website/public/" />
<?php
	
	include('../../../htconfig/dbConfig.php');

	$dbSuccess = false;

	$dbConnected = mysqli_connect($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);

	if ($dbConnected) {
		echo "MySQL Connected: SUCCESS<br/>";
		$dbSuccess = true;
	}

	else {
		echo "MySQL Connected: FAILED - ".mysqli_connect_error()."<br/>";
		$dbSuccess = false;
	}

	if($dbSuccess){

		// escape variables for security
		$firstname = mysqli_real_escape_string($dbConnected, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($dbConnected, $_POST['lastname']);
		$age = mysqli_real_escape_string($dbConnected, $_POST['age']);

		$sql="INSERT INTO Visitors (FirstName, LastName, Age)
		VALUES ('$firstname', '$lastname', '$age')";

		if (!mysqli_query($dbConnected,$sql)) {
 			die('Error: ' . mysqli_error($dbConnected));
		}
		
		echo "Thank you, your entry was successfully recorded!<br/>";

		mysqli_close($dbConnected);

	}

		echo "You will be redirected back to the previous webpage in 5 seconds!<br/>";

?>