<?php
	session_start(); 
	$_SESSION['current'] = '0';
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
			<img src = "../../img/logo.png" alt = "Logo"> 
		</div> 
			<h1>Welcome to My Game Show</h1>
			<h1>Who Wants to be a Millionaire?</h1>
			<p>Welcome, <?= ucwords($_SESSION['user_auth']); ?>!</p> 
			<p>Rules: </p> 
			<p>The game consists of 15 multiple-choice questions, each with 4 possible answers.</p> 
			<p>To win 1 million dollars, the contestant must answer all 15 questions correctly.</p> 
			<p>An incorrect answer ends the game, but reaching certain milestone questions may guarantee a smaller prize.</p> 

			<br> <br> 
			<div class = "nav"> 
				<a href = "./questions.php" class = "box"> 
				Play Game</a> 
				<a href = "./leaderboard.php" class= "box">
				Leaderboard</a> 
				<a href = "./logout.php" class = "box"> 
				Log Out</a> 		
		</div>
	</div> 
	<div id="copyright">
		<p>Copyright &copy; Spring 2025</p>
        <p>Georgia State University - Web Programming</p>
        <p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
    </div>
</body>
</html>