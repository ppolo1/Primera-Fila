<?php

require_once('BBDD.php');
class Modelo{

    /*
    Función para obtener toda la lista de la base de datos
    */
    static public function consultaProductos($id)
    {
        
        $conexion= BBDD::conectar();

        $sql=("SELECT nombre, precio, foto FROM productos WHERE id = ?");
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam("i",$id);

        if($stmt->execute()){
            $result = $sql->fetchAll(PDO::FECTH_ASSOC);
            if($result){
                header('HTTP/1.1 200 OK');
                return $result;
            }
        } else {
            header('HTTP/1.1 404 Error con sentencia');
        }
    }

    /**
     * Función para obtener toda la lista de la base de datos
     */
    static public function consultaProductos(){

        $conexion = BBDD::conectar() ;
        $sql = "SELECT * FROM productos" ;
        $stmt = $conexion->prepare($sql);

        if ($sql->execute()) 
        {
            $result = $sql->fetchAll(PDO::FECTH_ASSOC) ;

            if ($result) {

                header('HTTP/1.1 200 Producto encontrado') ;
                return $result ;
            }
            else {

                header('HTTP/1.1 404 Error con sentencia') ;
                return -1 ;
            }

            return null ;
        }
    }

    /*
    Función para crear el JSON de cliente
    */
    static public function JSONconsultaProductos()
    {
        $Json=self::consultaProductos();
        $aux=array();
        foreach ($Json as $row)
        {
            array_push($aux, $row->jsonSerialize());
        }
        return $aux;
    }

    /*
    Función para modificar el precio
    */
    static public function modificarPrecio($nombre, $pvp) {
        $conexion = BBDD::conectar();
        $result = $conexion->query("UPDATE productos SET precio=precio +". $pvp. "where nombre='". $nombre."'");
        
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    /*
    Función para eleminar un producto
    */

    public static function eliminarProducto($id) {
        $conexion = BBDD::conectar();
        $sql = "Delete * FROM producto where id=:id";
        $sql->bindParam(':id', $id, PDO::PARAM_STR);  
        
        if ($sql->execute()) {
            $result = $sql->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                header('HTTP/1.1 200 Producto eliminado');
                return $result;
            }
        } else {
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }
        
    }
}

?>