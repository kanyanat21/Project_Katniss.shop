<meta charset="utf-8">
<?php
$host = "localhost";
$user = "root";
$pwd = "08042544";
$db = "tree";

$conn = mysqli_connect($host, $user, $pwd) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_select_db($conn, $db) or die ("เลือกฐานข้อมูลไม่ได้");
mysqli_query($conn,"SET NAMES utf8");

 // ตรวจสอบการเชื่อมต่อ
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 


?>