<?php
function obtenerBaseDeDatos()
{
    $host = "127.0.0.1";
    $puerto = "27017";
    $usuario = rawurlencode("root"); //rawurlencode codifica estilo URL de acuerdo al RFC 3986.
    $pass = rawurlencode(""); // Más info ( www.php.net/manual/es/funcion.rawurlencode.php )
    $nombreBD = "agenda";

    # Crea algo como mongodb://parzibyte:hunter2@127.0.0.1:27017/agenda
    $cadenaConexion = sprintf("mongodb://%s:%s@%s:%s/%s", $usuario, $pass, $host, $puerto, $nombreBD);
    $cliente = new MongoDB\Client($cadenaConexion);
    return $cliente->selectDatabase($nombreBD); // "selectDatabase" selecciona una base de datos pero sin importar el nombre de la misma.
}