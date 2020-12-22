<?php
$host = "localhost";
$user = "root";
$password = "12345678";
$db = "";
$connect = mysqli_connect("$host","$user","$password","$db");
if($connect){
    echo "เชื่อมต่อข้อมูลสำเร็จ";
}else{
    echo "Error = 
    ".mysqli_error();
}
?>