<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team 14 - Game Show: Quiz Millionaire</title>
    <link rel="stylesheet" href="../../css/php/style.css">
</head>
<body>
	<div id = "mainarea"> 
		<div id = "top"> 
			<img src = "../../img/logo1.png" alt = "Logo"> 
		</div> 
		<h1>Welcome to our Game Show</h1>
		<h1>Quiz Millionaire</h1>
		<h2>Please Sign Up</h2> 
		<h2> <a href = "./login.php"> Already Sign Up? Please Log In Here</a></h2> 
		<div> 
			<form action="../logic/register-submit.php" method="POST" name="Register_Form">
				<strong> <label for="fname">First Name: </label></strong>
				<input type="text" name="fname" id="fname" require> <br> <br>

				<strong> <label for="lname">Last Name: </label></strong>
				<input type="text" name="lname" id="lname" require> <br> <br>

				<strong> <label for = "username">Username: </label> </strong> 
				<input type = "text" name = "username" id="username" required> <br> <br>
				
				<strong> <label for = "password">Password: </label> </strong> 
				<input type = "password" name = "password" maxlength="8" required> <br><br> 
				
				<input type = "submit" value= "Submit" > <br><br>

			</form>
		</div> 
	</div>
	<div id="copyright">
		<p>Copyright &copy; Spring 2025</p>
        <p>Georgia State University - Web Programming</p>
        <p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
    </div>
</body>
</html>