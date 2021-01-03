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
        <h2>ข้อมูลบุคลากร </h2>
        <p>วิทยาลัยเทคนิคชลบุรี</p>
</div>
</div>
<div class="signup-form">
    <form method="POST" class="register-form">
<div class="form-row">
    <div class="form-group">
    <div class="form-input">
    <label for="first_name" class="required">คำนำหน้า</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">นาย</option>
    <option value="2">นาง</option>
    <option value="3">นางสาว</option>
  </select>
</div>
<div class="form-input">
    <label for="department" class="required">แผนกวิชา</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">เทคโนโลยีสารสนเทศ</option>
    <option value="2">คอมพิวเตอร์ธุรกิจ</option>
    <option value="3">เทคนิคคอมพิวเตอร์</option>
    <option value="4">อิเล็กทรอนิกส์</option>
  </select>
</div>
<div class="form-input">
    <label for="expertise" class="required">ความชำนาญ/เชี่ยวชาญ</label>
    <input type="text" name="" required class="form-control" placeholder="อันดับที่ 1">
    <input type="text" name="" required class="form-control" placeholder="อันดับที่ 2">
    <input type="text" name="" required class="form-control" placeholder="อันดับที่ 3">

</div>
<div class="form-input">
    <label for="learnning" class="required">จำนวนคาบสอน</label>
    <input type="text" name="" required class="form-control" placeholder="จำนวนคาบสอน">
</div>
</div>
<div class="form-group">
<div class="form-input">
    <label for="first_name" class="required">ชื่อ-สกุล</label>
    <input type="text" name="" required class="form-control" placeholder="กรอกชื่อ-นามสกุล">
</div>
    <div class="form-radio">
    <div class="form-input">
    <label for="education" class="required">วุฒิการศึกษาสูงสุด</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">ปริญญาตรี</option>
    <option value="2">ปริญญาโท</option>
    <option value="3">ปริญญาเอก</option>
    <option value="3">อื่นๆ</option>
  </select>
</div>

</div>
<div class="form-input">
    <label for="expertise" class="required">สิ่งที่ต้องการพัฒนา</label>
    <input type="text" name="" required class="form-control" placeholder="อันดับที่ 1">
    <input type="text" name="" required class="form-control" placeholder="อันดับที่ 2">
    <input type="text" name="" required class="form-control" placeholder="อันดับที่ 3">

</div>
<div class="form-input">
<label for="educlass" class="required">ระดับชั้นที่เป็นที่ปรึกษา</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">ทส.1/1</option>
    <option value="2">ทส.1/2</option>
    <option value="3">ทส.2/1</option>
    <option value="4">ทส.2/2</option>
    <option value="5">ทส.3/1</option>
    <option value="6">คธ.3/1</option>
    <option value="7">ทค.2/1</option>
    <option value="8">ทค.2/2</option>
  </select>
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
<?php include "footer.php"; ?>