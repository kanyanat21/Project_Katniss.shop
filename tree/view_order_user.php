<?php
@session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายการใบสั่งซื้อ</title>
</head>

<body>
<h1>รายการใบสั่งซื้อ</h1>
	
<p>
	<a href="basket.php" class="btn btn-link">กลับสู่หน้าหลัก</a>
</p>
	
<table width="832" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="153">&nbsp;</td>
    <td width="153">เลขที่ใบสั่งซื้อ</td>
    <td width="193">วันที่</td>
    <td width="150">ราคารวม</td>
    <td width="155">ลูกค้า</td>
  </tr>
  
   <?php
	include("connectdb.php");
	$sql = "select  *  from  `orders` where c_id = '{$_SESSION["username"]}' order by oid  desc ";
	//var_dump($sql);
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?>

  <tr>
    <td><a href="view_order_detail.php?a=<?=$data['oid'];?>">ดูรายละเอียด</a></td>
    <td><?=$data['oid'];?></td>
    <td><?=$data['odate'];?></td>
    <td><?=number_format($data['ototal'],0);?></td>
    <td><?=$data['c_id'];?></td>
  </tr>
  
  <?php  }  ?>
  
</table>
</body>
</html>