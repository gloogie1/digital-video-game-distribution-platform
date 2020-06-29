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
  <title>Game Portal Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class=old>
  <form method="post" action="register.php">
    <fieldset>
  <legend>REGISTER</legend>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email<br></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	</fieldset>
  </form>
</body>
</html>