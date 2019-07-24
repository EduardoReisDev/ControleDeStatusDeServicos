<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.png">
	<script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/cpainel.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-sacale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Painel | SuasVendas.com</title>
</head>
<body>
	<nav class="navbar navbar-light">
  		<a class="navbar-brand" href="#">
    		<img src="https://www.suasvendas.com/images/logo.svg" width="250" height="35" class="d-inline-block align-top" alt="">
  		</a>
	</nav>

	<div class="corpo">
		<div class="container">
			<!--titulo-->
			<br>
			<h1 class="titulo">Painel de Controle</h1>
			<br>
			<!--titulo-->

			<!--tabela de status-->
			<table class="table table-striped table-bordered table-sm">
			  	<thead>
				    <tr>
				      	<th scope="col">Serviços</th>
				      	<th scope="col">Status</th>
				    </tr>
			  	</thead>
			  	<tbody>
			    	<tr>
			      		<td scope="row">Importação de dados</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			    	<tr>
			      		<td scope="row">Exportação de dados</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			    	<tr>
			      		<td scope="row">Conversão em PDF (Relatórios)</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			    	<tr>
			      		<td scope="row">SuasVendas Offline</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			    	<tr>
			      		<td scope="row">NF-e e NFC-e</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			    	<tr>
			      		<td scope="row">SV Representantes</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			    	<tr>
			      		<td scope="row">SV Empresas</td>
			      		<td>
			      			<select class="form-control">
			      				<option value="disponivel">Disponível</option>
			      				<option value="instavel">Instável</option>
			      				<option value="indisponivel">Indisponível</option>
			      			</select>
			      		</td>
			    	</tr>
			  	</tbody>
			</table>
			<button type="button" class="btn btn-success"><i class="fas fa-save"> </i> Pronto</button>
			<br><br>
		  	<!--tabela de status-->



		  	<!--Notas de atualização-->
		  	<h2 class="titulo2">Notas de atualização</h2>
		  	<br>
		  	<form>
		  		<textarea rows="8" placeholder="Digite aqui..." class="form-control"></textarea>
		  		<br>
		  		<button type="button" class="btn btn-success"><i class="fas fa-save"> </i> Pronto</button>
		  	</form>
		</div>
		<br>
	</div>


	  	<!--Rodapé-->
	  	<div class="rodape">
	  		<div class="row justify-content-around">
    			<div class="col-4">
      				<img src="https://www.suasvendas.com/images/logo.svg" width="150" height="20" class="d-inline-block align-top" alt="">
    			</div>
    			<div class="col-4">
    				<a style="color: white" href="https://www.ajuda.suasvendas.com">Canais de Ajuda</a>   |   <a style="color: white" href="https://www.blog.suasvendas.com">Blog</a>   |   Acesso Administrativo
    			</div>
    		</div>
    	</div>
	  	<!--Rodapé-->
</body>
</html>