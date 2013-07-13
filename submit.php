<?php
 include('db_connect.php'); // = $connection
 error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = $_POST['name'];
$email = $_POST['email'];
$confirmed = 0;
// Check to see if email is already in use
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param('s',  $email);
$stmt->execute();
$result = $stmt->fetch();
//$row = mysqli_num_rows($result);
$stmt->close(); 


if($result==0) // if no email found insert
{
echo("email was not found");
//insert email and name into database
$sql = "INSERT INTO users(name, email, confirmed) VALUES (?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param('ssi', $name, $email, $confirmed );
$stmt->execute(); 
$stmt->close();


// send email
$subject = "Please Confirm Your Email";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = "please confrim mother fucker\n\n";
$message .="<a href='http://localhost/Auto_Responder/confirm.php?email=$email'> click here </a>";

mail($email, $subject, $message, $headers);
}
else
{
	echo("email was already used");
}












?>
