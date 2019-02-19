<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
</head>
<body style="font-size: 120%;
    background: #F8F8FF;">
  <div style="header;  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #673AB7;
  text-align: center;
  border: 1px solid #673AB7;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;">
  	<h2>Register</h2>
  </div>
	
  <form  method="POST" action="register.php"  style=" width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #673AB7;
    background: white;
    border-radius: 0px 0px 10px 10px;">
  	<?php include('errors.php'); ?>
  	<div style="margin: 10px 0px 10px 0px;  display: block;
    text-align: left;
    margin: 3px; ">
  	  <label style="display: block;
    text-align: left;
    margin: 3px;">Username</label>
  	  <input style="height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;" type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div style="margin: 10px 0px 10px 0px;  display: block;
    text-align: left;
    margin: 3px; ">
  	  <label  style="display: block;
    text-align: left;
    margin: 3px;">Email</label>
  	  <input  style="height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div style="margin: 10px 0px 10px 0px;  display: block;
    text-align: left;
    margin: 3px; ">
  	  <label  style="display: block;
    text-align: left;
    margin: 3px;">Password</label>
  	  <input  style="height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;" type="password" name="password_1">
  	</div>
  	<div style="margin: 10px 0px 10px 0px;  display: block;
    text-align: left;
    margin: 3px; ">
  	  <label  style="display: block;
    text-align: left;
    margin: 3px;">Confirm password</label>
  	  <input  style="height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;" type="password" name="password_2">
  	</div>
  	<div>
  	  <button style=" padding: 10px;
    font-size: 15px;
    color: white;
    background: #673AB7;
    border: none;
    border-radius: 5px;" type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>