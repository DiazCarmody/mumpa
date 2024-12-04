<?php 
require_once ('../logica/conexion.php');
$animales= "SELECT * FROM animales";
$eje= mysqli_query($conexion,$animales);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variantes</title>
</head>
<body>
    <?php while($asu=mysqli_fetch_array($eje)){ ?>
      <a href="voice.php?id=<?php echo $asu['animal_id']; ?>">
        <?php echo $asu['animal_nombre']?>
      </a>
  <?php }  ?>
</body>
</html>