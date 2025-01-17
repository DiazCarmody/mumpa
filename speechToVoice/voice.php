<?php 
include ('../logica/conexion.php');
$id = $_GET['id'];
$info ="SELECT * FROM animales WHERE animal_id=$id";
$eje = mysqli_query($conexion,$info);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha512-cLuyDTDg9CSseBSFWNd4wkEaZ0TBEpclX0zD3D6HjI19pO39M58AgJ1SjHp6c7ZOp0/OCRcC2BCvvySU9KJaGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="script.js"></script>
    <script defer src="qr.js"></script>
    <title>Texto a voz</title>
    <link rel="stylesheet" type="text/css" href="voice.css">
    <script src="https://kit.fontawesome.com/69bd2e7207.js" crossorigin="anonymous"></script>
</head>
<body>
    <form class="form">
        <select id="languages"></select>
        <select id="container_voices" hidden></select>
        <?php   
            while($asu=mysqli_fetch_array($eje)){ ?>
                <p id="from-text">
                    <?php echo $asu['animal_nombre']?> 
                    <br>
                    <?php echo $asu['animal_desc'];?>
                </p>
        <?php } ?>
        <input type="text" id="to-text" hidden>
        <button type="button" id="btn">Hablar <i class="fa-solid fa-volume-high"></i></button> 
        <button type="button" id="btn-2">Parar <i class="fa-solid fa-volume-xmark"></i></button>
    </form>
</body>
</html>