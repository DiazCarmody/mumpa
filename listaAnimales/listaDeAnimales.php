<?php 
    require_once('../logica/main.php');
    $con = conectar();
        // Manejar la eliminación si se envía el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_animal'])) {
        $animalId = $_POST['animal_id'];
        $stmt = $con->prepare("DELETE FROM animales WHERE animal_id = :animal_id");
        $stmt->bindParam(':animal_id', $animalId, PDO::PARAM_INT);
        $stmt->execute();
        // Redirigir para evitar reenvío del formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    $query=$con->query("SELECT * FROM animales;");
    $query=$query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./listaAnimalesStyle.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 300,
        'GRAD' 0,
        'opsz' 24
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <title>Mumpa | Animales</title>
</head>
<body>

        <h1 class="titulo">Lista de animales</h1>

    <main>
            <?php foreach($query as $fila){
        echo'
        <div class="animalcard">
            
            <section class="sectionimg">
                <img src="../imgs/animales/'.$fila['animal_imagen'].'" alt="animal">
            </section>

            <section class="sectioninfo">

                    <header>
                        <h2><a style="text-decoration:none;" href="../vistas/voice.php?id='.$fila['animal_id'].'" onclick="enviarAnimalId('.$fila['animal_id'].')";>'.$fila['animal_nombre'].'</a></h2>
                        <button class="leeranimal"> <span class="material-symbols-outlined">volume_up</span> </button>

                        <button class="leeranimal dejardeleer"> <span class="material-symbols-outlined">no_sound</span> </button>

                    <form method="POST" style="display: inline;">
                        <input type="hidden" name="animal_id" value='.$fila['animal_id'].'>
                        <button type="submit" name="eliminar_animal" class="eliminaranimal" onclick="return confirm("¿Estás seguro de que quieres eliminar este animal?);">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </form>                        
                    </header>

                    <div class="animalcontenido">
                    <p>'.$fila['animal_desc'].'</p>
                    </div>
                
            </section> 
        </div>';
        #$fila['animal_id']=$_SESSION['id_animal'];
    } ?>
    </main>
<script>
    function enviarAnimalId(animalId) {
        // Puedes usar AJAX para enviar el valor
        // Aquí un ejemplo básico de cómo podrías hacerlo con Fetch API:
        fetch('../vistas/voice.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ animal_id: animalId })
        })
        .then(response => {
            // Manejar la respuesta si es necesario
            console.log('Datos enviados correctamente');
        })
        .catch(error => {
            console.error('Error al enviar datos:', error);
        });
    }
</script>
</body>
</html>