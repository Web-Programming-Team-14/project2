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
	<style>
		fieldset
		{
			margin:auto;
			width:100%;
			display:grid;
			grid-template-columns:auto auto;
			grid-template-rows: auto auto;
		}
		h2
		{
			text-align:center;
			color: white;
		}
		#question
		{
			width:50%;
		}
		div
		{
			margin:auto;
		}
		form div
		{
			display:flex;
			justify-content:center;
		}
</style>
</head>

<body>
	<?php
		if ($_SESSION['current'] < 0 || $_SESSION['current'] > 15) {
			header("Location: ./index.php");
		}

		if (!isset($_SESSION['asked_questions'])) {
			$_SESSION['asked_questions'] = [];
		}

		$questions = file("../../database/questions.txt");

		do {
			$randomNum = rand(0,29);
			$current = $questions[$randomNum];
			$current = explode("%", $current);
		} while (in_array($current[0], $_SESSION['asked_questions']));

		$_SESSION['asked_questions'][] = $current[0];
		$_SESSION['current_question'] = $current[0];
    ?>

		<div id = "mainarea">
			<div id = "top"> 
				<img src = "../../img/logo.png" alt = "Logo"> 
			</div> 
				<h1>Welcome to our Game Show</h1>
				<h1>Quiz Millionaire</h1>
			</div>
		<div id="question">
			<form method="post" action="../logic/validate.php">
				<h2><?= $current[1];?></h2>
				<fieldset>
					<div>
					<input type="radio" id="A" name="answer" value="A">
					<label for="A"><?= $current[2];?></label>
					</div>
					<div>
					<input type="radio" id="B" name="answer" value="B">
					<label for="B"><?= $current[3];?></label>
					</div>
					<div>
					<input type="radio" id="C" name="answer" value="C">
					<label for="C"><?= $current[4];?></label>
					</div>
					<div>
					<input type="radio" id="D" name="answer" value="D">
					<label for="D"><?= $current[5];?></label>
					</div>
				</fieldset>
				<div>
					<input type="submit" value="Submit Answer">
				</div>
			</form>
		</div>
		<div id="copyright">
			<p>Copyright &copy; Spring 2025</p>
			<p>Georgia State University - Web Programming</p>
			<p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
		</div>
</body>