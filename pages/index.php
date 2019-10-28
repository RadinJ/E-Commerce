<!DOCTYPE html>
<html lang="en">

<head>

	<title>Distribuidora Norden - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="image/png" href="../favicon.ico"/>	

	

	
	<!-- Estilos da página -->
	<link rel="stylesheet" type="text/css" href="../styles/login/util.css">
	<link rel="stylesheet" type="text/css" href="../styles/login/main.css">

	<!-- Scripts da página -->
	<script src="../scripts/jquery/jquery-3.2.1.min.js"></script>

	<?php include ('header.php'); ?>
	</head>

     <section class= "slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="../images/img_9.jpg" >
					<div class="carousel-caption d-none d-md-block">
				<h5>Distribuidora Norden</h5>
				<h6>O chopp nº 1 de toda a região sul do Brasil</h6>
				</div>
				</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="../images/imagem_3.jpg" >
					<div class="carousel-caption d-none d-md-block">	
					<h5>Conheça os mais vendidos</h5>
				<h6></h6>
				</div>
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="../images/imagem_7.jpg">
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
		</div>
    </section>



  <div class= "main-info" > 

  <div class="container mt-3 mb-4">
	<div class="container-main">
	<div class="row" style= "margin-right: -280px;margin-left: 250px;">
  <div class="col-sm-2">
    <div class="callout callout-info b-t-1 b-r-1 b-b-1">
      <small class="text-dark">Novos Clientes</small><br>
      <strong class="h4">9,123</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-danger b-t-1 b-r-1 b-b-1">
      <small class="text-dark">Total de Clientes</small><br>
      <strong class="h4">22,643</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-warning b-t-1 b-r-1 b-b-1">
      <small class="text-dark">Visualizações da Página</small><br>
      <strong class="h4">78,623</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-success b-t-1 b-r-1 b-b-1">
      <small class="text-dark">Produtos Vendidos</small><br>
      <strong class="h4" >150,123 </strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout b-t-1 b-r-1 b-b-1">
      <small class="text-dark">Litros de Chopp Vendidos</small><br>
      <strong class="h4 b">857,584L</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-primary b-t-1 b-r-1 b-b-1">
      <small class="text-dark">Satisfação dos Clientes</small><br>
      <strong class="h4">95%</strong>
    </div>
  </div><!--/.col-->
</div><!--/.row-->
</div><!--/.container-main-->
</div>		
</div>
<div class="container">

<?php>
// Dados do banco

$dbhost   = “hostbanco”;   #Nome do host
$db       = “nomebanco”;   #Nome do banco de dados
$user     = “nomeusuario”; #Nome do usuário
$password = “senhabase”;   #Senha do usuário

// Dados da tabela

$tabela = “nometabela”;    #Nome da tabela
$campo1 = “campo1tabela”;  #Nome do campo da tabela
$campo2 = “campo2tabela”;  #Nome de outro campo da tabela

 

@mssql_connect($dbhost,$user,$password) or die
(“Não foi possível a conexão com o servidor!”);
@mssql_select_db(“$db“) or die
(“Não foi possível selecionar o banco de dados!”); 

$instrucaoSQL = “SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1“;
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta); 

echo “Esta tabela contém $numRegistros registros!\n<hr>\n“; 

if ($numRegistros!=0) {
while ($cadaLinha = mssql_fetch_array($consulta)) {
echo “$cadaLinha[$campo1] – $cadaLinha[$campo2]\n<br>\n“;
 }
}

?>



<div class="mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_01.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Garrafa Pet 2 Litros</h5>
    <p class="card-text">R$9,50</p>
    <a href="#" class="btn btn-dark btn_buy" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_02.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Garrafa Pet 1 Litro</h5>
    <p class="card-text">R$6,50</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_10.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 203 Litros</h5>
    <p class="card-text">R$1.724,20</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_11.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 223L</h5>
    <p class="card-text">R$1.884,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_05.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Sistema RalfBeer 10L</h5>
    <p class="card-text">R$95,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_06.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Sistema RalfBeer 15L</h5>
    <p class="card-text">R$130,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_12.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 235L</h5>
    <p class="card-text">R$1.980,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_13.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 420L</h5>
    <p class="card-text">R$3.460,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_07.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Chopeira Tradicional</h5>
    <p class="card-text">R$1.500,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_09.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 162L</h5>
    <p class="card-text">R$1.396,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/prod_15.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 1726L</h5>
    <p class="card-text">R$13.908,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
<div class=" mt-3 mb-4" style="float: left; margin-left : 15px">	
<div class="card" style="width: 18rem;">
  <img class="card-img-produtos" src="../images/imagem_8.jpg" alt="Carvao">
  <div class="card-body">
    <h5 class="card-title">Tanque 108L</h5>
    <p class="card-text">R$964,00</p>
    <a href="#" class="btn btn-dark" style="margin-left : 65px">Comprar</a>
  </div>
</div>
</div>
</div>

	


	
	<script src="../scripts/login/popper/popper.js"></script>
	<script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
	<script src="../scripts/login/select/select2.min.js"></script>
	<script src="../scripts/login/main.js"></script>
  <script src="../scripts/main.js"></script>

</body>

<footer>

 <?php include ('footer.php'); ?>
 
 </footer>

</html>