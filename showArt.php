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
    $sql = "select * from articles where user_id = '$user_id'";
    $result = $connect->query($sql);

    ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/2.jpg" alt="" class="h-auto">
                    <div class="signup-img-content">
                        <h2>ข้อมูลห้องปฏิบัติการ</h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <div class="row mt-5 ml-3"><button class="btn btn-primary "><a href="articles.php" class="txt-link">เพิ่มข้อมูล</a></button></div>
                    <div class="row art-table p-4">
                        <table class="table  " id="artTable">
                            <thead>
                                <tr>
                                    <!-- <th>หมายเลขห้องปฏิบัติการ</th> -->
                                    <th>ชื่อห้องปฏิบัติการ</th>
                                    <th>จำนวนที่นั่ง</th>
                                    <th>จำนวนเครื่องคอมพิวเตอร์</th>
                                    <th>อุปกรณ์สื่อการสอน</th>
                                    <th>ประเภทครุภัณฑ์</th>
                                    <!-- <th>แผนก</th> -->
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                            ?>
                                <tr>
                                    <!-- <td><?php //echo $row["art_number"]?></td> -->
                                    <td><?php echo $row["art_name"]?></td>
                                    <td><?php echo $row["art_amount"]?></td>
                                    <td><?php echo $row["art_com"]?></td>
                                    <td><?php echo $row["art_instruction"]?></td>
                                    <td><?php echo $row["art_type"]?></td>
                                    <!-- <td><?php //echo $row["dep_id"]?></td> -->
                                    <td><button class="btn btn-warning"><a href="formEditArt.php?art_id=<?php echo $row["art_id"]?>"><i class="icon-color fa fa-pencil-square"></i></a></button></td>
                                    <td><button class="btn btn-danger"><a href="sqlArticles.php?art_id=<?php echo $row["art_id"]?>&delArt=true"><i class="icon-color fa fa-trash"></i></a></button></td>
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