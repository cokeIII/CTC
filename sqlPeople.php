<?php
    require_once "connect.php";
    session_start();
    if(!empty($_POST["insert"])){
        $per_prename = $_POST["per_prename"];
        $per_name = $_POST["per_name"];
        $user_id = $_SESSION["user_id"];
        $pre_education = $_POST["pre_education"];
        $pre_expertise1 = $_POST["pre_expertise1"];
        $pre_expertise2 = $_POST["pre_expertise2"];
        $pre_expertise3 = $_POST["pre_expertise3"];
        $pre_expand1 = $_POST["pre_expand1"];
        $pre_expand2 = $_POST["pre_expand2"];
        $pre_expand3 = $_POST["pre_expand3"];
        $pre_teaching = $_POST["pre_teaching"];
        $group_name = $_POST["group_name"];
        $level_edu = $_POST["level_edu"];
 
        $sql = "
            insert into personnel 
            (
                per_prename,
                per_name,
                user_id,
                pre_education,
                pre_expertise1,
                pre_expertise2,
                pre_expertise3,
                pre_expand1,
                pre_expand2,
                pre_expand3,
                pre_teaching,
                group_name,
                level_edu
            ) values (
                '$per_prename',
                '$per_name',
                '$user_id',
                '$pre_education',
                '$pre_expertise1',
                '$pre_expertise2',
                '$pre_expertise3',
                '$pre_expand1',
                '$pre_expand2',
                '$pre_expand3',
                '$pre_teaching',
                '$group_name',
                '$level_edu'
            )
        ";
        $result = $connect->query($sql);
        if($result){
            header("location: showPeople.php");
        } else {
            echo $sql;
        }
    } else if(!empty($_POST["update"])){
        $per_prename = $_POST["per_prename"];
        $per_name = $_POST["per_name"];
        $per_id = $_POST["per_id"];
        $pre_education = $_POST["pre_education"];
        $pre_expertise1 = $_POST["pre_expertise1"];
        $pre_expertise2 = $_POST["pre_expertise2"];
        $pre_expertise3 = $_POST["pre_expertise3"];
        $pre_expand1 = $_POST["pre_expand1"];
        $pre_expand2 = $_POST["pre_expand2"];
        $pre_expand3 = $_POST["pre_expand3"];
        $pre_teaching = $_POST["pre_teaching"];
        $group_name = $_POST["group_name"];
        $level_edu = $_POST["level_edu"];

        $sql="
            update personnel set
            per_prename = '$per_prename',    
            per_name = '$per_name',    
            pre_education = '$pre_education',    
            pre_expertise1 = '$pre_expertise1',    
            pre_expertise2 = '$pre_expertise2',    
            pre_expertise3 = '$pre_expertise3',    
            pre_expand1 = '$pre_expand1',    
            pre_expand2 = '$pre_expand2',    
            pre_expand3 = '$pre_expand3',    
            pre_teaching = '$pre_teaching',    
            group_name = '$group_name',    
            level_edu = '$level_edu'
            where per_id = '$per_id';   
        ";
        $result = $connect->query($sql);
        if($result){
            header("location: showPeople.php");
        } else {
            echo $sql;
        }
    } else if(!empty($_GET["delPeo"])){
        $per_id = $_GET["per_id"];
        $sql="delete from personnel where per_id = '$per_id'";
        $res = $connect->query($sql);
        if($res){
            header("location: showPeople.php");
        } else {
            echo $sql;
        }
    }
?>