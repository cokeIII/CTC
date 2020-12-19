<?php
    session_start();
    $username = "Admin";
    $password = "12345678";
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    if($user == $username && $pass == $password){
        $_SESSION["login"] = true;
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
?>