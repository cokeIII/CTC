<?php
    require_once "connect.php";
    session_start();
    if(!empty($_POST["insert"])){
        $dur_id  = $_POST["dur_id"];
        $dur_name = $_POST["dur_name"];
        $dur_description = $_POST["dur_description"];
        $dur_price = $_POST["dur_price"];
        $dur_status = $_POST["dur_status"];
        $art_id = $_POST["art_id"];
        $user_id = $_SESSION["user_id"];
        $sql = "insert into durable_articles 
        (
            dur_id ,
            dur_name,
            dur_description,
            dur_price,
            dur_status,
            art_id,
            user_id ) values(
            '$dur_id',
            '$dur_name',
            '$dur_description',
            '$dur_price',
            '$dur_status',
            '$art_id',
            '$user_id'
        )";
        $result = $connect->query($sql);
        if($result){
            header("location: showDur.php");
        }
    } else if(!empty($_POST["update"])){
        $dur_id  = $_POST["dur_id"];
        $dur_name = $_POST["dur_name"];
        $dur_description = $_POST["dur_description"];
        $dur_price = $_POST["dur_price"];
        $dur_status = $_POST["dur_status"];
        $art_id = $_POST["art_id"];
        $sql = "update durable_articles set 
            dur_name = '$dur_name',
            dur_description = '$dur_description',
            dur_price = '$dur_price',
            dur_status = '$dur_status',
            art_id = '$art_id'  
            where dur_id = '$dur_id'";
        $result = $connect->query($sql);
        if($result){
            header("location: showDur.php");
        } else {
            echo $sql;
        }
    } else if(!empty($_GET["delDur"])){
        $dur_id = $_GET["dur_id"];
        $sql = "delete from durable_articles where dur_id = '$dur_id'";
        $res = $connect->query($sql);
        if($res){
            header("location: showDur.php");
        }
    }
?>