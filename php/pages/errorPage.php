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
        <h2> <?= $_SESSION['error']; ?></h2>

        <h2> <a href = "../logic/session-destroy.php">Go to Main Page</a> </h2> 
	</div>
    <div id="copyright">
        <p>Copyright &copy; Spring 2025</p>
        <p>Georgia State University - Web Programming</p>
        <p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
    </div>
</body>
</html>