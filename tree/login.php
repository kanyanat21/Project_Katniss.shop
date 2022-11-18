<?php 
	session_start();
	include_once("connectdb.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ร้านขายต้นไม้</title>
	
<link rel="stylesheet" href="style.css">
</head>
<body>
	
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form name="login" method="post" action="logindb.php">

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
	  
  	<div class="input-group"><label>Username</label> <input type="text" name="username" required autofocus></div>
	<div class="input-group"><label>Password</label><input type="password" name="password" required><br><br></div>
    <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign in</a></p>
		<p>admin <a href="admin.php">Sign in Admin</a></p>
    </form>
</body>
</html>