<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg_june.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="">
					<span class="login100-form-logo">
						<!-- <img src="images/ovec-removebg.png" alt=""> -->
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						ชื่อระบบ
					</span>

					<div class="wrap-input100 validate-input" data-validate="ฃื่อผู้ใช้งานไม่ถูกต้อง">
						<input class="input100" type="text" name="username" id="user"placeholder="ชื่อผู้ใช้">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="รหัสผ่านไม่ถูกต้อง">
						<input class="input100" type="password" name="pass" id="pass" placeholder="รหัสผ่าน">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							เข้าสู่ระบบ
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php require_once "footer.php"?>
</body>
</html>