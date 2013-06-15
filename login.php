<?php
session_start();
include('db_connect.php');

if(isset($_POST["name"]) || isset($_POST["password"]))
{
	$name =	$_POST["name"];
	$pass = $_POST["password"];
	$sql = "SELECT * FROM admin WHERE name='$name' AND pass='$pass'";
	$result=$connection->query($sql);
	$row = mysqli_num_rows($result);
		
		if($row >0)
		{
			$_SESSION['login']=1;
			header("Location: /Auto_Responder/auto_index.php");
		}	
		else
		{
			$error = 'invalid username or password';
		}

	
}
else
{
$error = "Please login";
}



?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>



<form name="contact" action="login.php" method="POST">
        
        <label for"name" id="labelname">Name:</label>
        <input type="text" name="name" id="formbar" class="nameclass" id="name"><br />
        
        <label for"password" id="labelemail">Password:</label>
       	 <input type="text" name="password" id="formbar" class="emailclass" id="password"><br />
         <input type="submit"  value="Submit"  id="submit">
         </form>
         <p> <?php echo($error) ?> </p>
</body>
</html>