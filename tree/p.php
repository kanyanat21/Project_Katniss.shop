<?php
@session_start();
?>

<!doctype html>
<html>
<link href="style.css" rel="stylesheet">
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูล</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
	<section class="min-vh-100 d-flex justify-content-center align-items-center" >		
	<div class="card">
  <div class="card-body">
	  <h3>เพิ่มข้อมูล</h3>
 <div class=" mb-3 ">
    <label>ชื่อสินค้า</label>
    <input type="text" class="form-control" name="c_title" autofocus required>
  </div>
   <div class=" mb-3 ">
    <label>ลายละเอียด</label>
    <input type="text" class="form-control" name="c_detail" required>
  </div>
  <div class=" mb-3 ">
    <label>ราคา</label>
    <input type="text" class="form-control" name="c_price" required>
  </div>
  <div class=" mb-3">
      <label>ประเภท</label>
  	 <select name="type">
	<option value="1">ต้นไม้ฟอกอากาศ</option>
	<option value="2">ยิมโน</option>
	<option value="3">แอสโตรไฟตัม</option>
	<option value="4">แมมมิลลาเรีย</option>
	</select><br><br>
  </div>
<div class="col-mb-3">
    <label class="form-label" required>ไฟล์รูปภาพสินค้า</label>
    <input type="file" class="form-control" name="c_picture" required>
    <div class="invalid-feedback" >Example invalid form file feedback</div>
  </div>
	   <input type="submit" name="Submit"  value="เพิ่มข้อมูล" class="btn btn-outline-success"><br><br>
    </div>
		<p>
  		<a class="btn" href="a.php">กลับสู่หน้าหลัก</a>
  	</p>
</div>
</div>
</form>
<?php
	
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
	
	$path = $_FILES['c_picture']['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);	
		
	$sql = "INSERT INTO product (c_id, c_title, c_detail, c_price, c_picture, c_type, c_ext) VALUES (NULL,  '{$_POST['c_title']}', '{$_POST['c_detail']}', '{$_POST['c_price']}', '{$_POST['c_picture']}', '{$_POST['c_type']}', '.{$ext}')";
	
	mysqli_query($conn, $sql) or die ("ไม่สามรถเพิ่มข้อมูลได้");
	$bid = mysqli_insert_id($conn);
	
	//var_dump($sql); exit;
	copy($_FILES['c_picture']['tmp_name'], "images/".$bid.".".$ext);	
			
	echo "<script>" ;
	echo "alert('เพิ่มข้อมูลสำเร็จ');" ;
	echo "window.location='a.php';" ;
	echo "</script>" ;
}	
	
?>
	</section>

</body>
</html>