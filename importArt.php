<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->
<style>
    .alert-file {
        color: red;
    }
    .insert-file{
        color: green;
    }
    .plus-btn{
        font-size: 24px;
    }
</style>

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
                                <form action="excelUpload.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                                    <div>
                                        <label>เลือกไฟล์ Excel
                                            File</label> <input type="file" name="file" id="file" accept=".xls,.xlsx" class="form-control-file">
                                        <button type="button" id="upload" name="import" class="btn btn-submit mt-3 bg-success">อัพโหลดไฟล์ Excel</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p class="alert-file ml-5" id="alertFile"></p>
                        <p class="insert-file ml-5" id="insertFile"></p>
                    </div>
                    <form action="sqlArticles.php" method="post">
                        <input type="hidden" name="fileName" id="fileNameExcel">
                        <input type="hidden" name="insert_durable_articles_excel" value="true">
                        <div id="sectionSheet">
                            <div class="ml-5 row h6" id="lbSecSheet">กรุณาเลือก Sheet ที่ต้องการจะนำเข้า</div>
                            <div class="row">
                                <div class="ml-5 col-md-5">
                                    <select name="sheetSelect[]" class="form-control" id="sheetName" multiple="true" required>

                                    </select>
                                </div>
                            </div>
                            <div class="ml-5 mt-2 h6 row " >กรุณาตั้งค่า คอลัมน์ ให้ตรงกับไฟล์ Excel</div>
                            <div class="row">
                                <div class="ml-5 col-md-2">
                                    <div class="" >หมายเลขพัสดุ</div>
                                    <select name="dur_number[]" class="form-control" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C" selected>C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                    </select>
                                    <div class="" >รายการ</div>
                                    <select name="dur_name[]" class="form-control" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D" selected>D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                    </select>                                    
                                    <div class="" >รายละเอียด</div>
                                    <select name="dur_description[]" class="form-control" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E" selected>E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                    </select>                                    
                                    <div class="" >ราคา</div>
                                    <select name="dur_price[]" class="form-control" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H" selected>H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                    </select>
                                    <div class="" >สถานะ</div>
                                    <select name="dur_status[]" class="form-control" required>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I" selected>I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <div class="row"  id="plusCol" ></div>
                                </div>
                                <div class="col-md-2">
                                <i id="addCol" class="fa fa-plus-square mt-4 plus-btn" data-toggle="tooltip" title="เพิ่มคอลัมน์"></i>
                                <i id="delCol" class="fa fa-minus-square mt-4 plus-btn" data-toggle="tooltip" title="ลบคอลัมน์"></i>
                                </div>
                            </div>                         
                            <div class="row">
                                <div class="ml-5 col-md-5">
                                    <button type="submit" class="btn mt-3 btn-primary">บันทึกข้อมูล</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "footer.php"; ?>
