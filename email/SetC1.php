 
<!DOCTYPE html>
<html>
<head>
	 
	<title>SET C1</title>
</head>
<body>
	<h2>Login User</h2>
	<form method="post">
		username : <input type="text" name="name" required> <br> <br>
		Password : <input type="password" name="pass" required> <br> <br>
		<input type="submit" name="submit" value="LOGIN"> <br> <br> <hr> <br>
	</form>
</body>
</html>

<?php

if(isset($_POST['submit'])) 
{

	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if($name == "xyz" && $pass== "123") 
	{

		header("Location: setc1.html");
		exit();
	}
	else
	 {
		echo "<big><b>Login Failed !</b></big>";
	}
}

?>
