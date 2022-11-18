<meta charset="utf-8">
<?php
@session_start();
if(empty($_SESSION['username'])){
    exit;
}
	include("connectdb.php");
	
		foreach($_SESSION['sid'] as $tid) {
			$sum[$tid] = $_SESSION['sprice'][$tid] * $_SESSION['sitem'][$tid] ;
			@$total += $sum[$tid] ;
		}
	
	$sql = "insert into orders values('', '$total', CURRENT_TIMESTAMP, '{$_SESSION['username']}');" ;
	mysqli_query($conn, $sql) or die ("insert error") ;
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['sid'] as $tid) {
		$sql2 = "insert into orders_detail values('', '$id', '".$_SESSION['sid'][$tid]."', '".$_SESSION['sitem'][$tid]."');" ;
		mysqli_query($conn, $sql2);
	}
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=clear.php\">";
?>