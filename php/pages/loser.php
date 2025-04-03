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
			<div> 
				<img id = "loser" src = "../../img/lose1.png" alt = "Loser"> <br>
			</div> 
			<h1>Sorry! You Lost!</h1>
			<p> Please Try Again, <?= ucwords($_SESSION['user_auth']); ?>!</p> 
			
			<div class = "nav"> 
				<a href = "./homepage.php" class = "box"> 
				Try Again</a> 
				
				<a href = "./leaderboard.php" class= "box">
				Check the leaderboard</a> 
				
				<a href = "./logout.php" class = "box"> 
				Log Out </a> 
				
		</div>	
	</div> 
	<div id="copyright">
		<p>Copyright &copy; Spring 2025</p>
        <p>Georgia State University - Web Programming</p>
        <p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
    </div>
</body>
</html>