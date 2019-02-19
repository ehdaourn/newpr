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
					 <form method="post" action="testform.php" style="width: 450px; margin-top: 35px; padding:40px; background-color:white; box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75); border-radius:12px;">
					 <?php include('errors.php'); ?>
                 
									
                                         <h1 style="text-align: center;" class="title">REGISTRATION</h1><hr><br>
                                         
											<div style="cursor: pointer;
											
											margin-top: 160px;
											position: absolute;
											width: 28px;
											height: 28px;
											top: 0;
											border-radius: 5px;"  class="round">
                                              <input type="checkbox" name="check1" id="checkbox" />
                                              <label style="background-color: dodgerblue;" for="checkbox"></label> Personal
                                            </div> 
										
										 
											<div style="cursor: pointer;
											margin-top: 160px;
											margin-left: 250px;
											position: absolute;
											width: 28px;
											height: 28px;
											top: 0;
											border-radius: 5px;"class="round">
                                              <input type="checkbox" name="check2" id="checkbox" />
											  <label style="background-color: dodgerblue;text-align: end;color:firebrick;" for="checkbox"></label> Company
											  
                                            </div> 
										 
											<hr>
											<div   class="form-group">
	 
												<div  class="input-group-field"><span class="input-group-label"><i style="position:absolute;background-color:dodgerblue;color:white;padding-left: 13px;padding-top:10px; width:40px;height:34px;" class="fas fa-envelope"></i></span>
											 <input style="margin-left:30px;" type="text" email="email" placeholder="@email" class="form-control" name="email" value="<?php echo $email; ?>"></div><br>
												<div class="input-group-field"><span class="input-group-label"> <i style="position:absolute; background-color:dodgerblue;color:white;padding-left: 13px;padding-top:10px; width:40px;height:34px;"  class="fas fa-user"> </i></span>
												<input style="margin-left:30px;"  type="text" name="username" placeholder="entrer votre nom" class="form-control" id="username" name="username" value="<?php echo $username; ?>"></div><br>
											 <div class="input-group-field"><span class="input-group-label"><i style="position:absolute; background-color:dodgerblue;color:white;padding-left: 13px;padding-top:10px; width:40px;height:34px;" class="fas fa-shield-alt"></i></span>
												<input style="margin-left:30px;"  type="password" password="password" placeholder="entrer votre mot de passe" class="form-control"name="password_1"></div><br>
											 <div class="input-group-field"><span class="input-group-label"><i style="position:absolute; background-color:dodgerblue;color:white;padding-left: 13px;padding-top:10px; width:40px;height:34px;" class="fas fa-shield-alt"></i></span>
												 <input style="margin-left:30px;"  type="password" password="password" placeholder="confirmer votre mot de passe" class="form-control" name="password_2"></div>
														 
														<br>
												 <button type="submit" name="reg_user" class="btn btn-info">créer compte</button>
</div>
											 </div>
</div>
											 <p style="margin-left:400px; margin-top:-90px;">	En cliquant sur le bouton <br>vous etes d'accord<br> avec les termes et conditions.

		</p>
		<p style="margin-left:250px; margin-top:-30px;">
  		<br> <a href="login.php">Connecte toi</a>
  	
  	</p>
  	
											 

								</form>
		</body>
</html>