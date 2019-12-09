<!DOCTYPE html>
<html lang="en">

<head>

	<title>Distribuidora Norden - Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="image/png" href="../favicon.ico"/>	

	

	<!-- Estilos gerais -->
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/bootstrap/bootstrap-navbar.css">
	<link rel="stylesheet" type="text/css" href="../styles/animation/animate.css">
	<link rel="stylesheet" type="text/css" href="../styles/select/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/main.css">

	<!-- Fontes e icones -->
	<link rel="stylesheet" type="text/css" href="../styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">	

	<!-- Estilos da página -->
	<link rel="stylesheet" type="text/css" href="../styles/login/util.css">
	<link rel="stylesheet" type="text/css" href="../styles/login/main.css">

	<script src="../scripts/jquery/jquery-3.2.1.min.js"></script>

	<?php include ('header.php'); ?>
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form>

					<span class="login-layout-title p-t-20 p-b-45">
						Trabalhe Conosco
					</span>



					<div class="wrap-input100 validate-input m-b-10">
						<input id="email" class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-10">
						<input id="name" class="input100" type="text" name="name" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<input type="file" style="color: white;" accept="application/pdf" value="134217728" />

					<div class="container-login-layout-btn p-t-10">
						<button class="login-layout-btn" type='submit' id='validateregister'>Enviar Currículo</button>
					
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="index.php" class="txt1">
						Não consegue enviar seu currículo?
						</a>
					</div>

				</form>

			</div>
		</div>
	</div>	


</body>

<footer>

 <?php include ('footer.php'); ?>
 
 </footer>

</html>