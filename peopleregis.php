<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
<?php include "menu.php"; ?>
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
          <div class="form-row">
            <div class="form-group">
              <div class="form-input">
                <label for="first_name" class="required">คำนำหน้า</label>
                <select class="custom-select" id="inputGroupSelect01" name="per_prename" required>
                  <option selected>-เลือกข้อมูล-</option>
                  <option value="นาย">นาย</option>
                  <option value="นาง">นาง</option>
                  <option value="นางสาว">นางสาว</option>
                </select>
              </div>
              <div class="form-input">
                <label for="first_name" class="required">ชื่อ-สกุล</label>
                <input type="text" name="per_name" required class="form-control" placeholder="กรอกชื่อ-นามสกุล">
              </div>

              <div class="form-radio">
                <div class="form-input">
                  <label for="education" class="required">วุฒิการศึกษาสูงสุด</label>
                  <select class="custom-select" id="inputGroupSelect01" name="pre_education" required>
                    <option selected>-เลือกข้อมูล-</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                  </select>
                </div>
              </div>

              <div class="form-input">
                <label for="expertise" class="required">ความชำนาญ/เชี่ยวชาญ</label>
                <input type="text" name="pre_expertise1" required class="form-control" placeholder="อันดับที่ 1">
                <input type="text" name="pre_expertise2" required class="form-control" placeholder="อันดับที่ 2">
                <input type="text" name="pre_expertise3" required class="form-control" placeholder="อันดับที่ 3">

              </div>

            </div>
            <div class="form-group">
              <div class="form-input">
                <label for="learnning" class="required">จำนวนคาบสอน</label>
                <input type="number" name="pre_teaching" required class="form-control" placeholder="จำนวนคาบสอน">
              </div>
              <div class="form-input">
                <label for="expertise" class="required">สิ่งที่ต้องการพัฒนา</label>
                <input type="text" name="pre_expand1" required class="form-control" placeholder="อันดับที่ 1">
                <input type="text" name="pre_expand2" required class="form-control" placeholder="อันดับที่ 2">
                <input type="text" name="pre_expand3" required class="form-control" placeholder="อันดับที่ 3">

              </div>
              <div class="form-input">
                <div class="row">
                  <div class="col-md-8"><label for="educlass" class="required">ระดับชั้นที่เป็นที่ปรึกษา</label>
                    <select class="custom-select" id="inputGroupSelect01" name="level_edu" required>
                      <option value="ปวช.1">ปวช.1</option>
                      <option value="ปวช.2">ปวช.2</option>
                      <option value="ปวช.3">ปวช.3</option>
                      <option value="ปวส.1">ปวส.1</option>
                      <option value="ปวส.2">ปวส.2</option>
                    </select>
                  </div>
                  <div class="col-md-4"><label for="educlass" class="required">กลุ่ม</label>
                    <select class="custom-select" id="inputGroupSelect01" name="group_name" required>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                </div>
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
<?php include "footer.php"; ?>