<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="./view/css/indexStyle.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
    
    <title>MongoDB Crud</title>
</head>
<body>
   
<header class="navbar">
      <p>MongoDB</p>
      <ul>
        <li>
          <label class="switch-5">
            <input type="checkbox" id="toggleTheme" />
            <span class="slider-5"></span>
          </label>
        </li>
      </ul>
    </header>

    <main>
        <section>
            <ul>
                <li><a href="./view/listaEmpresas.php">Empresas</a></li>
                <li><a href="./view/listaGastos.php">Gastos</a></li>
                <li><a href="./view/contacto.php">Contacto</a></li>
            </ul>
        </section>
    </main>
   
   
    <footer>
        <small>&copy; Copyright 2020. Todos los derechos reservados.</small>
    </footer>
    <script src="./view/js/themeToggle.js"></script>
</body>
</html>