<?php
    require_once "connect.php";
    
    // error_reporting(0);
    /** PHPExcel */
    require_once 'PHPexcel\Classes\PHPExcel.php';
    
    /** PHPExcel_IOFactory - Reader */
    include 'PHPexcel\Classes\PHPExcel\IOFactory.php';

    if(!empty($_POST["insert"])){
        $art_number = $_POST["art_number"];
        $art_name = $_POST["art_name"];
        $art_amount = $_POST["art_amount"];
        $art_com = $_POST["art_com"];
        $art_instruction = $_POST["art_instruction"];
        $art_type = $_POST["art_type"];
    
        $temp_dep_id = "1";//??

        $json_art_instruction = implode(",",$art_instruction);

        $sql = "insert into articles 
        (
        art_number,
        art_name,
        art_amount,
        art_com,
        art_instruction,
        art_type,
        dep_id ) values(
            '$art_number',
            '$art_name',
            '$art_amount',
            '$art_com',
            '$json_art_instruction',
            '$art_type',
            '$temp_dep_id'
        )";
        $result = $connect->query($sql);
        if($result){
            header("location: showArt.php");
        }
    } else if(!empty($_POST["update"])){
        $art_id = $_POST["art_id"];
        $art_number = $_POST["art_number"];
        $art_name = $_POST["art_name"];
        $art_amount = $_POST["art_amount"];
        $art_com = $_POST["art_com"];
        $art_instruction = $_POST["art_instruction"];
        $art_type = $_POST["art_type"];
    
        $temp_dep_id = "1";//??

        $json_art_instruction = implode(",",$art_instruction);

        $sql = "update articles set
        art_number = '$art_number',
        art_name = '$art_name',
        art_amount = '$art_amount',
        art_com = '$art_com',
        art_instruction = '$json_art_instruction',
        art_type = '$art_type'
        where art_id = '$art_id'";
        $result = $connect->query($sql);
        if($result){
            header("location: showArt.php");
        }
    } else if(!empty($_POST["getRoom"])){
        $sql = "select art_id ,art_name from articles";
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo json_encode($row);
            }
        }
    } else if(!empty($_POST["insert_durable_articles_excel"])){
        $fileName = $_POST["fileName"];
        $sheetSelect = $_POST["sheetSelect"];
        $dur_number = $_POST["dur_number"];
        $dur_name = $_POST["dur_name"];
        $dur_description = $_POST["dur_description"];
        $dur_price = $_POST["dur_price"];
        $dur_status = $_POST["dur_status"];

        if($fileName!=""){
            $inputFileName = "excelData/".$fileName;  
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);  
            $objPHPExcel = $objReader->load($inputFileName);  
            for ($i=0; $i < count($sheetSelect); $i++) { 
                // for No header
                $objWorksheet = $objPHPExcel->setActiveSheetIndex($sheetSelect[$i]);
                $highestRow = $objWorksheet->getHighestRow();
                $highestColumn = $objWorksheet->getHighestColumn();

                $r = -1;
                $namedDataArray = array();
                for ($row = 1; $row <= $highestRow; ++$row) {
                    $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
                    if(strlen(str_replace("/","",str_replace("-","",trim(concatArr($dur_number,$dataRow[$row]))))) == 17){
                        $concat_dur_number = concatArr($dur_number,$dataRow[$row]);
                        $concat_dur_name = concatArr($dur_name,$dataRow[$row]);
                        $concat_dur_description = concatArr($dur_description,$dataRow[$row]);
                        $concat_art_price = str_replace(",","",trim(concatArr($dur_price,$dataRow[$row])));
                        $concat_dur_status = concatArr($dur_status,$dataRow[$row]);
                        // echo "<pre>";
                        // var_dump($concat_dur_number);
                        // var_dump($concat_dur_name);
                        // var_dump($concat_dur_description);
                        // var_dump($concat_art_price);
                        // var_dump($concat_dur_status);
                        // echo "</pre><br>";
                        $sql = "insert into durable_articles (
                            dur_id,
                            dur_name,
                            dur_description,
                            dur_price,
                            dur_status) values(
                                '$concat_dur_number',
                                '$concat_dur_name',
                                '$concat_dur_description',
                                '$concat_art_price',
                                '$concat_dur_status'
                            )";
                        $result = $connect->query($sql);
                        if(!$result){
                          //echo  $sql;
                        }
                    }        
                }
                header("location: importArt.php?insert=1");
            }   
        }
    } else if(!empty($_GET["delArt"])){
        $art_id = $_GET["art_id"];
        $sql = "delete from articles where art_id = '$art_id'";
        $result = $connect->query($sql);
        if($result){
            header("location: showArt.php");
        }
    }
    
    function concatArr($arrData,$rowData){
        $concatData = '';
        for($j = 0;$j < count($arrData);$j++){
            if($arrData[$j] != "")
                $concatData.=$rowData[$arrData[$j]];
        }
        return $concatData;
    }
?>