<?php
require "../model/Empresa.php";
require "../model/empresaDAO.php";

$listaDatos = new ListaDeEmpresas();
$listaDatos->obtenerLista();

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./js/ajax.js"></script>
</head>
<body>
    <?php include './includes/header.php';?>
    <h1>Lista empresas</h1>
    <a href="formEmpresa.php" title="Formulario empresa">Añadir empresas</a>
    <div id="lista">
    <?php echo $listaDatos->imprimirEnTabla();?>
    </div>
</body>
</html>