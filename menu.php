<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("location: index.php");
    }
?>
<link rel="stylesheet" type="text/css" href="css/menu.css">
  <!--===============================================================================================-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-nav">
    <img src="images\ovec-removebg.png" alt="Logo" style="width:40px;">  
    <a class="navbar-brand ml-3 title-name" href="#">ชื่อระบบ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link link-text" href="articles.php">ข้อมูลครุภัณฑ์ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="peopleregis.php">ข้อมูลบุคลากร</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="company.php">ความร่วมมือกับสถาณประกอบการ</a>
            </li>
            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li> -->
        </ul>
        <span class="navbar-text text-name">
            วิทยาลัยเทคนิคชลบุรี 
        </span>
        <span class="navbar-text">
            <a class="nav-link color-logout" href="logout.php">Logout</a>
        </span>
    </div>
</nav>