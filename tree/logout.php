<?php
@session_start();

unset($_SESSION['aid']);
unset($_SESSION['aname']);

echo "<script>";
echo "location='homepage1.php';";
echo "</script>";

?>