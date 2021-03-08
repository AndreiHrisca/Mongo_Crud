<?php
require "../controller/listaController.php";


?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crud MongoDB</title>
    <meta name="description" content="Crud con mongoDB y php. MVC">
    <meta name="keywords" content="PHP, MongoDB, CRUD, SCSS">
    <meta name="author" content="Andrei Ionut Hrisca">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="./js/ajax.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/favicon.png" sizes="16x16" type="image/ico">
    <!-- Estilos -->
    <link rel="stylesheet" href="./css/indexMain.css">
    <!-- Importaciones -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
</head>
<body>
    <?php include './includes/header.php';?>
    <div class="caja">
        <h3>Lista empresas</h3>
        <h3 id="btnADD"><a href="formEmpresa.php" title="Formulario empresa">Añadir empresa</a></h3>
    </div>
    
    <div id="lista">
        <?php echo $listaDatos->imprimirEnTabla();?>
    </div>

    <!-- JavaScript Links -->
  <script src="./js/themes.js"></script>
</body>
</html>