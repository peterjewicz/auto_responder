<?php
$youremail = $_GET["email"];
// Redirect Browser if confirm is not set
if(!isset($youremail))
{	
header("Location: http://www.example.com/"); // <--Redirect Address here
exit;
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confrim Email</title>
</head>

<body>
<?php
include('db_connect.php'); // = $connection
 

if(isset($_GET["email"]))
	{
	echo ("Thank you for comfirming your email");
	$sql = "UPDATE users SET confirmed='1' WHERE email='$youremail'";
	$connection->query($sql);
	}
	else
	{
	echo("hello");	 
	}

?>
</body>
</html>