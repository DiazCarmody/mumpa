<?php 
require_once('../logica/main.php');
$consulta=conectar();
$consulta=$consulta->query("SELECT * FROM USUARIOS WHERE 1 ORDER BY usuario_username asc;");
 ?>