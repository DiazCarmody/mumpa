<?php require_once('../logica/main.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/estilo_signin.css">
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
	<title>Sign In</title>
</head>
<body>
  <div class="cont_form">
	<form class="form FormularioAjax" action="../logica/usuario_registrar.php" method="POST">
		<div class="form-rest"></div>
    <img src="../images/page_icon.svg" alt="">
    <h1>MUMPA</h1>
		<input id="entrada" class="input" placeholder="Nombre de usuario" type="text" name="username" required>
		<input id="entrada" class="input" placeholder="Email" type="email" name="email" required>
		<input id="entrada" class="input" placeholder="Contraseña" type="password" name="clave1" required>
		<input id="entrada" class="input" placeholder="Repetir contraseña" type="password" name="clave2"  required>
		<input id="boton" class="input" type="submit" name="" pattern="">
	</form>
  </div>
</body>
<script src="ajax.js"></script>
</html>