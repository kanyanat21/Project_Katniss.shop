<?php
@session_start();
    include_once("connectdb.php");

	$id = $_GET['id'];

    $sql = "SELECT * FROM `product` WHERE c_id = '{$id}' ";
    $rs = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($rs);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูล</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>แก้ไขข้อมูล</h2>
</div>
<form method="post" action="" enctype="multipart/form-data">
	ชื่อต้นไม้ <input type="text" name="c_title" required autofocus value="<?=$data['c_title'];?>"> <br>
	รายละเอียด <textarea name="c_detail" rows="4" cols="30"><?=$data['c_detail'];?></textarea> <br>
	ราคา <input type="text" name="c_price" required  value="<?=$data['c_price'];?>"> <br>
	รูป <input type="file" name="c_picture" id="fileupload"> <br>
	ประเภท<select name="type">
	<option value="1">ต้นไม้ฟอกอากาศ</option>
	<option value="2">ยิมโน</option>
	<option value="3">แอสโตรไฟตัม</option>
	<option value="4">แมมมิลลาเรีย</option>
	</select><br><br>
	<input type="submit" name="Submit" class="btn" value="บันทึกข้อมูล"><br><br>
	<a class="btn" href="a.php">กลับสู่หน้าหลัก</a>
</form>
	
<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	
	if(empty($_FILES['c_picture']['name'])){
		$sql = "UPDATE `product` SET `c_title` = '{$_POST['c_title']}', `c_detail` = '{$_POST['c_detail']}',`c_price` = '{$_POST['c_price']}' WHERE `product`.`c_id` = '{$id}';";
		mysqli_query($conn, $sql) or die ("แก้ไขข้อมูลไม่ได้");
	}else{
		$path = $_FILES['c_picture']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		copy($_FILES['c_picture']['tmp_name'], "images/".$id.".".$ext);
		$sql = "UPDATE `product` SET `c_title` = '{$_POST['c_title']}', `c_detail` = '{$_POST['c_detail']}',`c_price` = '{$_POST['c_price']}', `c_picture` = '{$ext}' WHERE `product`.`c_id` = '{$id}';";
		mysqli_query($conn, $sql) or die ("แก้ไขข้อมูลไม่ได้");
	}
	//var_dump($sql); exit;
	//copy($_FILES['b_picture']['tmp_name'], "images/".$bid.".".$ext);
	echo "<script>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location='a.php';";
	echo "</script>";
}
?>
	
</body>
</html>