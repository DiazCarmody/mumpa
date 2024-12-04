<?php 
include ('../logica/main.php');
$id = $_GET['id'];
$con=conectar();
$info ="SELECT * FROM `animales` WHERE `animal_id` = '$id'";
$eje = $con->query($info);
if($eje->rowCount()>0){
    $eje=$eje->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha512-cLuyDTDg9CSseBSFWNd4wkEaZ0TBEpclX0zD3D6HjI19pO39M58AgJ1SjHp6c7ZOp0/OCRcC2BCvvySU9KJaGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="qr.js"></script>
    <title>Texto a voz</title>
    <link rel="stylesheet" type="text/css" href="voice.css">
    <script src="https://kit.fontawesome.com/69bd2e7207.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <form class="form">
        <?php   
            foreach($eje as $asu): ?>
                <img id="img_dinosaur" src="<?php echo "../imgs/animales/" . $asu['animal_imagen']; ?>">
                <p id="text-description">
                    <?php echo $asu['animal_nombre'] . '<br>' ?> 
                    <?php echo $asu['animal_desc']; ?>
                </p>
                <p id="text-description-english">
                    <?php echo $asu['animal_nombre'] . '<br>' ?> 
                    <?php echo $asu['animal_desc_ingles']; ?>
                </p>
        <?php endforeach; ?>
        <select id="languages">
            <option value="Español">Español</option>
            <option value="Inglés">Inglés</option>
        </select>
        <button type="button" id="btn" onclick="Speak();">Hablar <i class="fa-solid fa-volume-high"></i></button> 
        <button type="button" id="btn-2" onclick="Stop();">Parar <i class="fa-solid fa-volume-xmark"></i></button>
    </form>
    <script>
        let languages = document.getElementById('languages');
        let p_es = document.getElementById('text-description');
        let p_en = document.getElementById('text-description-english');

        if(languages.value == 'Español'){
            p_en.style.display = 'none';
        }

        languages.addEventListener('change', () => {
            if(languages.value == 'Español'){
                p_es.style.display = 'block';
                p_en.style.display = 'none';
            } else {
                p_en.style.display = 'block';
                p_es.style.display = 'none';
            }
        });

        function speak_es(text){
            var utterance = new SpeechSynthesisUtterance(text);
            utterance.rate = 1;
            utterance.pitch = 1; 
            utterance.lang = 'es-ES'; 
            window.speechSynthesis.speak(utterance);
        }

        function speak_en(text){
            var utterance = new SpeechSynthesisUtterance(text);
            utterance.rate = 1;
            utterance.pitch = 1; 
            utterance.lang = 'en-US'; 
            window.speechSynthesis.speak(utterance);
        }

        function Speak(){
            if(getComputedStyle(p_es).display == 'block'){
                speak_es(p_es.textContent);
            } else if(getComputedStyle(p_en).display == 'block'){
                speak_en(p_en.textContent);
            }
        }

        function Stop(){
            speechSynthesis.cancel();
        }
    </script>
</body>
</html>