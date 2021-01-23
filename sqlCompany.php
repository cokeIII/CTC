<?php
    require_once "connect.php";
    session_start();
    if(!empty($_POST["insert"])){
        $com_name = $_POST["com_name"];
        $com_activity = $_POST["com_name"];
        $com_hour = $_POST["com_hour"];
        $act_type = $_POST["act_type"];
        $coordinator = $_POST["coordinator"];
        $com_tel = $_POST["com_tel"];
        $com_type = $_POST["com_type"];
        $course_name = $_POST["course_name"];
        $participants_qty = $_POST["participants_qty"];
        $com_ability = $_POST["com_ability"];

        $sql = "
            insert into company 
            (
                com_name,
                com_activity,
                com_hour,
                act_type,
                coordinator,
                com_tel,
                com_type,
                course_name,
                participants_qty,
                com_ability
            ) values (
                '$com_name',
                '$com_activity',
                '$com_hour',
                '$act_type',
                '$coordinator',
                '$com_tel',
                '$com_type',
                '$course_name',
                '$participants_qty',
                '$com_ability'
            )
        ";
        $result = $connect->query($sql);
        if($result){
            header("location: showCompany.php");
        } else {
            echo $sql;
        }
    } else if(!empty($_POST["update"])){
        $com_name = $_POST["com_name"];
        $com_activity = $_POST["com_name"];
        $com_hour = $_POST["com_hour"];
        $act_type = $_POST["act_type"];
        $coordinator = $_POST["coordinator"];
        $com_tel = $_POST["com_tel"];
        $com_type = $_POST["com_type"];
        $course_name = $_POST["course_name"];
        $participants_qty = $_POST["participants_qty"];
        $com_ability = $_POST["com_ability"];
        $com_id  = $_POST["com_id"];
        
        $sql="
            update company set
            com_name = '$com_name',
            com_activity = '$com_activity',
            com_hour = '$com_hour',
            act_type = '$act_type',
            coordinator = '$coordinator',
            com_tel = '$com_tel',
            com_type = '$com_type',
            course_name = '$course_name',
            participants_qty = '$participants_qty',
            com_ability = '$com_ability'
            where com_id = '$com_id';   
        ";
        $result = $connect->query($sql);
        if($result){
            header("location: showCompany.php");
        } else {
            echo $sql;
        }
    } else if(!empty($_GET["delCom"])){
        $com_id = $_GET["com_id"];
        $sql="delete from company where com_id = '$com_id'";
        $res = $connect->query($sql);
        if($res){
            header("location: showCompany.php");
        } else {
            echo $sql;
        }
    }
?>