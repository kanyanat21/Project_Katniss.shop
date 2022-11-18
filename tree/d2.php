<meta charset="utf-8">

<?php
 if(isset($_GET['username'])){
     include_once("connectdb.php");
     $sql = "DELETE FROM user WHERE user.c_id = '{$_GET['username']}'";
     mysqli_query($conn, $sql) or die ('ลบข้อมูลไม่ได้');

     unlink("images/".$_GET['username'].".".$_GET['ext']);

     echo"<script>";
     echo"alert('ลบข้อมูลสำเร็จ');";
     echo"window.location='a.php';";
     echo"</script>";
 }
?>