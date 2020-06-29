<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<style>
fieldset{
	background-image:url('scroll.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center; 
	background-size: 120% 120%;
}
body{
  background-image: url('wowwall.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
  background-size: 100% 100%;	
}
form{
	margin: 0 auto;	
	width: 250px;
	margin-top:15%;
}
body.old{
	font-style:italic;
	color: yellow;
	font-weight: bold;
}
</style>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class=old>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="login.php">
	<fieldset>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
	<fieldset>
  </form>
</body>
</html>