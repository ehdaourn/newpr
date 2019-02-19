<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
<head>
<title>REGISTRATION</title>
<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
 -->
 <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css"/>
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
 <link rel="stylesheet" type="text/css" href="/bootstrap/css/checkbox.css"/>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



</head>

		<body style="background-color:#515151;">	
											<div class="container">
											<div class="login-form col-m-4 offset-md-4">
					 <form method="post" action="login.php" style="width: 450px; margin-top: 35px; padding:40px; background-color:white; box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75); border-radius:12px;">
					 <?php include('errors.php'); ?>
                 
									
                                         <h1 style="text-align: center;" class="title">Connection</h1><hr><br>
                                         
										
										 
											<hr>
											<div   class="form-group">
	 
												
												<div class="input-group-field"><span class="input-group-label"> <i style="position:absolute; background-color:dodgerblue;color:white;padding-left: 13px;padding-top:10px; width:40px;height:34px;"  class="fas fa-user"> </i></span>
												<input style="margin-left:30px;"  type="text" name="username" placeholder="entrer votre nom" class="form-control" name="username"></div><br>
											 <div class="input-group-field"><span class="input-group-label"><i style="position:absolute; background-color:dodgerblue;color:white;padding-left: 13px;padding-top:10px; width:40px;height:34px;" class="fas fa-shield-alt"></i></span>
												<input style="margin-left:30px;"  type="password" password="password" placeholder="entrer votre mot de passe" class="form-control"name="password"></div><br>
											
														 
														<br>
												 <button type="submit" name="login_user" class="btn btn-info">se connecter</button>
</div>
											 </div>
</div>
											 <p style="margin-left:400px; margin-top:-90px;">
  		Pas encore un membre?<br> <a href="testform.php">Inscris toi</a>
  	
  	</p>
  	
											 

								</form>
		</body>
</html>