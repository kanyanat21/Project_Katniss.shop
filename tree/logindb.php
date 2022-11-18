<?php
ob_start();
    session_start();
    include('connectdb.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "ต้องระบุชื่อผู้ใช้");
        }

        if (empty($password)) {
            array_push($errors, "ต้องกรอกรหัสผ่าน");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "คุณได้เข้าสู่ระบบแล้ว";
                header("location: tree.php");
            } else {
                array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านผิด");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านผิด!";
				header("location: login.php");
            }
        } else {
            array_push($errors, "ต้องระบุชื่อผู้ใช้และรหัสผ่าน");
            $_SESSION['error'] = "ต้องระบุชื่อผู้ใช้และรหัสผ่าน";
			header("location: login.php");
        }
    }
ob_end_flush();
?>