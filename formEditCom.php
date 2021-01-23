<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
<?php
include "menu.php";
require_once "connect.php";
$com_id = $_GET["com_id"];
$sql = "select * from company where com_id = '$com_id'";
$res = $connect->query($sql);
$row = $res->fetch_assoc();
?>
<div class="main">

    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="images/3.jpg" alt="">
                <div class="signup-img-content">
                    <h2>ความร่วมมือกับสถานประกอบการ </h2>
                    <p>วิทยาลัยเทคนิคชลบุรี</p>
                </div>
            </div>
            <div class="signup-form">
                <form method="POST" class="register-form" action="sqlCompany.php">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-input">
                                <label for="first_name" class="required">ชื่อสถานประกอบการ</label>
                                <input type="text" name="com_name" required class="form-control" placeholder="" value="<?php echo $row["com_name"]; ?>">
                            </div>
                            <div class="form-input">
                                <label for="department" class="required">กิจกรรมที่ทำร่วมกัน</label>
                                <select class="custom-select" id="inputGroupSelect01" name="com_activity" required>
                                    
                                    <option value="Re Skill" <?php if ($row["com_activity"] == "Re Skill") { echo "selected";} ?>>Re Skill</option>
                                    <option value="Up Skill" <?php if ($row["com_activity"] == "Up Skill") { echo "selected";} ?>>Up Skill</option>
                                    <option value="New Skill" <?php if ($row["com_activity"] == "New Skill") { echo "selected";} ?>>New Skill</option>
                                    <option value="หลักสูตรระยะสั้น" <?php if ($row["com_activity"] == "หลักสูตรระยะสั้น") { echo "selected";} ?>>หลักสูตรระยะสั้น</option>
                                </select>
                            </div>
                            <div class="form-input">
                                <label for="department" class="required">จำนวนชั่วโมง</label>
                                <select class="custom-select" id="inputGroupSelect01" name="com_hour" required>
                                    
                                    <option value="3" <?php if ($row["com_activity"] == "3") { echo "selected";} ?>>3</option>
                                    <option value="6" <?php if ($row["com_activity"] == "6") { echo "selected";} ?>>6</option>
                                    <option value="9" <?php if ($row["com_activity"] == "9") { echo "selected";} ?>>9</option>
                                    <option value="12" <?php if ($row["com_activity"] == "12") { echo "selected";} ?>>12</option>
                                </select>
                            </div>
                            <div class="form-input">
                                <label for="educlass" class="required">ประเภทกิจกรรมที่เข้าร่วม</label>
                                <select class="custom-select" id="inputGroupSelect01" name="act_type" required>
                                    
                                    <option value="1 ปี" <?php if ($row["act_type"] == "1 ปี") { echo "selected";} ?>>1 ปี</option>
                                    <option value="ประจำทุกปี" <?php if ($row["act_type"] == "ประจำทุกปี") { echo "selected";} ?>>ประจำทุกปี</option>
                                </select>
                            </div>
                            <div class="form-input">
                                <label for="education" class="required">ชื่อผู้ประสานงาน</label>
                                <input type="text" name="coordinator" required class="form-control" placeholder="" value="<?php echo $row["coordinator"]; ?>">
                            </div>
                            <div class="form-input">
                                <label for="education" class="required">หมายเลขโทรศัพท์</label>
                                <input type="text" name="com_tel" required class="form-control" placeholder="" value="<?php echo $row["com_tel"]; ?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="form-radio">
                                <div class="label-flex">
                                    <label for="com_type">ประเภทสถานประกอบการ</label>

                                </div>
                                <div class="form-radio-group">
                                    <div class="form-radio-item">
                                        <input type="radio" name="com_type" id="cash" value="รัฐบาล" <?php if ($row["com_type"] == "รัฐบาล") { echo "checked";} ?>>
                                        <label for="cash">รัฐบาล</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="com_type" id="cheque" value="เอกชน" <?php if ($row["com_type"] == "เอกชน") { echo "checked";} ?>>
                                        <label for="cheque">เอกชน</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-input">
                                <label for="education" class="required">ชื่อหลักสูตร</label>
                                <input type="text" name="course_name" required class="form-control" placeholder="" value="<?php echo $row["course_name"]; ?>">
                            </div>
                            <div class="form-input">
                                <label for="education" class="required">จำนวนผู้เข้าร่วมอบรม</label>
                                <input type="text" name="participants_qty" required class="form-control" placeholder=""  value="<?php echo $row["participants_qty"]; ?>">
                            </div>
                            <div class="form-input">
                                <label for="education" class="required">สมรรถนะหลักสูตร</label>
                                <textarea class="form-control" rows="5" id="comment" name="com_ability"><?php echo $row["com_ability"]; ?></textarea>
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