<?php
    session_start();
    require_once "connect.php";
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $sql = "select * from useracc where u_username = '$user' and u_password = '$pass'";
    $res = mysqli_query($connect,$sql);
    
    if($res->num_rows > 0){
        $row = $res->fetch_assoc();
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["user_dep"] = $row["user_dep"];
        header("location: peopleregis.php");
    } else {
        echo $sql;
        header("location: index.php");
    }
?>