<?php
error_reporting(0);
/** PHPExcel */
require_once 'PHPexcel\Classes\PHPExcel.php';

/** PHPExcel_IOFactory - Reader */
include 'PHPexcel\Classes\PHPExcel\IOFactory.php';

$target_dir = "excelData/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
//checking if file exsists
if(file_exists($target_file)) {
    chmod($target_file,0755); //Change the file permissions if allowed
    unlink($target_file); //remove the file
}
if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
{
    echo json_encode(true);
}

?>