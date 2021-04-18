<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Required/superteam-ghana</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="ad"><h1 id="banner"> Superteam Ghana</div>
  <form method="post" action="login.php" id="frm2">
  	<?php include('errors.php'); ?>
	  <h2 class="sup">Login Required</h2>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn1" name="login_user">Login</button>
  	</div>
  	<p>
  		Don't have an acount yet? <a href="signup.php">Create one</a>
  	</p>
  </form>
</body>
</html>