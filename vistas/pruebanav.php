<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
	<link rel="stylesheet" href="./estilonav.css">
	<!--fuente custom-->    
  <style> @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500&display=swap'); </style>

  <!--   ICONOS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 200,
      'GRAD' 0,
      'opsz' 48
    }
    </style>

  <!-- SCRIPTS -->
  <script src="./dropdown.js"></script>
</head>
<body class="body">
      
    <!--TopNav-->

  <nav class="barranav">

    <div class="navcontent">

      <ul>

          <li class="navinicio"> <a href=""> <img src="./img/icono.png" alt="icono mumpa" width="30px" height="30px" class="mumpalogo"> </a> </li>

          <li> <a href="#" class="bwi">Animales
                <span class="material-symbols-outlined navicon">expand_more</span> 
              </a> 

            <ul id="dropdown">
              <li> <a href="./listaAnimales/listaDeAnimales.php"> Lista de animales</a> </li>
              <li> <a href="./vistas/form_Subir_Animales.php"> Ingresar animal</a> </li>
            </ul>
          
          </li>

          <li> <a href="" class="aft">Opcion</a> </li>

          <li> <a href="" class="aft">Opcion</a> </li>

          <li> <a href="#" class="bwi">Opcion
                <span class="material-symbols-outlined navicon">expand_more</span> 
              </a> 

            <ul id="dropdown">
              <li> <a href="#"> Opcion</a> </li>
              <li> <a href="#"> Opcion</a> </li>
            </ul>
          
          </li>
      </ul>
    
    </div>

  </nav>

    <!--Fin Topnav-->
	
</body>
</html>