<?php
error_reporting(0);
/** PHPExcel */
require_once 'PHPexcel\Classes\PHPExcel.php';

/** PHPExcel_IOFactory - Reader */
include 'PHPexcel\Classes\PHPExcel\IOFactory.php';

$target_dir = "excelData/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
{
	$inputFileName = $target_file;  
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);  
    //$objReader->setReadDataOnly(true);  
    $objPHPExcel = $objReader->load($inputFileName);
    // for No header
    //$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
 
    $sheetCount = $objPHPExcel->getSheetCount();//Get the total number of sheet
    //Get data from the first row of the $i sheet
    for($i =0;$i <= $sheetCount-1;$i++){//Total number of loop sheets
        $objWorksheet = $objPHPExcel->getSheet($i);
        $highestRow = $objWorksheet->getHighestRow();
        $highestColumn = $objWorksheet->getHighestColumn();
        for($row = 1;$row <= $highestRow;$row++){

            //Take each sheet as a new array element The key name is named after the index of the sheet, which is conducive to the extraction of the later array
    
            $rowData[$i][] = $objWorksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
    
        }
    }
}

 /*Delete each row of header data*/

 foreach($rowData as $k=>$v){

    array_shift($rowData[$k]);

  }

  echo '<pre>';

  print_r($rowData);//Print the result

  echo '</pre>';

?>