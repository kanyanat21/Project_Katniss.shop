<?php
@session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เข้าสู่ระบบ Back Office</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<div class="header">
  	<h2>เข้าสู่ระบบ Back Office</h2>
    </div>
<form method="post" action="">
	<div class="Mali">Username</div> <input type="text" name="auser"  required autofocus> <br>
	<div class="Mali">Password</div> <input type="password" name="apwd"  required> <br> 
	<input type="submit" name="Submit" class="btn" value="LOGIN" > 
	<a href="login.php" class="btn btn-primary">Back</a>  
</form>
	
<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	
	$sql = "select * from admin where a_user='{$_POST['auser']}' and a_pwd='".md5($_POST['apwd'])."' ";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);
	
	if($num > 0){
		$date = mysqli_fetch_array($rs);
		$_SESSION['aid'] = $date['a_id'];
		$_SESSION['aname'] = $date['a_name'];
		echo "<script>";
		echo "window.location='a.php';";
		echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Login ไม่สำเร็จ');";
		echo "</script>";
	}
}
?>
	
</body>
</html>