<?php

    function fileGetUser() {
        $file = file('../../database/users.txt', FILE_USE_INCLUDE_PATH);
        $fileArr = [];
        foreach ($file as $key => $value) {
                $fileArr[$key] = explode(':', $value);
        }
        return $fileArr;
    }

    function add_user($user) { 
        $file = '../../database/users.txt';
        $user = implode(":", $user) . "\n";
        file_put_contents($file, $user, FILE_APPEND);
    }

?>