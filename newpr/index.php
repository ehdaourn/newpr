<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) 

  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) 
  
  {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
</head>
<body>

<div style="header; width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #673AB7;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;">
	<h2>Home Page</h2>
</div>
<div   style="width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #673AB7;
    background: white;
    border-radius: 0px 0px 10px 10px;
  ">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div  style=" width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;">
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
		
</body>
</html>