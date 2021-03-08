<?php
require "../model/Empresa.php";
require "../model/empresaDAO.php";

$listaDatos = new ListaDeEmpresas();
$listaDatos->obtenerLista();

?>