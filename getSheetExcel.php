<?php
error_reporting(0);
/** PHPExcel */
require_once 'PHPexcel\Classes\PHPExcel.php';

/** PHPExcel_IOFactory - Reader */
include 'PHPexcel\Classes\PHPExcel\IOFactory.php';

if($_POST["sheetName"]){
    $inputFileName = 'excelData/'.$_POST["sheetName"];  
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);  
    //$objReader->setReadDataOnly(true);  
    $objPHPExcel = $objReader->load($inputFileName);
    // for No header
    //$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
    // $objPHPExcel->getSheetNames();

    $sheetCount = $objPHPExcel->getSheetCount();//Get the total number of sheet
    //Get data from the first row of the $i sheet
    for($i =0;$i <= $sheetCount-1;$i++){//Total number of loop sheets
        $objWorksheet = $objPHPExcel->getSheet($i);
        $data[] = $objWorksheet->getTitle();
    }
    echo json_encode($data);
}
?>