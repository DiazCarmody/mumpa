<?php
//Función de conexión a la base de datos.
function conectar(){
  $pdo = new PDO('mysql:host=localhost;dbname=mumpa','root','');
  return $pdo;
}
// }  Mumpasitioweb!0800
//2da función de conexión a la base de datos.
/*function conectar(){
  $pdo = new PDO('mysql:host=localhost;dbname=id22176090_mumpa','id22176090_admin','Mumpasitioweb!0800');
  return $pdo;
}*/
//2da función de conexión a la base de datos.
//Función para limpiar una cadena
function limpiarString($cadena){
	$cadena=trim($cadena);
	$cadena=stripslashes($cadena);
	$cadena=str_ireplace("<script>", "", $cadena);
	$cadena=str_ireplace("</script>", "", $cadena);
	$cadena=str_ireplace("<script src>", "", $cadena);
	$cadena=str_ireplace("<script type=>", "", $cadena);
	$cadena=str_ireplace("SELECT * FROM", "", $cadena);
	$cadena=str_ireplace("DELETE FROM", "", $cadena);
	$cadena=str_ireplace("DROP TABLE", "", $cadena);
	$cadena=str_ireplace("DROP DATABASE", "", $cadena);
	$cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
	$cadena=str_ireplace("SHOW TABLES", "", $cadena);
	$cadena=str_ireplace("SHOW DATABASES", "", $cadena);
	$cadena=str_ireplace("<?php", "", $cadena);
	$cadena=str_ireplace("?>", "", $cadena);
	$cadena=str_ireplace("--", "", $cadena);
	$cadena=str_ireplace("^", "", $cadena);
	$cadena=str_ireplace("<", "", $cadena);
	$cadena=str_ireplace("[", "", $cadena);
	$cadena=str_ireplace("]", "", $cadena);
	$cadena=str_ireplace("==", "", $cadena);
	$cadena=str_ireplace(";", "", $cadena);
	$cadena=str_ireplace("::", "", $cadena);
	$cadena=str_ireplace("OR", "", $cadena);
	$cadena=trim($cadena);
	$cadena=stripslashes($cadena); 
	return $cadena;
}
//Función para limpiar una cadena
//Función para renombrar imágenes
function renombrarFotos($nombreFoto){
	$nombreFoto=str_ireplace(" ","_","$nombreFoto");
	$nombreFoto=str_ireplace("/","_","$nombreFoto");
	$nombreFoto=str_ireplace("#","_","$nombreFoto");
	$nombreFoto=str_ireplace("-","_","$nombreFoto");
	$nombreFoto=str_ireplace("$","_","$nombreFoto");
	$nombreFoto=str_ireplace(".","_","$nombreFoto");
	$nombreFoto=str_ireplace(",","_","$nombreFoto");
	$nombreFoto = $nombreFoto."_".rand(0,100);
	return $nombreFoto;
}
//Función para renombrar imágenes
//Función para encriptar contraseña
function encriptar($clave){
	$claveDefinitiva=password_hash($clave, PASSWORD_BCRYPT,['cost'=>10]);
	return $claveDefinitiva;
}
//prueba de la función
// echo $contrasena;
//prueba
//Función para encriptar contraseña

?>