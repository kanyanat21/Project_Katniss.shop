<?php
@session_start();
?>

<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
<title>ที่อยู่สั่งซื้อ</title>
</head>
<body>
	<div class="header">
        <h2>ที่อยู่สั่งซื้อ</h2>
    </div>

</body>
<body>
<h1 style="color: white">รายการที่อยู่จัดส่ง</h1>
<table width="832" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="250" style="color: white">ชื่อ</td>
    <td width="300" style="color: white">ที่อยู่</td>
    <td width="155" style="color: white">รหัสไปรษณีย์</td>
	<td width="150" style="color: white">เบอร์โทรศัพท์</td>
    <td width="155" style="color: white">บริษัทผู้จัดส่ง</td>
  </tr>
  
  <?php
	include("connectdb.php");
	$sql = "select * from `address` order by ad_id desc";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?>

  <tr> 
    <td style="color: white"><?=$data['ad_id'];?></td>  
    <td style="color: white"><?=$data['ad_name'];?></td>
    <td style="color: white"><?=$data['ad_ad'];?></td>
    <td style="color: white"><?=$data['ad_pd'];?></td>
	<td style="color: white">0<?=$data['ad_Email'];?></td>
    <td style="color: white"><?=$data['ad_od'];?></td>
  </tr>
  
  <?php  }  ?>
  
</table>
</body>
</html>