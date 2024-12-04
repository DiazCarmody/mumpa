<?php require_once('../logica/main.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/estilo_login.css">
	<style>
    .estiloError {
    color: red;
    animation: estiloError 5s linear forwards;
    -webkit-animation: estiloError 5s linear forwards;      
    }

    @keyframes estiloError {
    0% { opacity: 0; }
    2% { opacity: 1; }
    98% { opacity: 1; }
    100% { opacity: 0; }
    }

    @-webkit-keyframes estiloError {

    0% { opacity: 0; }
    2% { opacity: 1; }
    98% { opacity: 1; }
    100% { opacity: 0; }

    }
</style>
	<title>Login</title>
</head>
<body>
	<div class="cont_form">
	<form class="form" action="../logica/usuario_ingresar.php" method="POST" >
		<img src="../images/page_icon.svg" alt="">
		<h1>MUMPA</h1>
		<input id="entrada" class="input" placeholder="Ingrese su nombre de usuario" type="text" name="username_login">
		<input id="entrada" class="input" placeholder="Ingrese su contraseña" type="password" name="clave_login">
		<input id="boton" class="input" type="submit" name="">
		¿No posees una cuenta? <a style="text-decoration: none;" href="signin.php">Regístrate</a>
		<?php
			if(isset($_POST['username_login']) && isset($_POST['clave_login'])){
				require_once('../logica/main.php');
				require_once('../logica/usuario_ingresar.php');
			} 
		?>
	</form>
	</div>
</body>
</html>