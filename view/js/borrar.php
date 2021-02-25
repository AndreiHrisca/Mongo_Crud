<?php
include "../../model/empresaDAO.php";
include "../../model/Empresa.php";

$var1 = $_GET['id'];
$empresa = new Empresa();
$empresa->borrar($var1);

?>