<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.png">
	<script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-sacale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Login | SuasVendas.com</title>
</head>
<body>
	<nav class="navbar navbar-light">
  		<a class="navbar-brand" href="#">
    		<img src="https://www.suasvendas.com/images/logo.svg" width="250" height="35" class="d-inline-block align-top" alt="">
  		</a>
	</nav>

	<div id="site">
		<div class="container">
			<!--Login-->
			<form method="POST" action="validaLogin.php">
				<div class="container">
					<div class="form-group" id="formulario">
						<br>
							<h1 class="titulo">Acesso Administrativo</h1>
						<br>
						<input class="form-control" type="text" name="email" placeholder="Digite seu email" required="true"><br>
						<input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required="true"><br>
						<button type="submit" class="btn btn-success form-control"><i class="fas fa-sign-in-alt"> </i> Pronto!</button>
					</div>
				</div>
			</form>
			<!--Login-->
			<!--Erro-->
			<p class="text-center text-danger">
				<?php if (isset($_SESSION['loginErro'])) {
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
					}
				?>
			</p>
			<!--Erro-->
		</div>
	</div>
</body>
</html>