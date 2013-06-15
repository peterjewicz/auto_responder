<?php
session_start();

if(!isset($_SESSION['login']))
{
	header("Location: /Auto_Responder/login.php");
}



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
</head>

<body>


<h1> Welcome! What Would you like to do? </h1>



<a href="send_message.php"> Send a Messge </a> <br/>
<a href=""> Remove an email </a><br/>
<a href=""> export to text document </a>

</body>
</html>