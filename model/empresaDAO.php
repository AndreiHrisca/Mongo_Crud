<?php


class empresaDAO {
    private $conexion;

    /**
     * empresaDAO constructor.
     * @param $conexion
     */







    public static function insertarEmpresa($empresa){
        $connection= new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(["nombre"=>$empresa->getNombre(), "CEO"=>$empresa->getCEO(), "precio"=>$empresa->getPrecio(), "comentario"=>$empresa->getComentario()]);
        $connection->executeBulkWrite("Empresa.Empresas", $bulk);
    }



    /**
     * @param $empresa
     */
  public function actualizarEmpresa($empresa){
        $connection= new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;
        $filter = ['_id' => new MongoDB\BSON\ObjectId($empresa["id"])];
        $collation = ['$set' => ['nombre' => $empresa["nombre"], 'CEO' => $empresa["CEO"], 'precio' => $empresa["precio"], 'comentario' => $empresa["comentario"]]];
        $bulk->update($filter, $collation);
        $connection->executeBulkWrite('Empresa.Empresas', $bulk);
  }




    /**
     * @param $id
     */
    public function eliminarEmpresa($id){
        $connection= new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $bulk = new MongoDB\Driver\BulkWrite;
        $filter = ['_id' => new MongoDB\BSON\ObjectId($id)];
        $bulk->delete($filter, ['limit' => 0]);
        $connection->executeBulkWrite('Empresa.Empresas', $bulk);
    }


    /** getEmpresas
     * @return \MongoDB\Driver\Cursor
     * @throws \MongoDB\Driver\Exception\Exception
     */
    public function listar(){
        $connection= new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $filter = [];
        $query = new MongoDB\Driver\Query($filter);
        return $connection->executeQuery("Empresa.Empresas", $query);
    }


    public  function  obtenerPorId($id) {
        $connection= new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $filter = ['_id' => new MongoDB\BSON\ObjectId($id)];
        $query = new MongoDB\Driver\Query($filter);
        return $connection->executeQuery("Empresa.Empresas", $query);

    }
}