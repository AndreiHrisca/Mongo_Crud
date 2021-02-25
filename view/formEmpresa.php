<?php
require "../model/Empresa.php";
require "../model/empresaDAO.php";
require "../controller/conexion.php";

//crear objeto
$empresa1 = New Empresa();
if(isset($_POST) && !empty($_POST)){
    if (!empty($_POST['id'])){
        $empresa1->update($_POST);
    }
    else {
        $empresa1->llenarObj($_POST);
        $empresa1->insertar($empresa1);
    }
    //Prubas----------------------
    //var_dump($empresa1);
    //var_dump($_POST);
    //$empresa1->insertar($_POST);

    header('location:listaEmpresas.php');
    //condiciones
}
$empresa2 = new  Empresa();
if(isset($_GET['id']) && !empty($_GET['id'])){
    $empresa2 = $empresa2->obtenerId($_GET['id']);
    //echo print_r($empresa2);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/ajax.js" type="text/javascript"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <title>Document</title>
</head>
<body>
    <a href="listaEmpresas.php" title="Lista de empresas">Atras</a>
    <h1>Formulario Empresas</h1>




    <form name="Empresas" action="" method="post" onsubmit="formValid()" enctype="multipart/form-data"> <!--  -->
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

</body>
</html>