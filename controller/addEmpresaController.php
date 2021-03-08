<?php
require "../model/Empresa.php";
require "../model/empresaDAO.php";
//require "../controller/conexion.php";

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
}
$empresa2 = new  Empresa();
if(isset($_GET['id']) && !empty($_GET['id'])){
    $empresa2 = $empresa2->obtenerId($_GET['id']);
}

?>