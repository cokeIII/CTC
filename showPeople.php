<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<!--===============================================================================================-->
<style>
.art-table {
    margin-top: 0%;
}
.txt-link{
    color: white !important;
}
.icon-color{
    color: black;
}
.h-auto{
        height: 100%;
        width: 100%;
        position: absolute;
        right: 0;
        top: 0;
    }
</style>

<body>
    <?php
    include "menu.php";
    require_once "connect.php";
    $user_id = $_SESSION["user_id"];
    $sql = "select * from personnel where user_id = '$user_id'";
    $result = $connect->query($sql);

    ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/1.jpg" alt="" class="h-auto">
                    <div class="signup-img-content">
                        <h2>ข้อมูลบุคลากร</h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <div class="row mt-5 ml-3"><button class="btn btn-primary "><a href="peopleregis.php" class="txt-link">เพิ่มข้อมูล</a></button></div>
                    <div class="row art-table p-4">
                        <table class="table  " id="artTable">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">ชื่อ-สกุล</th>
                                    <th>ความชำนาญ/เชี่ยวชาญ</th>
                                    <th>ระดับชั้นที่เป็นที่ปรึกษา</th>
                                    <th>จำนวนคาบสอน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $row["per_prename"].$row["per_name"];?></td>
                                    <td><?php echo $row["pre_expertise1"].",".$row["pre_expertise2"].",".$row["pre_expertise3"];?></td>
                                    <td><?php echo $row["level_edu"]." กลุ่ม ".$row["group_name"];?></td>
                                    <td><?php echo $row["pre_teaching"];?></td>
                                    <td><button class="btn btn-warning"><a href="formEditPeo.php?per_id=<?php echo $row["per_id"];?>"><i class="icon-color fa fa-pencil-square"></i></a></button></td>
                                    <td><button class="btn btn-danger"><a href="sqlPeople.php?per_id=<?php echo $row["per_id"];?>&delPeo=true"><i class="icon-color fa fa-trash"></i></a></button></td>
                                </tr>
                                <?php
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "footer.php"; ?>
<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $("#artTable").DataTable({
        responsive: true
    })
})
</script>