
<?php
$to = $email;
$body = "Thank you for submitting a form on my website.".PHP_EOL;
$body .= "The information you submitted was:".PHP_EOL;
$body .= "First Name: ".$firstname.PHP_EOL;
$body .= "Last Name: ".$lastname.PHP_EOL;
$body .= "Email Address: ".$email.PHP_EOL;


if (mail($to,"Form Submission", $body)) {
	echo("Message successfully sent!<br/>");
}
else {
	echo("Message delivery failed...<br/>");
}

?>