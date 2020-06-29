<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<style>
fieldset{
	background-image:url('scroll.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center; 
	background-size: 400% 400%;
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
.button {
	background-color:green;
    border: black;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	transition:all 0.5s;
    margin: 4px 2px;
    cursor: pointer;
	outline:none;
	box shadow:0 0 4px #999;
}
ripple {
  background-position: center;
  transition: background 0.8s;
}
ripple:hover {
  background: #47a7f5 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
}
ripple:active {
  background-color: #6eb9f7;
  background-size: 100%;
  transition: background 0s;
}
button{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button:active{
  background-color: #6eb9f7;
  background-size: 100%;
  transition: background 0s;
}
button:after {
  content: ' >';
  position: absolute;
  opacity: 0;  
  top: 8px;
  right: -5px;
  transition: 0.5s;
}

button:hover{
  padding-right: 16px;
  padding-left:8px;
  background: #47a7f5 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
}

button:hover:after {
  opacity: 1;
  right: 10px;
}
.button2 {background-color: blue;} 
.button3 {background-color: red;}
.button4 {background-color: gray; color: black;}	
.button5 {background-color: black}
</style>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class=old>
<fieldset>
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</fieldset>
<fieldset>
	<ul style="list-style-type:none">
		<h2>Your Games</h2>
		<li><a href="lf2.exe" download="lf2installer.exe"><button class="button">download lf2</button></a>
			<p id="lf2"></p>
</fieldset>	
</body>
</html>