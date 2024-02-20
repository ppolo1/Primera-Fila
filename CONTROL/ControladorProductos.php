<?php
/*
Controlador para cada uno de los productos
*/
/**
* @author Primera fila
*/

class ControllerProducto {
    
    public static function obtenerProducto(){
        
        if ($id==null) {
            
            return json_encode(Modelo::JSONconsultaProductos()); // Hay que cambiar la consulta por la nuestra
        }
    }

    public static function cambiarPrecio($id,$pvp) {
        Modelo::modificarPrecio($id,$pvp);
    }
}

?>