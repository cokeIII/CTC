<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<!--===============================================================================================-->
<style>
.dur-table {
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
        $sql = "select dur.*,art.art_id,art.art_name 
        from 
        durable_articles dur left join articles art 
        on 
        dur.art_id = art.art_id";
        $result = $connect->query($sql);
    ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/2.jpg" alt="" class="h-auto">
                    <div class="signup-img-content">
                        <h2>ข้อมูลครุภัณฑ์</h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <div class="row mt-5 ml-3"><button class="btn btn-primary "><a href="durable_articles.php" class="txt-link">เพิ่มข้อมูล</a></button></div>
                    <div class="row dur-table p-4">
                        <table class="table  " id="durTable">
                            <thead>
                                <tr>
                                    <th>หมายเลขพัสดุ</th>
                                    <th>รายการ</th>
                                    <th>รายละเอียด</th>
                                    <th>ราคา</th>
                                    <th>สถานะ</th>
                                    <th>ห้องปฏิบัติการ</th>
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
                                    <td><?php echo $row["dur_id"]?></td>
                                    <td><?php echo $row["dur_name"]?></td>
                                    <td><?php echo $row["dur_description"]?></td>
                                    <td><?php echo $row["dur_price"]?></td>
                                    <td><?php echo $row["dur_status"]?></td>
                                    <td><?php echo $row["art_name"]?></td>
                                    <td><button class="btn btn-warning"><a href="editDur.php?dur_id=<?php echo $row["dur_id"]?>"><i class="icon-color fa fa-pencil-square"></i></a></button></td>
                                    <td><button class="btn btn-danger"><a href="sql.php?dur_id=<?php echo $row["dur_id"]?>?delArt=true"><i class="icon-color fa fa-trash"></i></a></button></td>
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
    $("#durTable").DataTable()
})
</script>