<script>
    $(document).ready(function() {
        var $_GET = <?php echo json_encode($_GET); ?>;
        if($_GET["insert"]){
            $("#insertFile").fadeOut(function() {
                $(this).text("เพิ่มข้อมูลเรียบร้อย").fadeIn();
                $(this).fadeOut(5000);
            })
        }
        $('[data-toggle="tooltip"]').tooltip();
        $('#sectionSheet').hide()
        $('#upload').on('click', function() {
            var file_data = $('#file').prop('files')[0]
            var form_data = new FormData();
            form_data.append('file', file_data);
            var fileCheck = $('#file').val().trim();
            const fileName = fileCheck.split(/(\\|\/)/g).pop();
            if (fileCheck) {
                $.ajax({
                    url: 'excelUpload.php', // point to server-side PHP script 
                    dataType: 'text', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(php_script_response) {
                        if (php_script_response) {
                            $.ajax({
                                type: "POST",
                                url: "getSheetExcel.php",
                                data: {
                                    sheetName: fileName
                                },
                                dataType: 'json',
                                success: function(result) {
                                    $('#fileNameExcel').val(fileName)
                                    $('#sheetName').empty()
                                    let i = 0
                                    if (result.length > 0) {
                                        result.forEach(element => {
                                            $('#sheetName').append('<option value="' + (i++) + '">' + element + '</option>');
                                        });
                                        $('#sectionSheet').fadeIn()
                                    }

                                }
                            });
                        }
                    }
                })
            } else {
                $("#alertFile").fadeOut(function() {
                    $(this).text("กรุณาเลือกไฟล์").fadeIn();
                    $(this).fadeOut(3000);
                })
            }
        })
        let countAddCol = 0
        $("#addCol").click(function(){
            countAddCol++
            if(countAddCol > 3){
                countAddCol = 3
                return 
            }
            $('#plusCol').append('<div class="col">'+
                                    '<div class="mt-4" > </div>'+
                                    '<select name="dur_number[]" class="form-control">'+
                                        '<option value="">-</option>'+
                                        '<option value="A">A</option>'+
                                        '<option value="B">B</option>'+
                                        '<option value="C">C</option>'+
                                        '<option value="D">D</option>'+
                                        '<option value="E">E</option>'+
                                        '<option value="F">F</option>'+
                                        '<option value="G">G</option>'+
                                        '<option value="H">H</option>'+
                                        '<option value="I">I</option>'+
                                        '<option value="J">J</option>'+
                                        '<option value="K">K</option>'+
                                        '<option value="L">L</option>'+
                                        '<option value="M">M</option>'+
                                        '<option value="N">N</option>'+
                                        '<option value="O">O</option>'+
                                        '<option value="P">P</option>'+
                                        '<option value="Q">Q</option>'+
                                        '<option value="R">R</option>'+
                                        '<option value="S">S</option>'+
                                        '<option value="T">T</option>'+
                                        '<option value="U">U</option>'+
                                        '<option value="V">V</option>'+
                                        '<option value="W">W</option>'+
                                        '<option value="X">X</option>'+
                                        '<option value="Y">Y</option>'+
                                        '<option value="Z">Z</option>'+
                                    '</select>'+
                                    '<div class="mt-4" > </div>'+
                                    '<select name="dur_name[]" class="form-control">'+
                                        '<option value="">-</option>'+
                                        '<option value="A">A</option>'+
                                        '<option value="B">B</option>'+
                                        '<option value="C">C</option>'+
                                        '<option value="D">D</option>'+
                                        '<option value="E">E</option>'+
                                        '<option value="F">F</option>'+
                                        '<option value="G">G</option>'+
                                        '<option value="H">H</option>'+
                                        '<option value="I">I</option>'+
                                        '<option value="J">J</option>'+
                                        '<option value="K">K</option>'+
                                        '<option value="L">L</option>'+
                                        '<option value="M">M</option>'+
                                        '<option value="N">N</option>'+
                                        '<option value="O">O</option>'+
                                        '<option value="P">P</option>'+
                                        '<option value="Q">Q</option>'+
                                        '<option value="R">R</option>'+
                                        '<option value="S">S</option>'+
                                        '<option value="T">T</option>'+
                                        '<option value="U">U</option>'+
                                        '<option value="V">V</option>'+
                                        '<option value="W">W</option>'+
                                        '<option value="X">X</option>'+
                                        '<option value="Y">Y</option>'+
                                        '<option value="Z">Z</option>'+
                                    '</select>'+                                    
                                    '<div class="mt-4" > </div>'+
                                    '<select name="dur_description[]" class="form-control">'+
                                        '<option value="">-</option>'+
                                        '<option value="A">A</option>'+
                                        '<option value="B">B</option>'+
                                        '<option value="C">C</option>'+
                                        '<option value="D">D</option>'+
                                        '<option value="E">E</option>'+
                                        '<option value="F">F</option>'+
                                        '<option value="G">G</option>'+
                                        '<option value="H">H</option>'+
                                        '<option value="I">I</option>'+
                                        '<option value="J">J</option>'+
                                        '<option value="K">K</option>'+
                                        '<option value="L">L</option>'+
                                        '<option value="M">M</option>'+
                                        '<option value="N">N</option>'+
                                        '<option value="O">O</option>'+
                                        '<option value="P">P</option>'+
                                        '<option value="Q">Q</option>'+
                                        '<option value="R">R</option>'+
                                        '<option value="S">S</option>'+
                                        '<option value="T">T</option>'+
                                        '<option value="U">U</option>'+
                                        '<option value="V">V</option>'+
                                        '<option value="W">W</option>'+
                                        '<option value="X">X</option>'+
                                        '<option value="Y">Y</option>'+
                                        '<option value="Z">Z</option>'+
                                    '</select>'+                                    
                                    '<div class="mt-4" > </div>'+
                                    '<select name="dur_price[]" class="form-control">'+
                                        '<option value="">-</option>'+
                                        '<option value="A">A</option>'+
                                        '<option value="B">B</option>'+
                                        '<option value="C">C</option>'+
                                        '<option value="D">D</option>'+
                                        '<option value="E">E</option>'+
                                        '<option value="F">F</option>'+
                                        '<option value="G">G</option>'+
                                        '<option value="H">H</option>'+
                                        '<option value="I">I</option>'+
                                        '<option value="J">J</option>'+
                                        '<option value="K">K</option>'+
                                        '<option value="L">L</option>'+
                                        '<option value="M">M</option>'+
                                        '<option value="N">N</option>'+
                                        '<option value="O">O</option>'+
                                        '<option value="P">P</option>'+
                                        '<option value="Q">Q</option>'+
                                        '<option value="R">R</option>'+
                                        '<option value="S">S</option>'+
                                        '<option value="T">T</option>'+
                                        '<option value="U">U</option>'+
                                        '<option value="V">V</option>'+
                                        '<option value="W">W</option>'+
                                        '<option value="X">X</option>'+
                                        '<option value="Y">Y</option>'+
                                        '<option value="Z">Z</option>'+
                                    '</select>'+
                                    '<div class="mt-4" > </div>'+
                                    '<select name="dur_status[]" class="form-control">'+
                                        '<option value="">-</option>'+
                                        '<option value="A">A</option>'+
                                        '<option value="B">B</option>'+
                                        '<option value="C">C</option>'+
                                        '<option value="D">D</option>'+
                                        '<option value="E">E</option>'+
                                        '<option value="F">F</option>'+
                                        '<option value="G">G</option>'+
                                        '<option value="H">H</option>'+
                                        '<option value="I">I</option>'+
                                        '<option value="J">J</option>'+
                                        '<option value="K">K</option>'+
                                        '<option value="L">L</option>'+
                                        '<option value="M">M</option>'+
                                        '<option value="N">N</option>'+
                                        '<option value="O">O</option>'+
                                        '<option value="P">P</option>'+
                                        '<option value="Q">Q</option>'+
                                        '<option value="R">R</option>'+
                                        '<option value="S">S</option>'+
                                        '<option value="T">T</option>'+
                                        '<option value="U">U</option>'+
                                        '<option value="V">V</option>'+
                                        '<option value="W">W</option>'+
                                        '<option value="X">X</option>'+
                                        '<option value="Y">Y</option>'+
                                        '<option value="Z">Z</option>'+
                                    '</select>'+
                                '</div>')
        })
        $("#delCol").click(function(){
            $('#plusCol').empty();
            countAddCol = 0
        })
    })
</script>