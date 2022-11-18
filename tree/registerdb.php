<?php
@session_start();
ob_start();
include_once("connectdb.php");

// ตัวแปรเริ่มต้น
$errors = array(); 

// ลงทะเบียนผู้ใช้
if (isset($_POST['reg_user'])) {
  // รับค่าอินพุตทั้งหมดจากแบบฟอร์ม
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
	
  // การตรวจสอบแบบฟอร์ม: ตรวจสอบให้แน่ใจว่ากรอกแบบฟอร์มอย่างถูกต้อง ...
  // โดยการเพิ่ม (array_push()) ข้อผิดพลาดที่สอดคล้องกับ $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "รหัสผ่านทั้งสองไม่ตรงกัน");
  }

  // ตรวจสอบฐานข้อมูลก่อนเพื่อให้แน่ใจว่า 
  // ผู้ใช้ไม่มีอยู่แล้ว u_user และ/หรือ u_email . เดียวกัน
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $query = mysqli_query($conn, $user_check_query);
  $result = mysqli_fetch_assoc($query);
  
  if ($result) { // if user exists
	  if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }
	if (count($errors) == 0) {
            $password = md5($password_1);
		
			$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณกำลังเข้าสู่ระบบ";
			 header("location: login.php");
        } else {
			header("location: login.php");
        }
    }
ob_end_flush();
?>