<?php
@session_start()
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายละเอียดใบสั่งซื้อ</title>
	
</head>

<body background="f.jpg">
<h1>รายละเอียดใบสั่งซื้อ เลขที่ <?=$_GET['a'];?></h1>
	
<p>
	<a href="view_address.php" class="btn btn-link">ยืนยันที่อยู่การสั่งซื้อ</a>
	<a href="view_order_user.php" class="btn btn-link">กลับ</a>
</p>
	
<table width="863" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="54">ที่</td>
    <td width="318">สินค้า</td>
    <td width="141">จำนวน</td>
    <td width="149">ราคา/ชิ้น</td>
    <td width="173">รวม (บาท)</td>
  </tr>
  
  <?php
	include("connectdb.php");
	$sql = "SELECT  *  FROM  orders_detail
INNER JOIN product ON orders_detail.pid = product.c_id
WHERE orders_detail.oid = '".$_GET['a']."'  ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		$sum = $data['c_price'] * $data['item'] ;
		@$total += $sum;
?>
  <tr>
    <td><?=$i;?></td>
    <td><img src="images/<?=$data['c_picture'];?>" width="80"> <br>
	รหัสสินค้า: <?=@$data['c_id'];?> <br>
	ชื่อสินค้า: <?=$data['c_title'];?></td>
    <td><?=$data['item'];?></td>
    <td><?=number_format($data['c_price'],0);?></td>
    <td><?=number_format($sum,0);?></td>
  </tr>
 <?php } ?>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>รวมทั้งสิ้น</td>
    <td><?=number_format($total,0);?></td>
  </tr>

</table>
</body>
</html>