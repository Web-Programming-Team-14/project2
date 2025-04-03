<?php
    session_start();
    $_SESSION['user_auth'] = '';
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
        <h2> Please Log In</h2> 
        <div> 
            <form action="../logic/login-submit.php" method="POST">
                <strong> <label for = "username"> Username: </label> </strong> 
                <input type = "text" name = "username" required=""> <br> <br>
                
                <strong> <label for = "password"> Password: </label>  </strong> 
                <input type = "password" name = "password" required = ""> <br><br> 
                
                <input type = "submit" value= "Submit" > <br><br> 
                
            </form>
        </div> 
        <h2> <a href = "./index.php">Go to Main Page</a> </h2> 
    </div> 
    <div id="copyright">
        <p>Copyright &copy; Spring 2025</p>
        <p>Georgia State University - Web Programming</p>
        <p>Team 14 - Sophie Nguyen - Grant Boddy - Rida Hameed Syeda</p>
    </div>
</body>
</html>