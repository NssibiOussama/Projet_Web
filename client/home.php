
<!DOCTYPE html>
<html>
<head>
	<title>Admin_session</title>
	<link rel="shortcut icon" href="/projet_fin/session_admin/image/admin_icon1.png">
	<link rel="stylesheet" href="/projet_fin/session_admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="/projet_fin/session_admin/css/styleform.css">
</head>
<body>
	<div class="login-box">
		<h1>Authentification ADmin</h1>
		<form method="POST" action="login_admin.php">
		<div class="textbox">
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<input type="email" name="email" placeholder="Email" value="" required>
		</div>
		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" name="mdp" placeholder="Mot de passe" value="" required>
		</div>
		<input type="submit" name="" class="btn" value="Se connecter">
		</form>
		<font face="century gothic"><p style="color: #d04152">
		
				<?php 
				if (isset($_GET['msg'])) 
				{
					echo $_GET['msg'];
				}
				 ?>	 	
			 </p></font>
		

	</div>

</body>
</html>

