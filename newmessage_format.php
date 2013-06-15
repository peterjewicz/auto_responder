
<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location: /Auto_Responder/login.php");
}
 include('db_connect.php'); // = $connection
 error_reporting(E_ALL);
ini_set('display_errors', '1');
$content = $_POST["message"];
$to='';
$subject = "Please Confirm Your Email";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = $content;

$sql = "SELECT * FROM users WHERE confirmed=1";
$result=$connection->query($sql);

while($row = $result->fetch_array())
{
$rows[] = $row;
}

foreach($rows as $row)
{
	
$to .=	$row['email'];
$to .= ';';
$to .= ' ';
mail($to, $subject, $message, $headers);
$to = '';
//echo ($row['email']) . ';' . ' ';
}

?>