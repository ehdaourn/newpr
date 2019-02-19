<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'formulaires');

	// initialize variables
	$username = "";
    $email = "";
    $password ="";
	$id = 0;
	$update = false;

	
    if (isset($_POST['update'])) {
        
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
    
        mysqli_query($db, "UPDATE utilisateur SET username='$username', email='$email', password = '$password' WHERE id=$id");
        $_SESSION['message'] = "Address updated!"; 
        header('location: boutique.php');}
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM utilisateur WHERE id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index1.php');
        }