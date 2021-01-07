<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
<?php
    require_once "connect.php";
    $artId = $_GET["art_id"];
    $sql = "select * from articles where art_id = '$artId'";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
?>

<body>
    <?php include "menu.php"; ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/2.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>ห้องปฏิบัติการ</h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" action="sqlArticles.php" class="register-form">
                    <input type="hidden" name="art_id" value="<?php echo $row["art_id"];?>">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">หมายเลขห้องปฏิบัติการ</label>
                                    <input type="text" name="art_number" required class="form-control" placeholder=""
                                        value="<?php echo $row["art_number"];?>">
                                </div>
                                <div class="form-input">
                                    <label for="amount" class="required">จำนวนที่นั่ง</label>
                                    <select class="custom-select" id="inputGroupSelect01" name="art_amount" required>
                                        <option selected>-เลือกข้อมูล-</option>
                                        <option value="20" <?php if($row["art_amount"] == "20"){echo "selected";} ?>>20
                                        </option>
                                        <option value="30" <?php if($row["art_amount"] == "30"){echo "selected";} ?>>30
                                        </option>
                                        <option value="40" <?php if($row["art_amount"] == "40"){echo "selected";} ?>>40
                                        </option>
                                    </select>
                                </div>
                                <div class="">
                                    <?php
                                        $arrDataIns = explode(",",$row["art_instruction"]);
                                        function getCheck($optValue,$arr){
                                            foreach ($arr as $key => $value) {
                                                if($value == $optValue){
                                                    return "checked";
                                                } 
                                            }
                                            return "";
                                        }
                                    ?>
                                    <label for="amount_com" class="required">อุปกรณ์สื่อการสอน</label>
                                    <div class="form-checkbox-group">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-2">
                                                    <input type="checkbox" class="form-check-input float-right"
                                                        value="โปรเจคเตอร์" name="art_instruction[]" id="p"
                                                        <?php echo getCheck("โปรเจคเตอร์",$arrDataIns)?>>
                                                </div>
                                                <div class="col-6">
                                                    <label for="p" class="">โปรเจคเตอร์</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-2">
                                                    <input type="checkbox" class="form-check-input float-right"
                                                        value="ทีวี" name="art_instruction[]" id="t"
                                                        <?php echo getCheck("ทีวี",$arrDataIns)?>>
                                                </div>
                                                <div class="col-6">
                                                    <label for="t">ทีวี</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-2">
                                                    <input type="checkbox" class="form-check-input float-right"
                                                        value="จอภาพอัจฉริยะ" name="art_instruction[]" id="d"
                                                        <?php echo getCheck("จอภาพอัจฉริยะ",$arrDataIns)?>>
                                                </div>
                                                <div class="col-6">
                                                    <label for="d">จอภาพอัจฉริยะ</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-2">
                                                    <input type="checkbox" class="form-check-input float-right"
                                                        value="อื่นๆ" name="art_instruction[]" id="o"
                                                        <?php echo getCheck("อื่นๆ",$arrDataIns)?>>
                                                </div>
                                                <div class="col-6">
                                                    <label for="o">อื่นๆ</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_name" class="required">ชื่อห้องปฏิบัติการ</label>
                                    <input type="text" name="art_name" required class="form-control" placeholder="" value="<?php echo $row["art_name"];?>">
                                </div>
                                <div class="form-radio">
                                    <div class="form-input">
                                        <label for="amount_com" class="required">จำนวนเครื่องคอมพิวเตอร์</label>
                                        <select class="custom-select" id="inputGroupSelect01" name="art_com" required>
                                            <option selected>-เลือกข้อมูล-</option>
                                            <option value="10"
                                                <?php if($row["art_com"] == "10"){echo "selected";} ?>>10</option>
                                            <option value="20"
                                                <?php if($row["art_com"] == "20"){echo "selected";} ?>>20</option>
                                            <option value="30"
                                                <?php if($row["art_com"] == "30"){echo "selected";} ?>>30</option>
                                            <option value="40"
                                                <?php if($row["art_com"] == "40"){echo "selected";} ?>>40</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div class="form-radio">
                                    <label>ประเภทครุภัณฑ์</label>
                                    <div class="form-radio-group">
                                        <div class="form-radio-item">
                                            <input type="radio" name="art_type" id="cash" value="ครุภัณฑ์พื้นฐาน"
                                                <?php if($row["art_type"] == "ครุภัณฑ์พื้นฐาน"){echo "checked";} ?>>
                                            <label for="cash">ครุภัณฑ์พื้นฐาน</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="art_type" id="cheque"
                                                value="ห้องปฏิบัติการเฉพาะทาง"
                                                <?php if($row["art_type"] == "ห้องปฏิบัติการเฉพาะทาง"){echo "checked";} ?>>
                                            <label for="cheque">ห้องปฏิบัติการเฉพาะทาง</label>
                                            <span class="check"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="บันทึก" class="submit" id="submit" name="update" />
                            <input type="submit" value="ยกเลิก" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<?php include "footer.php"; ?>