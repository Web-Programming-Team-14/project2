<?php

    session_start();

    require('./common.php');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if (!(isset($username) && isset($pass))) {
            $_SESSION['error'] = 'Error! <br> <br> Please Fill in all Fields on Log In Page!';
            header('Location: ../pages/errorPage.php');
            exit;
        } else {
            $return_user = [$username, $pass];
            $user_found = false;
            $fileArr = fileGetUser();
            foreach ($fileArr as $value) {
                if ($value[2] == $return_user[0] && trim($value[3]) == trim($return_user[1])) {
                    $_SESSION['user_auth'] = "$value[0] $value[1]";
                    $user_exist = true;
                    break;
                }
            }
            if (!$user_exist) {
                $_SESSION['error'] = 'User not Found! <br><br> Please Sign Up!';
                header('Location: ../pages/errorPage.php');
                exit();
            } else {
                header('Location: ../pages/homepage.php');
                exit();
            }
        }
    }

?>