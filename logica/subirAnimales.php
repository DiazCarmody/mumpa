<?php
require_once('./main.php');
$conexion=conectar();
$nombre_animal=limpiarString($_POST['nombre']);
$descripcion_animal=limpiarString($_POST['descripcion']);
$consulta=$conexion;
$animales_comprobar=$conexion;
$animales_comprobar=$animales_comprobar->query("SELECT * FROM animales WHERE animal_nombre = '$nombre_animal'");
//directorio de imagenes
$img_dir="../imgs/animales/"; 
//compruebo si la imagen fue seleccionada
if ($_FILES['animal_foto']['name']!="" && $_FILES['animal_foto']['size']>0) {
    //crear directorio
    if (!file_exists($img_dir)) {
        if(!mkdir($img_dir,0777)){
            echo'ERROR AL CREAR EL DIRECTORIO';
            exit();
        }
    }
    if (mime_content_type($_FILES['animal_foto']['tmp_name'])!="image/jpeg" &&
        mime_content_type($_FILES['animal_foto']['tmp_name'])!="image/png") {
            echo "LA IMAGEN SELECCIONADA COINCIDE CON UN FORMATO NO PERMITIDO";
            exit();
        }
        ##verifico el peso de la imagen
    if (($_FILES['animal_foto']['size']/1024)>3072) {
        echo'
        ERROR'.'<br>'.'
        LA IMAGEN ES MUY PESADA
        ';
    }
    switch (mime_content_type($_FILES['animal_foto']['tmp_name'])) {
        case 'image/jpeg':
            $img_ext=".jpg";
            break;
        case 'image/png':
            $img_ext=".png";
            break;
    }
    chmod($img_dir, 0777);
    $img_nombre=renombrarFotos($nombre_animal);
    $foto=$img_nombre.$img_ext;
    ##mover imagen al directorio
    if (!move_uploaded_file($_FILES['animal_foto']['tmp_name'], $img_dir.$foto)) {
        echo"
        ¡ERROR!, NO ES POSIBLE SUBIR LA IMAGEN AHORA 
        ";
        exit(); 
    }
}else{
    $foto="";
}
if(empty($nombre_animal) || empty($descripcion_animal)){
    echo'
    <div>
        DEBE LLENAR TODOS LOS CAMPOS 
     </div> 
    ';
    exit();
}
if ($animales_comprobar->rowCount()>0) {
    echo'
    <div>
        ESTE ANIMAL YA SE ENCUENTRA REGISTRADO. 
     </div> 
    ';
    exit();
}else{
    $consulta=$consulta->prepare("INSERT INTO animales(animal_id, animal_nombre, animal_desc, animal_imagen) VALUES (NULL,:nombre_animal,:descripcion_animal, :foto)");
    $ejecutar=[
        ":nombre_animal"=>$nombre_animal,
        ":descripcion_animal"=>$descripcion_animal,
        ":foto"=>$foto
    ];
    $consulta->execute($ejecutar);
}
if($consulta->rowCount()==1){
    echo'
    <div>
        ANIMAL REGISTRADO CON ÉXITO. 
     </div> 
    ';
}
$animales_comprobar=null;
?>