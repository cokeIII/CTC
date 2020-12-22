<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->

<body>
    <?php include "menu.php"; ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/2.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>ข้อมูลครุภัณฑ์ </h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="class_id" class="required">หมายเลขห้องปฏิบัติการ</label>
                                    <input type="text" name="" required class="form-control" placeholder="">
                                </div>
                                <div class="form-input">
                                    <label for="amount" class="required">จำนวนที่นั่ง</label>
                                    <select class="custom-select" id="inputGroupSelect01" required>
                                        <option selected>-เลือกข้อมูล-</option>
                                        <option value="1">20</option>
                                        <option value="2">30</option>
                                        <option value="3">40</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="amount_com" class="required">อุปกรณ์สื่อการสอน</label>
                                    <div class="form-checkbox-group">
                                        <div class="form-check">
                                            <div class="row">
                                                <div class="col-2">
                                                    <input type="checkbox" class="form-check-input float-right" name="type_k" id="p">
                                                </div>
                                                <div class="col-6">
                                                  <label for="p" class="">โปรเจคเตอร์</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <div class="row">
                                              <div class="col-2">
                                                <input type="checkbox" class="form-check-input float-right" name="type_k" id="t">
                                              </div>
                                              <div class="col-6">
                                                <label for="t">ทีวี</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                          <div class="row">
                                            <div class="col-2">
                                              <input type="checkbox" class="form-check-input float-right" name="type_k" id="d">
                                            </div>
                                            <div class="col-6">
                                              <label for="d">จอภาพอัจฉริยะ</label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-check">
                                          <div class="row">
                                            <div class="col-2">
                                              <input type="checkbox" class="form-check-input float-right" name="type_k" id="o">
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
                                    <input type="text" name="" required class="form-control" placeholder="">
                                </div>
                                <div class="form-radio">
                                    <div class="form-input">
                                        <label for="amount_com" class="required">จำนวนเครื่องคอมพิวเตอร์</label>
                                        <select class="custom-select" id="inputGroupSelect01" required>
                                            <option selected>-เลือกข้อมูล-</option>
                                            <option value="1">10</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                            <option value="4">40</option>
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
                                            <input type="radio" name="type_k" id="cash" checked>
                                            <label for="cash">ครุภัณฑ์พื้นฐาน</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="type_k" id="cheque">
                                            <label for="cheque">ห้องปฏิบัติการเฉพาะทาง</label>
                                            <span class="check"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="บันทึก" class="submit" id="submit" name="submit" />
                            <input type="submit" value="ยกเลิก" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<?php include "footer.php"; ?>