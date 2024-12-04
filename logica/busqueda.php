<?php 
require_once ('./main.php');
$busqueda=$_POST['busqueda'];
$consultaBusqueda=conectar();
$consultaBusqueda=$consultaBusqueda->query('SELECT * FROM USUARIOS WHERE usuario_username LIKE '%$busqueda%' ORDER BY usuario_username asc;');
 ?>