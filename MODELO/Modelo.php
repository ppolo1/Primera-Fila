<?php

require_once('BBDD.php');
class Modelo{

    /*
    Función para obtener toda la lista de la base de datos
    */
    static public function consultaProductos()
    {
        $lista=array();
        $conexion= BBDD::conectar();
                    
        $result = $conexion->query("SELECT nombre, precio, foto FROM productos");


        while ($row = $result->fetch_array(MYSQLI_ASSOC))
            {
            array_push($lista, new Automovil($row["nombre"], $row["precio"], $row["foto"]));
                
            }
            return $lista;
        
        
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

}

?>