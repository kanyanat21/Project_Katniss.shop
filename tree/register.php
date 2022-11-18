<?php 
	session_start();
	include('connectdb.php') 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
	
</head>
<body>
	
  <div class="header">
        <h2>Register</h2>
    </div>

    <form action="registerdb.php" method="post">
        <?php include('errors.php'); ?>
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
  	<div class="input-group">
  	  <label for="username">Username</label>
  	  <input type="text" name="username" required autofocus>
  	</div>
		
	  <div class="input-group">
  	  <label for="email">Email</label>
  	  <input type="email" name="email" required >
  	</div>
		
  	<div class="input-group">
  	  <label for="password_1">Password</label>
  	  <input type="password" name="password_1" required>
	</div>
		
  	<div class="input-group">
  	  <label for="password_2">Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
		
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
		
  	<p>
		<a class="btn" href="homepage1.php">กลับสู่หน้าสินค้า</a><br><br>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>