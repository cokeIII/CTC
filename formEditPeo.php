<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
<?php
include "menu.php";
require_once "connect.php";
$per_id = $_GET["per_id"];
$sql = "select * from personnel where per_id = '$per_id'";
$res = $connect->query($sql);
$row = $res->fetch_assoc();

?>
<div class="main">

    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="images/1.jpg" alt="">
                <div class="signup-img-content">
                    <h2> บุคลากร </h2>
                    <p>วิทยาลัยเทคนิคชลบุรี</p>
                </div>
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" action="sqlPeople.php">
                    <input type="hidden" name="per_id" value="<?php echo $row["per_id"]; ?>">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">คำนำหน้า</label>
                                <select class="custom-select" id="inputGroupSelect01" name="per_prename" required>
                                    <option selected>-เลือกข้อมูล-</option>
                                    <option value="นาย" <?php if ($row["per_prename"] == "นาย") {
                                                            echo "selected";
                                                        } ?>>นาย</option>
                                    <option value="นาง" <?php if ($row["per_prename"] == "นาง") {
                                                            echo "selected";
                                                        } ?>>นาง</option>
                                    <option value="นางสาว" <?php if ($row["per_prename"] == "นางสาว") {
                                                                echo "selected";
                                                            } ?>>นางสาว</option>
                                </select>
                            </div>
                            <div class="form-input">
                                <label for="first_name" class="required">ชื่อ-สกุล</label>
                                <input type="text" name="per_name" required class="form-control" placeholder="กรอกชื่อ-นามสกุล" value="<?php echo $row["per_name"]; ?>">
                            </div>

                            <div class="form-radio">
                                <div class="form-input">
                                    <label for="education" class="required">วุฒิการศึกษาสูงสุด</label>
                                    <select class="custom-select" id="inputGroupSelect01" name="pre_education" required>
                                        <option selected>-เลือกข้อมูล-</option>
                                        <option value="ปริญญาตรี" <?php if ($row["pre_education"] == "ปริญญาตรี") {
                                                                        echo "selected";
                                                                    } ?>>ปริญญาตรี</option>
                                        <option value="ปริญญาโท" <?php if ($row["pre_education"] == "ปริญญาโท") {
                                                                        echo "selected";
                                                                    } ?>>ปริญญาโท</option>
                                        <option value="ปริญญาเอก" <?php if ($row["pre_education"] == "ปริญญาเอก") {
                                                                        echo "selected";
                                                                    } ?>>ปริญญาเอก</option>
                                        <option value="อื่นๆ" <?php if ($row["pre_education"] == "อื่นๆ") {
                                                                    echo "selected";
                                                                } ?>>อื่นๆ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-input">
                                <label for="expertise" class="required">ความชำนาญ/เชี่ยวชาญ</label>
                                <input type="text" name="pre_expertise1" required class="form-control" placeholder="อันดับที่ 1" value="<?php echo $row["pre_expertise1"]; ?>">
                                <input type="text" name="pre_expertise2" required class="form-control" placeholder="อันดับที่ 2" value="<?php echo $row["pre_expertise2"]; ?>">
                                <input type="text" name="pre_expertise3" required class="form-control" placeholder="อันดับที่ 3" value="<?php echo $row["pre_expertise3"]; ?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-input">
                                <label for="learnning" class="required">จำนวนคาบสอน</label>
                                <input type="number" name="pre_teaching" required class="form-control" placeholder="จำนวนคาบสอน" value="<?php echo $row["pre_teaching"]; ?>">
                            </div>
                            <div class="form-input">
                                <label for="expertise" class="required">สิ่งที่ต้องการพัฒนา</label>
                                <input type="text" name="pre_expand1" required class="form-control" placeholder="อันดับที่ 1" value="<?php echo $row["pre_expand1"]; ?>">
                                <input type="text" name="pre_expand2" required class="form-control" placeholder="อันดับที่ 2" value="<?php echo $row["pre_expand2"]; ?>">
                                <input type="text" name="pre_expand3" required class="form-control" placeholder="อันดับที่ 3" value="<?php echo $row["pre_expand3"]; ?>">

                            </div>
                            <div class="form-input">
                                <div class="row">
                                    <div class="col-md-8"><label for="educlass" class="required">ระดับชั้นที่เป็นที่ปรึกษา</label>
                                        <select class="custom-select" id="inputGroupSelect01" name="level_edu" required>
                                            <option value="ปวช.1" <?php if ($row["level_edu"] == "ปวช.1") {
                                                                        echo "selected";
                                                                    } ?>>ปวช.1</option>
                                            <option value="ปวช.2" <?php if ($row["level_edu"] == "ปวช.2") {
                                                                        echo "selected";
                                                                    } ?>>ปวช.2</option>
                                            <option value="ปวช.3" <?php if ($row["level_edu"] == "ปวช.3") {
                                                                        echo "selected";
                                                                    } ?>>ปวช.3</option>
                                            <option value="ปวส.1" <?php if ($row["level_edu"] == "ปวส.1") {
                                                                        echo "selected";
                                                                    } ?>>ปวส.1</option>
                                            <option value="ปวส.2" <?php if ($row["level_edu"] == "ปวส.2") {
                                                                        echo "selected";
                                                                    } ?>>ปวส.2</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4"><label for="educlass" class="required">กลุ่ม</label>
                                        <select class="custom-select" id="inputGroupSelect01" name="group_name" required>
                                            <option value="1" <?php if ($row["group_name"] == "1") {
                                                                    echo "selected";
                                                                } ?>>1</option>
                                            <option value="2" <?php if ($row["group_name"] == "2") {
                                                                    echo "selected";
                                                                } ?>>2</option>
                                            <option value="3" <?php if ($row["group_name"] == "3") {
                                                                    echo "selected";
                                                                } ?>>3</option>
                                            <option value="4" <?php if ($row["group_name"] == "4") {
                                                                    echo "selected";
                                                                } ?>>4</option>
                                            <option value="5" <?php if ($row["group_name"] == "5") {
                                                                    echo "selected";
                                                                } ?>>5</option>
                                            <option value="6" <?php if ($row["group_name"] == "6") {
                                                                    echo "selected";
                                                                } ?>>6</option>
                                            <option value="7" <?php if ($row["group_name"] == "7") {
                                                                    echo "selected";
                                                                } ?>>7</option>
                                            <option value="8" <?php if ($row["group_name"] == "8") {
                                                                    echo "selected";
                                                                } ?>>8</option>
                                        </select>
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
<?php include "footer.php"; ?>