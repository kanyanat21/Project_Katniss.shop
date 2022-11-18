<?php
@session_start();

	include("connectdb.php");
	$sql = "select * from product where c_id='".@$_GET['id']."' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs, MYSQLI_BOTH);
	@$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['sid'][$id] = $data['c_id'];
		$_SESSION['stitle'][$id] = $data['c_title'];
		$_SESSION['sdetail'][$id] = $data['c_detail'];
		$_SESSION['sprice'][$id] = $data['c_price'];
		$_SESSION['spicture'][$id] = $data['c_picture'];
		@$_SESSION['sitem'][$id]++;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะกร้าสินค้า</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body background="1.png">
<img src="carts.png" align="Left" width="100" height="100">
<blockquote>
<h2>ตะกร้าสินค้า</h2>
<a href="tree.php" class="btn btn-primary">กลับไปเลือกสินค้า</a>  
<a href="clear.php" class="btn btn-warning">ลบสินค้าทั้งหมด</a> 
<a href="record.php" class="btn btn-success">สั่งซื้อสินค้า</a> 
<a href="view_order_user.php" class="btn btn-info">รายละเอียดการสั่งซื้อ</a> 


<br><br>
<table width="100%" class="table">
	<tr>
		<th width="5%">ที่</th>
		<th width="19%">รูปสินค้า</th>
		<th width="24%">ชื่อสินค้า</th>
		<th width="14%">ราคา/ชิ้น</th>
		<th width="15%">จำนวน (ชิ้น)</th>
		<th width="14%">รวม</th>
		<th width="9%">&nbsp;</th>
	</tr>
<?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $tid) {
		@$i++;
		$sum[$tid] = $_SESSION['sprice'][$tid] * $_SESSION['sitem'][$tid] ;
		@$total += $sum[$tid] ;
?>
	<tr>
		<td><?=$i;?></td>
		<td><img src="images/<?=$_SESSION['spicture'][$tid];?>" width="120" ></td>
		<td><?=$_SESSION['stitle'][$tid];?></td>
		<td><?=number_format($_SESSION['sprice'][$tid],0);?></td>
		<td> <?=$_SESSION['sitem'][$tid];?></td>
		<td><?=number_format($sum[$tid],0);?></td>
		<td><a href="clear2.php?id=<?=$tid;?>" class="btn btn-danger">ลบ</a></td>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong><?=number_format($total,0);?></strong></td>
		<td><strong>บาท</strong></td>
	</tr>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>
</table>
</blockquote>
</body>
</html>
