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
                        <h2>นำเข้าข้อมูลครุภัณฑ์ </h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mt-5 ml-5">
                                <form action="excelUpload.php" method="post"
                                    name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                                    <div>
                                        <label>เลือกไฟล์ Excel
                                            File</label> <input type="file" name="file"
                                            id="file" accept=".xls,.xlsx" class="form-control-file">
                                        <button type="submit" id="submit" name="import"
                                            class="btn btn-submit mt-3">Import</button>
                                    </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
<?php include "footer.php"; ?>