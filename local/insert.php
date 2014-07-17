<meta http-equiv="refresh" content="5; url=http://localhost/website/local" />
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
		$email = mysqli_real_escape_string($dbConnected, $_POST['email']);

		$sql="INSERT INTO Visitors (FirstName, LastName, Email)
		VALUES ('$firstname', '$lastname', '$email')";

		if (!mysqli_query($dbConnected,$sql)) {
 			die('Error: ' . mysqli_error($dbConnected));
		}
		
		echo "Thank you, your entry was successfully recorded!<br/>";

		mysqli_close($dbConnected);

	}

	require ("mail.php");

	echo "You will be redirected back to the previous webpage in 5 seconds!<br/>";

?>