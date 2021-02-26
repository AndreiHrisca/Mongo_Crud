<?php

class ListaDeEmpresas{
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
class Empresa { //extends ArrayObject
    private $id;
    private $nombre;
    private $CEO;
    private $precio;
    private $comentario;

    /**
     * Empresa constructor.
     * @param $nombre
     * @param $CEO
     * @param $precio
     * @param $comentario
     */
    public function __construct($id="", $nombre="", $CEO="", $precio="", $comentario="")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->CEO = $CEO;
        $this->precio = $precio;
        $this->comentario = $comentario;
    }

    /**
     * @return mixed|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * @return mixed|string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed|string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed|string
     */
    public function getCEO()
    {
        return $this->CEO;
    }

    /**
     * @param mixed|string $CEO
     */
    public function setCEO($CEO)
    {
        $this->CEO = $CEO;
    }

    /**
     * @return mixed|string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed|string $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed|string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @param mixed|string $comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
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

    public function borrar($id){
        empresaDAO::eliminarEmpresa($id);
    }

    public function update($empresa){
        empresaDAO::actualizarEmpresa($empresa);
    }
    public function listar(){
        empresaDAO::listar();
    }
    
    public function obtenerEmpresas() {
        $rows = empresaDAO::listar();
        foreach ($rows as $document) {
            $empresa = json_decode(json_encode($document),true);
            $id = implode($empresa["_id"]);
            array_push($this->lista, new Contacto($id,$empresa["nombre"],$empresa["CEO"],$empresa["precio"],$empresa["comentario"]));
        }
    }
    public  function obtenerId($id) {

        $rows = empresaDAO::obtenerPorId($id);
        foreach ($rows as $document) {
            $empresa = json_decode(json_encode($document),true);
            $id = implode($empresa["_id"]);
            $resultado = new Empresa($id,$empresa["nombre"],$empresa["CEO"],$empresa["precio"],$empresa["comentario"]);
        }
        return $resultado;
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
                $txt .= "<a class='btnEditar' href='formEmpresa.php?id=".$this->getId()."'>Editar</a>";
                $txt .= "</td>";
                $txt .= "<td>";
                $txt .= "<a class='btnBorrar' href='javascript:borrarSeleccion(\"".$this->getId()."\")'>Borrar</a>";
                $txt .= "</td>";
            $txt .= "</tr>";
            return $txt;
        }

    }

}