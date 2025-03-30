<?php 

	session_start();

	$answer = $_POST['answer'];
	$file = file("../../database/questions.txt");
	$fileData = $file[$_SESSION['current_question']];
	$fileData = explode("%", $fileData);
	$correctAns = $fileData[6];
	if ($_SESSION['current'] == -1 || $_SESSION['current'] == null) {
		header("Location: ../pages/index.php");
	}
	if (trim($answer) != trim($correctAns))
	{
		updateLeaderboard();
		$_SESSION["current"] = -1;
		header("Location: ../pages/loser.php"); 
	}
	else 
	{
		$_SESSION['current'] = $_SESSION['current'] + 1;
		if ($_SESSION['current'] == 15)
		{
			updateLeaderboard();
			$_SESSION["current"] = -1;
			header("Location: ../pages/winner.php");
		}
		else
		{
			header("Location: ../pages/questions.php");
		}
	}

	function updateLeaderboard()
	{
		$leaderboardData = $_SESSION['user_auth'].":".$_SESSION['current'].PHP_EOL;
		file_put_contents('../../database/leaderboard.txt', $leaderboardData, FILE_APPEND);
	}

?>