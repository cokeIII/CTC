<?php include "header.php"; ?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<!--===============================================================================================-->
<style>
    .art-table {
        margin-top: 0%;
    }

    .txt-link {
        color: white !important;
    }

    .icon-color {
        color: black;
    }

    .h-auto {
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
    $sql = "select * from company";
    $result = $connect->query($sql);

    ?>
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/3.jpg" alt="" class="h-auto">
                    <div class="signup-img-content">
                        <h2>ข้อมูลความร่วมมือกับสถานประกอบการ</h2>
                        <p>วิทยาลัยเทคนิคชลบุรี</p>
                    </div>
                </div>
                <div class="signup-form">
                    <div class="row mt-5 ml-3"><button class="btn btn-primary "><a href="company.php" class="txt-link">เพิ่มข้อมูล</a></button></div>
                    <div class="row art-table p-4">
                        <table class="table  " id="comTable">
                            <thead>
                                <tr>
                                    <th>ชื่อสถานประกอบการ</th>
                                    <th>กิจกรรมที่ทำร่วมกัน</th>
                                    <th>ชื่อผู้ประสานงาน</th>
                                    <th>ชื่อหลักสูตร</th>
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
                                            <td><?php echo $row["com_name"]; ?></td>
                                            <td><?php echo $row["com_activity"]; ?></td>
                                            <td><?php echo $row["coordinator"]; ?></td>
                                            <td><?php echo $row["course_name"]; ?></td>
                                            <td><button class="btn btn-warning"><a href="formEditCom.php?com_id=<?php echo $row["com_id"]; ?>"><i class="icon-color fa fa-pencil-square"></i></a></button></td>
                                            <td><button class="btn btn-danger"><a href="sqlCompany.php?com_id=<?php echo $row["com_id"]; ?>&delCom=true"><i class="icon-color fa fa-trash"></i></a></button></td>
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
        $("#comTable").DataTable({
            responsive: true
        })
    })
</script>