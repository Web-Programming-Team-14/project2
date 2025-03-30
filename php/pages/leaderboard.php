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
	<div id="mainarea"> 
		<div id = "top"> 
				<img src="../../img/logo.png" alt="Logo"> 
		</div> 
		<h1>Welcome to our Game Show</h1>
		<h1>Quiz Millionaire</h1>
		<h2> Leaderboard </h2> 
		<table> 
			<tr>
				<th> Rank </th>
				<th> Participants </th> 
				<th> Scores </th> 
			</tr>
			<?php
				$leaderboard = file("../../database/leaderboard.txt");
				$dataSize = count($leaderboard);
				for($i = 0; $i < $dataSize; $i++)
				{
					$leaderboard[$i] = explode(":", $leaderboard[$i]);
				}
				for($c = 0; $c < $dataSize; $c++)
				{
					$high = $c;
					for($d = $c + 1; $d < $dataSize; $d++)
					{
						if($leaderboard[$d][1] > $leaderboard[$high][1])
						{
							$high = $d;
						}
					}
					if($leaderboard[$c][1] < $leaderboard[$high][1])
					{
						$temp = $leaderboard[$c];
						$leaderboard[$c] = $leaderboard[$high];
						$leaderboard[$high] = $temp;
					}
				}
				if($dataSize < 10)
				{
					for($j = 0; $j < $dataSize; $j++)
					{ ?>
						<tr>
							<td><?= $j+1; ?></td>
							<td><?= $leaderboard[$j][0]; ?></td>
							<td><?= $leaderboard[$j][1]; ?></td>
						</tr>
					<?php }
				}
				else
				{
					for($k = 0; $k < 10; $k++)
					{ ?>
						<tr>
							<td><?= $k+1; ?></td>
							<td><?= $leaderboard[$k][0]; ?></td>
							<td><?= $leaderboard[$k][1]; ?></td>
						</tr>
				<?php }
				} 
			?>
		</table> 
		<h2> <a href="../logic/session-destroy.php">Go to Main Page</a> </h2> 
	</div> 
	<div id="copyright">
		<p>Copyright &copy; Spring 2025</p>
        <p>Georgia State University - Web Programming</p>
        <p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
    </div>
</body>
</html>