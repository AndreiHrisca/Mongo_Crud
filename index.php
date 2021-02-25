<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="./view/css/cookies.css">
    <!--<link rel="stylesheet" href="./view/css/indexStyle.css">-->
    <link rel="stylesheet" href="./view/css/indexMain.css">

    <!-- Importaciones -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
    
    <title>MongoDB Crud</title>
</head>
<body>

  <nav class="navbar">
    <a href="#">MongoDB</a>
    <button class="switch" id="switch">
      <span><i class="fas fa-sun"></i></span>
      <span><i class="fas fa-moon"></i></span>
    </button>
  </nav>

    
  <main>
      <section>
        <div class="bloque">
          <a href="./view/listaEmpresas.php">Empresas</a>
        </div>

        <div class="bloque">
          <a href="./view/listaGastos.php">Gastos</a>
        </div>

        <div class="bloque">
          <a href="./view/contacto.php">Contacto</a>
        </div>
      </section>
  </main>
  
   
  <footer>
    <small>&copy; Copyright 2020. Todos los derechos reservados.</small>
  </footer>
    
  <div id="barraaceptacion">
    <div class="inner">
      Solicitamos su permiso para obtener datos estad&iacute;sticos de su navegaci&oacute;n en esta web, en cumplimiento del Real Decreto-ley 13/2012. Si contin&uacute;a navegando consideramos que acepta el uso de cookies.
      <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> | 
      <a href="http://politicadecookies.com" target="_blank" class="info">M&aacute;s informaci&oacute;n</a>
    </div>
  </div>

  <!-- JavaScript Links -->
  <script src="./view/js/themes.js"></script> 
</body>
</html>