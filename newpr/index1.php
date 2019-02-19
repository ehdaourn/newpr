<?php  include('server1.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM utilisateur WHERE id=$id");

		if ($record) {
			$n = mysqli_fetch_array($record);
			$username = $n['username'];
            $email = $n['email'];
            $password = $n['password'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM utilisateur"); ?>


	

		</div>
	</form>
</body>
</html>