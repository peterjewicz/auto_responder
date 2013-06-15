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
<title>Send Message</title>
</head>

<body>

<form name="contact" action="newmessage_format.php" method="POST">
<label for="Message" id="labelmessage">Message:</label>
			<textarea name="message"  id="message"></textarea><br />
            <input type="submit"  value="Submit"  id="submit">
</form>



</body>
</html>