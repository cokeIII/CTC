<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
  <!--===============================================================================================-->
  <?php include "menu.php"; ?>
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
    <form method="POST" class="register-form">
<div class="form-row">
    <div class="form-group">
    <div class="form-input">
    <label for="first_name" class="required">ชื่อสถานประกอบการ</label>
    <input type="text" name="" required class="form-control" placeholder="">
</div>
<div class="form-input">
    <label for="department" class="required">กิจกรรมที่ทำร่วมกัน</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">Re Skill</option>
    <option value="2">Up Skill</option>
    <option value="3">New Skill</option>
    <option value="4">หลักสูตรระยะสั้น</option>
  </select>
</div>
<div class="form-input">
    <label for="department" class="required">จำนวนชั่วโมง</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">3</option>
    <option value="2">6</option>
    <option value="3">9</option>
    <option value="4">12</option>
  </select>
</div>
<div class="form-input">
<label for="educlass" class="required">ประเภทกิจกรรมที่เข้าร่วม</label>
    <select class="custom-select" id="inputGroupSelect01" required>
    <option selected>-เลือกข้อมูล-</option>
    <option value="1">1 ปี</option>
    <option value="2">ประจำทุกปี</option>
  </select>
</div>
<div class="form-input">
    <label for="education" class="required">ชื่อผู้ประสานงาน</label>
    <input type="text" name="" required class="form-control" placeholder="">
</div>
<div class="form-input">
    <label for="education" class="required">หมายเลขโทรศัพท์</label>
    <input type="text" name="" required class="form-control" placeholder="">
</div>

</div>
<div class="form-group">
<div class="form-radio">
    <div class="label-flex">
    <label for="company">ประเภทสถานประกอบการ</label>
    
</div>
    <div class="form-radio-group">            
    <div class="form-radio-item">
    <input type="radio" name="company" id="cash" checked>
    <label for="cash">รัฐบาล</label>
    <span class="check"></span>
</div>
    <div class="form-radio-item">
    <input type="radio" name="company" id="cheque">
    <label for="cheque">เอกชน</label>
<span class="check"></span>
</div>
 </div> </div>
    <div class="form-input">
    <label for="education" class="required">ชื่อหลักสูตร</label>
    <input type="text" name="" required class="form-control" placeholder="">
</div>
<div class="form-input">
    <label for="education" class="required">จำนวนผู้เข้าร่วมอบรม</label>
    <input type="text" name="" required class="form-control" placeholder="">
</div>
<div class="form-input">
    <label for="education" class="required">สมรรถนะหลักสูตร</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
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