<?php
@session_start();
	include("connectdb.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>รายการสินค้า</title>
	
	<link rel="stylesheet" href="bootstrap.css">
	
</head>
<body background="1.png">
<img src="cactus.png" align="Left" width="150" height="150">
	<div class="homeheader">
    	<h1>Product List</h1>
    </div>
<hr>
<p>
	<a href="homepage.php" class="btn btn-success">ตะกร้าสินค้า</a>
	<a href="login.php" class="btn btn-warning">Login</a>
</p>

<form class="form-inline" action="tree.php" method="post">
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">ค้นหา</label>  
  <div class="col-md-4">
  <input name="kw" type="text" placeholder="กรอกคำค้น" class="form-control input-md">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ค้นหา</button>
  </div>
</div><br><br>

</fieldset>
	
	<img src="g.jpg" align="center" width="1800" height="5">
	<div>
    	<h1 align="center" >รายการสินค้า</h1>
    </div>
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
      <div class="card-body">
        <h4><?=$data['c_title'];?></h4>
		<h4><?=$data['c_detail'];?></h4>
        <h4><?=number_format($data['c_price'],0);?> บาท</h4>
        <p><a href="homepage.php?id=<?=$data['c_id'];?>" class="btn btn-primary" role="button">หยิบลงตะกร้า</a> </p>
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