<?php 
    require_once('../logica/main.php');
    $con = mysqli_connect('localhost','root','','mumpa');
    $query = "SELECT * FROM `animales` WHERE 1";
    $ejecutar = mysqli_query($con,$query);



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
            <p>Triceratops</p>
        </div>
        <div class="seccion-descripcion">
            <h1>Descripción</h1>
            <p>es un animal muy tranquilo</p>
        </div>
    </div>
</body>
</html>