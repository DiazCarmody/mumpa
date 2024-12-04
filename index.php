<?php 
    require_once('./logica/main.php');
    include('./logica/sessions.php');
    $conexion=conectar();
    $listaAnimales=$conexion->query("SELECT * FROM animales;");
    $listaAnimales=$listaAnimales->fetchAll();
    if(isset($_SESSION['id_usuario'])){
    $id_usuario=$_SESSION['id_usuario'];
    }  
?>
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>


  <!-- METADATOS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Museo">
    <meta name="description" content="La página del museo MUMPA">
    <meta name="Author" content="EEST N°2">
    
  <!-- ICONOS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="icon" href="./images/favicon.PNG">

  <!-- STYLE -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/loading.css">
    <link rel="stylesheet" href="./styles/slider.css">

  <!-- SCRIPT DARKMODE -->
    <script src="./scripts/darkmodeScroll.js"></script>

    <script>

      const storageTheme = localStorage.getItem('theme');
      const systemColorScheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

      const newTheme = storageTheme ?? systemColorScheme;

      document.documentElement.setAttribute('data-theme', newTheme);

    </script>

  <!-- SCRIPT LOAD -->
    <script>

      window.onload = function(){
      var contenedor = document.getElementById('contenedor_carga');

      contenedor.style.visibility = 'hidden';
      contenedor.style.opacity = '0';
      document.body.style.overflow = 'auto';
      }

    </script>

  <title>Mumpa</title>

</head>

<body>

<div id="contenedor_carga">

		<span id="carga"></span>
    <p class="texto">Cargando...</p>

</div>

	</div>

<!-- ///////////////////////////// HEADER ///////////////////////////// -->

  <header>
    
    <input type="checkbox" name="" id="open_menu">

    <a class="navoption home"> 
      <img src="./images/favicon.PNG" alt="logotipo"> 
    </a>
    
    <label for="open_menu" class="header_open_nav_button" role="button">
      <span class="material-symbols-outlined menu">menu</span>
    </label> 

    <label for="toggler" class="darkmode">
      <span class="material-symbols-outlined" id="lightmodeicon">light_mode</span> 
      <span class="material-symbols-outlined" id="darkmodeicon">dark_mode</span>
    </label>
    <input type="checkbox" name="" id="toggler" class="toggler is-not-in-dropdown"> 

    <!-- BOTONES DE NAVEGACIÓN -->

    <nav class="nav">
        <ul>
    
          <li > <a href="./listaAnimales/listaDeAnimales.php"> Animales </a> </li>
          <?php
          if(isset($_SESSION['id_usuario'])){
          if(!empty($id_usuario) || $id_usuario==1){
            echo'
            <li> <a href="./vistas/form_Subir_Animales.php"> Ingresar animales </a> </li>
            ';
          }
        }?>
                  <?php
          if(isset($_SESSION['id_usuario'])){
          if(!empty($id_usuario) || $id_usuario==1){
            echo'
            <li > <a href="./speechToVoice/qr.html"> <span class="material-symbols-outlined">qr_code_scanner</span>  </a> </li>
            ';
          }
        }?>
        <?php if(!isset($_SESSION['id_usuario'])){
          if(empty($id_usuario)){
            echo'
            <li> <a href="./vistas/login.php">Iniciar Sesión</a> </li>
            ';
          }
        }
          ?>
        </ul>
    </nav>

  </header>

  <main>

  <!-- ///////////////////////////// SLIDER SECTION ///////////////////////////// -->
  <section class="main-header">
      <div class="main-header-info">
        <img src="./images/page_icon.svg" alt="">
        <h1>MUSEO MUMPA</h1>
        <h2>Laguna de gómez | Junín</h2>
      </div>

      <!--image slider start-->
      <div class="slider">
        <div class="slides">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <!--radio buttons end-->
          <!--slide images start-->
          <div class="slide first">
            <img src="./images/museo/museo1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="./images/museo/museo2.jpg" alt="">
          </div>
          <div class="slide">
            <img src="./images/museo/museo3.jpg" alt="">
          </div>
          <div class="slide">
            <img src="./images/museo/museo4.jpg" alt="">
          </div>
          <!--slide images end-->
          <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
          <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
      </div>
      <!--image slider end-->

      <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
      </script>

      <div class="shape-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" fill=var(--background-color)>
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
      </div>
    </section>

    <section class="listaDeAnimales">
    </section>

    <footer>
      <section>
        <div>
          <h1>Contacto</h1>
          <p> <span class="material-symbols-outlined">phone_iphone</span> <strong>Visitas guiadas:</strong> +54 9 236 426-1817</p>
          <p> <span class="material-symbols-outlined">mail</span> <strong>Email:</strong> mumpa@junin.gob.ar</p>
        </div>

        <div>
            <h1>Horarios</h1>
            <p>Viernes de <strong>15:30</strong> a <strong>17:30</strong> </p>
            <p>Sabado de <strong>16:00</strong> a <strong>19:00</strong> </p>
            <p>Domingo de <strong>15:30</strong> a <strong>18:30</strong> </p>
        </div>

        <div>
          <h1>Ubicación</h1>
          <p> <span class="material-symbols-outlined">location_on</span> Argentina Buenos Aires, Junin</p>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13126.627145643919!2d-61.0187154!3d-34.6633697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b8bf39069fc785%3A0x86d210961d59c188!2sMuseo%20Municipal%20de%20Paleontolog%C3%ADa%20Legado%20del%20Salado!5e0!3m2!1ses-419!2sar!4v1711402276726!5m2!1ses-419!2sar" width="530" height="300"></iframe>

      </section>

      <section>
          <p>Hecho por la EEST N°2 | 2024</p>
      </section>
    </footer>

  </main>

</body>
</html>