<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->

<body>
    <?php 
        include "menu.php"; 
        require_once "connect.php";
    ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/2.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>ครุภัณฑ์</h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" action="sqlDurArticles.php" class="register-form">
                        <div class="form-row">
                        <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">หมายเลขพัสดุ</label>
                                    <input type="text" name="dur_id" required class="form-control" placeholder="0140-001-0007/302-09">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">รายการ</label>
                                    <input type="text" name="dur_name" required class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">รายละเอียด</label>
                                    <textarea name="dur_description" id="" cols="30" rows="5" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">ราคา</label>
                                    <input type="number" name="dur_price" required class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">ห้องที่เก็บครุภัณฑ์</label>
                                    <select name="art_id" id="" class="custom-select">
                                        <?php 
                                            $sqlArt = "select art_id,art_name from articles";
                                            $resultArt = $connect->query($sqlArt);
                                            if ($resultArt->num_rows > 0) {
                                                while ($rowArt = $resultArt->fetch_assoc()) {            
                                        ?>
                                        <option value="<?php echo $rowArt["art_id"];?>"><?php echo $rowArt["art_name"];?></option>
                                        <?php 
                                                 }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="">สถานะ</label>
                                    <input type="text" name="dur_status"  class="form-control" placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="form-submit">
                            <input type="submit" value="บันทึก" class="submit" id="submit" name="insert" />
                            <input type="submit" value="ยกเลิก" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<?php include "footer.php"; ?>