<?php
require "../controller/addEmpresaController.php";

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

    <script src="./js/ajax.js" type="text/javascript"></script>
    <script src="./js/validation.js" type="text/javascript"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/favicon.png" sizes="16x16" type="image/ico">
    <!-- Estilos -->
    <link rel="stylesheet" href="./css/indexMain.css">
    <link rel="stylesheet" href="./css/formStyle.css">

</head>
<body>
    <a href="listaEmpresas.php" title="Lista de empresas">Atras</a>
    <h3>Formulario empresas</h3>

    <!-- HIDDEN / DISPLAY NONE -->
    <!-- class= tox-notification tox-notification--in tox-notification--warning -->
    <div id="ContenedorForm">
        <form name="Empresas" method="post" onsubmit="validar()" enctype="multipart/form-data"> <!--  -->
        <legend>Añade nuevas empresas</legend>
            <input type="hidden" name="id" value="<?php echo $empresa2->getId(); ?>">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Introduce tu nombre" value="<?php echo $empresa2->getNombre(); ?>" >

            <label for="CEO">CEO</label>
            <input type="text" name="CEO" placeholder="CEO"  value="<?php echo $empresa2->getCEO() ?>">

            <label for="precio">Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo $empresa2->getPrecio() ?>">

            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario"><?php echo $empresa2->getComentario() ?></textarea>

            <input type="submit" value="Añadir">

        </form>

    </div>
    
    <script src="./js/themes.js"></script>
</body>
</html>