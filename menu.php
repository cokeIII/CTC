<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: index.php");
}
?>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<!--===============================================================================================-->
<style>
.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-nav">
    <img src="images\ovec-removebg.png" alt="Logo" style="width:40px;">
    <a class="navbar-brand ml-3 title-name" href="#">ชื่อระบบ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="dropdown">
            <button class="dropbtn">ข้อมูลครุภัณฑ์
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="showDur.php">ครุภัณฑ์</a>
                <a href="showArt.php">ห้องปฏิบัติการ</a>
                <a href="importArt.php">นำเข้าข้อมูล (Excel)</a>
            </div>
        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link link-text" href="peopleregis.php">ข้อมูลบุคลากร</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="company.php">ความร่วมมือกับสถาณประกอบการ</a>
            </li>
        </ul>

        <span class="navbar-text text-name">
            วิทยาลัยเทคนิคชลบุรี
        </span>
        <span class="navbar-text">
            <a class="nav-link color-logout" href="logout.php">Logout</a>
        </span>
    </div>
</nav>