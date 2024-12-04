<?php 
require_once ('./main.php');
$username=limpiarString($_POST['username']);
$email=limpiarString($_POST['email']);
$contrasena1=limpiarString($_POST['clave1']);
$contrasena2=limpiarString($_POST['clave2']);
// $tipo = limpiarString($_POST['tipo']);
$tipo=1;
//Verifico que los campos no estén vacíos
if ($username == "" || $email == "" || $contrasena1 == "" || $contrasena2 == "") {
	echo '
	<div>
		<strong>ERROR</strong><br>
		DEBE LLENAR TODOS LOS CAMPOS
	</div>';
	exit();
}
//Verifico que los campos no estén vacíos
//Verifico que el nombre de usuario no se repita
$check_user=conectar();
$check_user=$check_user->query("SELECT usuario_username FROM usuarios WHERE usuario_username = '$username'");
if($check_user->rowCount()>0){
	echo '
	<div>
	<strong>ERROR</strong>
	ESTE NOMBRE DE USUARIO YA EXISTE	
	</div> 
	';
	exit();
}
$check_user=null;
//Verifico que el nombre de usuario no se repita
//Verifico contraseñas
if ($contrasena1!=$contrasena2) {
	echo '
	<div>
	<strong>ERROR</strong>
	LAS CONTRASEÑAS NO COINCIDEN	
	</div> 
	';
	exit();
}else{
	$contrasenaFinal=encriptar($contrasena1);
}
//Verifico contraseñas
//Registro al usuario
$registrarUsuario=conectar();
$registrarUsuario=$registrarUsuario->prepare("INSERT INTO usuarios() VALUES (null,:email,:username,:contrasenaFinal,:tipo);");
$datosMarcadores=[
	":email" => $email,
	":username" => $username,
	":contrasenaFinal" => $contrasenaFinal,
	":tipo"=>$tipo
];
$registrarUsuario->execute($datosMarcadores);
if ($registrarUsuario->rowCount()==1) {
	echo '
	<div>
		<strong>¡USUARIO REGISTRADO!!</strong><br>
		EL USUARIO FUE REGISTRADO CON ÉXITO.
	</div>';
	header("Location:../index.php");
	exit();
} else {
	echo '
	<div>
		<strong>¡ERROR!</strong><br>
		NO SE PUEDO REGISTRAR EL USUARIO, INTENTE NUEVAMENTE.
	</div>';
	exit();
}
$registrarUsuario=null;

//Registro al usuario
?>