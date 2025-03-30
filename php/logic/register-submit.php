<?php

    session_start();

    require('./common.php');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if (!(isset($firstName) && isset($lastName) && isset($username) && isset($pass))) {
            $_SESSION['error'] = 'Error! <br> <br> Please Fill in all Fields on Sign Up Page!';
            header('Location: ../pages/errorPage.php');
            exit;
        } else {
            $new_user = [$firstName, $lastName, $username, $pass];
            $user_exist = false;
            $fileArr = fileGetUser();
            foreach ($fileArr as $value) {
                if ( $value[2] == $new_user[2] && ($value[0] == $new_user[0] || $value[1] == $new_user[1])) {
                    $user_exist = true;
                }
            }
            if ($user_exist) {
                $_SESSION['error'] = 'Error! <br><br> User Have Already Registered!';
                header('Location: ../pages/errorPage.php');
                exit();
            } else {
                add_user($new_user);
                $_SESSION['user_auth'] = "$firstName $lastName";
                header('Location: ../pages/homepage.php');
                exit();
            }
        }
    }

?>

