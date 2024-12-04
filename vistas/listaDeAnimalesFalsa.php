<?php 
    require_once('../logica/main.php');
    $con = conectar();
    $consulta=$con->query("SELECT * FROM animales;");
    $consulta=$consulta->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./listaAnimalesStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de animales</title>
</head>
<body>
    <h1>Lista de animales</h1>
    <div class="contenedor-lista">
        <div class="seccion-animal">
            <h1>Animal</h1>
            <?php foreach ($consulta as $rows) {
            echo'<p>'.$rows['animal_nombre'].'</p>';}?>
        </div>
        <div class="seccion-descripcion">
            <h1>Descripción</h1>
            <?php foreach($consulta as $rows){
            echo'<p>'.$rows['animal_desc'].'</p>';}?>
        </div>
    </div>
</body>
</html>