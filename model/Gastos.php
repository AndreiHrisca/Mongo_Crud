<?php

class ListaDeGastos{
    private $lista;

    public function __construct(){
        $this -> lista = array();
    }



    public function obtenerEmpresas(){
        $this -> lista = empresasDAO::listar();
    }


    public function obtenerLista(){
        $rows = empresaDAO::listar();
        //echo print_r($rows);
        //$rows = $this->mongo->getContactos();
        foreach ($rows as $document) {
            $contacto = json_decode(json_encode($document),true);
            $id = implode($contacto["_id"]);
            array_push($this->lista,new Empresa($id, $contacto["nombre"],$contacto["CEO"],$contacto["precio"],$contacto["comentario"]) );
        }
    }


    public function imprimirEnTabla() {
        $txto = "<table class='tablita'><tr><th>Nombre</th><th>CEO</th><th>Precio</th><th>Comentario</th><th colspan='2'>Acciones</th></tr>";
        for($i = 0; $i<sizeof($this->lista);$i++){

            $txto .= $this->lista[$i]->imprimirEnTr();
        }

        $txto .= "</table>";

        return $txto;
    }

}


/**
 * Class Empresa.
 */
class Gastos {
    private $id;
    private $nombre;
    private $precio;

    /**
     * Gastos constructor.
     * @param $id
     * @param $nombre
     * @param $precio
     */
    public function __construct($id, $nombre, $precio)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }




    public function llenarObj($datos){
        $this->setNombre(addslashes($datos['nombre']));
        $this->setCEO(addslashes($datos['CEO']));
        $this->setPrecio(addslashes($datos['precio']));
        $this->setComentario(addslashes($datos['comentario']));
    }

    public function insertar(){
        empresaDAO::insertarEmpresa($this);
    }

    public function borrar(){
        emoresaDAO::eliminarContacto();
    }

    public function update(){
        emoresaDAO::actualizarContacto();
    }
    public function listar(){
        emoresaDAO::listar();
    }
    /*
    public function imprimirCabezeraTabla(){
        $txt = "";
        foreach ($this as $clave => $valor) {
            $txt .= "<tr>";
                $txt .= "<th>";
                $txt .= ucwords("Nombre empresa");
                $txt .= "</th>";
                $txt .= "<th>";
                $txt .= ucwords("CEO");
                $txt .= "</th>";
                $txt .= "<th>";
                $txt .= ucwords("Precio");
                $txt .= "</th>";
                $txt .= "<th>";
                $txt .= ucwords("Comentarios");
                $txt .= "</th>";
                $txt .= "<th>";
                $txt .= ucwords("Acciones");
                $txt .= "</th>";
            $txt .= "</tr>";

            return $txt;
        }
    }
    */
    public function obtenerEmpresas() {
        $rows = empresaDAO::listar();
        foreach ($rows as $document) {
            $empresa = json_decode(json_encode($document),true);
            $id = implode($empresa["_id"]);
            array_push($this->lista, new Contacto($id,$empresa["nombre"],$empresa["CEO"],$empresa["precio"],$empresa["comentario"]));
        }
    }
    public function imprimirEnTr() {
        $txt = "";

        foreach ($this as $clave => $valor) {

            $txt .= "<tr>";
            $txt .= "<td>";
            $txt .= ucwords($this->getNombre());
            $txt .= "</td>";
            $txt .= "<td>";
            $txt .= ucwords($this->getCEO());
            $txt .= "</td>";
            $txt .= "<td>";
            $txt .= $this->getPrecio();
            $txt .= "</td>";
            $txt .= "<td>";
            $txt .= ucwords($this->getComentario());
            $txt .= "</td>";
            $txt .= "<td>";
            $txt .= "<a href=''>Editar</a>";
            $txt .= "</td>";
            $txt .= "<td>";
            $txt .= "<a href=''>Borrar</a>";
            $txt .= "</td>";
            $txt .= "</tr>";
            return $txt;
        }

    }
}