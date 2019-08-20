<!DOCTYPE html>
<html lang="en">

<head>

	<title>Distribuidora Norden - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="image/png" href="../favicon.ico"/>	

	<link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/animation/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/hamburguer/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/select/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/login/util.css">
	<link rel="stylesheet" type="text/css" href="../styles/login/main.css">
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login-layout validate-form">

					<span class="login-layout-title p-t-20 p-b-45">
						Digite o endereço de E-mail vinculado a conta
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "E-mail obrigatório">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="container-login-layout-btn p-t-10">
						<button class="login-layout-btn" href="login.php">
							Continuar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
	
	<script src="../scripts/jquery/jquery-3.2.1.min.js"></script>
	<script src="../scripts/login/popper/popper.js"></script>
	<script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
	<script src="../scripts/login/select/select2.min.js"></script>
	<script src="../scripts/login/main.js"></script>

</body>

<footer>

 <?php include ('footer.php'); ?>
 
 </footer>

</html>