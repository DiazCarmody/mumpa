<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <link rel="stylesheet" href="./subirAnimalstyle.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario subir animales</title>
</head>
<body>
    <div class="contenedorformulario">
        <form action="../logica/subirAnimales.php" method="POST" class="FormularioAjax" enctype="multipart/form-data">
            <h1>Formulario para <br> subir un animal</h1>
            <div class="form-rest"></div>
            <input type="text" name="nombre" placeholder="Nombre">

            <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción"></textarea>
            <label>imagen</label>
            <input type="file" name="animal_foto">
            <input type="submit" class="submit" value="SUBIR ANIMAL">
        </form>
    </div>


</body>
<script src="../logica/ajax.js"></script>
</html>