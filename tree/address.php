<?php 
	@session_start();
	include('connectdb.php') 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ที่อยู่สั่งซื้อ</title>

    <link rel="stylesheet" href="style.css">
	
</head>
<body>
	
  <div class="header">
        <h2>ที่อยู่สั่งซื้อ</h2>
    </div>

    <form action="" method="post">
  	<div class="input-group">
  	  <label for="username">ชื่อ</label>
  	  <input type="text" name="username" required autofocus>
  	</div>
		
	  <div class="input-group">
  	  <label for="address">ที่อยู่</label>
  	  <input type="text" name="address" required >
  	</div>
		
  	<div class="input-group">
  	  <label for="phone">เบอร์โทรศัพท์</label>
  	  <input type="number" name="phone" required>
  	</div>
		
  	<div class="input-group">
  	  <button type="submit" class="btn" name="Submit">ยืนยัน</button>
  	</div><br><br>
		
  	<p>
		<a class="btn" href="basket.php">กลับสู่หน้าสินค้า</a>
  	</p>
  </form>
</body>
</html>