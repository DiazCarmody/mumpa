<?php 
require_once ('./main.php');
require_once('./sessions.php');
$username = limpiarString($_POST['username_login']);
$contrasena = limpiarString($_POST['clave_login']);
if ($username == "" || $contrasena == "") {
 	echo "
 	<div>
 	<span class=estiloError>DEBE LLENAR TODOS LOS CAMPOS</span>
 	</div>";
	exit(); 
}
$check_user=conectar();
$check_user=$check_user->query("SELECT * FROM usuarios WHERE usuario_username = '$username';");
if ($check_user->rowCount()==1) {
	$check_user=$check_user->fetch();
	if ($check_user['usuario_username']==$username && password_verify($contrasena,$check_user['usuario_clave'])) {
		$_SESSION['id']=$check_user['usuario_id'];
		$_SESSION['username']=$check_user['usuario_username'];
		$_SESSION['tipo']=$check_user['usuario_tipo'];
		if (headers_sent()) {
			echo "<script> window.location.href'../logica/index.php';</script>";
		} else {
			header("Location:../index.php");
		}
	} else {
		echo '
			<div>
			<strong>ERROR</strong><br>
			USUARIO O CONTRASEÑA INCORRECTOS
			</div>';
	}
	
} else {
	echo '
		<div>
		<strong>ERROR</strong><br>
		USUARIO O CONTRASEÑA INCORRECTOS
		</div>';		
}
$check_user=null;


?>