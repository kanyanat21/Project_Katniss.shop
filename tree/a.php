<?php
@session_start();
	include("connectdb.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>รายการต้นไม้</title>
	
	<link rel="stylesheet" href="bootstrap.css" >
</head>
<body>
<img src="t.png" align="Left" width="100" height="100">
	
	<div class="homeheader">
      <h1>รายการต้นไม้</h1>
		<h4>หน้าแก้ไขข้อมูล</h4><?echo "ชื่อผู้ดูแลระบบ: ".$_SESSION['aname']."<br>";?>
    </div>
	
<p>
	<a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
	<a href="p.php?id=<?=$data['c_id'];?>" class="btn btn-warning" role="button">เพิ่มข้อมูล</a>
	<a href="view_order.php" class="btn btn-info">รายละเอียดการสั่งซื้อ</a> 
</p>
<br><br>
<form class="form-inline" action="tree.php" method="post">
</form>


<?php
	@$kw = $_POST['kw'] ;
	@$tt = $_GET['tt'] ;
	if (isset($_GET['tt'])) {
		$s = "and (c_type = '$tt')"; 
	} else {
		$s = "";	
	}
	$sql = "select * from product where ( c_title like '%$kw%' or c_detail like '%$kw%' ) $s ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		if( ($i % 3) == 1) {
			echo "<div class='row' align='center' style='width:100%;'>";
		}
?>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="images/<?=$data['c_id'].$data['c_ext'];?>" width="200" style="border-radius: 14px;" >
      <div class="caption">
        <h4><?=$data['c_title'];?></h4>
		<h4><?=$data['c_detail'];?></h4>
        <h4><?=number_format($data['c_price'],0);?> บาท</h4>
        <p>
		   <a href="b.php?id=<?=$data['c_id'];?>" class="btn btn-primary" role="button">แก้ไข</a>
		   <a href="d.php?id=<?=$data['c_id'];?>" class="btn btn-primary" role="button">ลบ</a>
		</p>
      </div>
    </div>
  </div>
<?php 
		if ( ($i % 3 ) == 0){
			echo "</div>";	
		}
	} // end while
	mysqli_close($conn);
?>

</body>
</html>