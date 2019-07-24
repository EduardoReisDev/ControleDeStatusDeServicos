<?php
	session_start();
	if ((isset($_POST['email'])) && (isset($_POST['senha']))){
		//$usuario = mysqli_real_escape_string ($conn, $_POST['email']);
		//$senha = mysqli_real_escape_string ($conn, $_POST['senha']);
		if (($senha == "svstatus2019") && ($email == "cpainel@suasvendas.com"))  {
			header("Location: cpainel.php");
		}

		else{
			$_SESSION['loginErro'] = "Usuário ou senha inválida";
			header("Location: login.php");
		}
	}

	else{
		$_SESSION['loginErro'] = "Usuário ou senha inválida";
		header("Location: login.php");
	}
?>