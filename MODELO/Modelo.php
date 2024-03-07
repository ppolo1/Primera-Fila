<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Description of Modelo
 *
 * @author Primera Fila
 */
class Modelo {
    
    // Métodos para SACAR los datos de la BBDD (SELECT)
    
    /**
     * Método que devuelve una array con los CLIENTES de la BBDD.
     * 
     * @return null No retorna nada (null) si no se ha podido acceder.
     */
     public static function consultarClientes() {
        $conexion = BBDD::conectar();
        $sql = "SELECT * FROM cliente";
        $sql = $conexion->prepare($sql);

        if ($sql->execute()) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                header('HTTP/1.1 200 Cliente seleccionado');
                return $result;
            }
        } else {
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }

        return null;
    }
    
    
    /**
     * Método que devuelve una array con los PRODUCTOS de la BBDD.
     * 
     * @return null No retorna nada (null) si no se ha podido acceder.
     */
     public static function consultarProductos() {
        $conexion = BBDD::conectar();
        $sql = "SELECT * FROM productos";
        $sql = $conexion->prepare($sql);

        if ($sql->execute()) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                header('HTTP/1.1 200 Producto seleccionado');
                return $result;
            }
        } else {
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }

        return null;
    }
    
    
    /**
     * Método que devuelve una array con los PAÍSES de la BBDD.
     * 
     * @return null No retorna nada (null) si no se ha podido acceder.
     */
     public static function consultarPaises() {
        $conexion = BBDD::conectar();
        $sql = "SELECT nombre FROM pais";
        $sql = $conexion->prepare($sql);

        if ($sql->execute()) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                header('HTTP/1.1 200 País seleccionado');
                return $result;
            }
        } else {
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }

        return null;
    }
    
    
    /**
     * Método que devuelve una array con los PREFIJOS de la BBDD.
     * 
     * @return null No retorna nada (null) si no se ha podido acceder.
     */
     public static function consultarPrefijos() {
        $conexion = BBDD::conectar();
        $sql = "SELECT prefijo FROM pais";
        $sql = $conexion->prepare($sql);

        if ($sql->execute()) {
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                header('HTTP/1.1 200 Prefijo seleccionado');
                return $result;
            }
        } else {
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }

        return null;
    }
    
    
    // Métodos para INSERTAR los datos de la BBDD (INSERT)


     /**
     * Método que añade un CLIENTE a la BBDD.
     * 
     * @return null No devuelve nada (null) si no se ha hecho la conexión.
     */
    public static function aniadirCliente($json) { // ¿DEBERÍA RECIBIR ALGÚN PARÁMETRO? El JSON o un objeto de tipo Cliente
         
        $array = json_decode($json, true) ;
        
        $conexion = BBDD::conectar();
        
        // HABRÍA QUE AÑADIR ALGÚN TIPO DE FILTRO PARA QUE COMPRUEBE SI LOS DATOS YA EXISTEN
        
        $sql = $conexion->prepare("INSERT INTO `cliente` (`nombre`, `apellido_1`, `apellido_2`, `contrasena`, `dni`, `genero`, 
        `fecha_nac`, `direccion`, `pais`, `telefono`, `prefijo`, `email`, `subscripcion`, `imagen`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ") ;

//        $nombre = "Pepito" ;
//        $apellido_1 = "Perez" ;
//        $apellido_2 = "Perez" ;
//        $dni = "53585573A" ;
//        $genero = "H" ;
//        $direccion = "Calle Falsa 123" ;
//        $pais = "Espana" ;
//        $fecha_nac = "28-02-2014" ;
//        $telefono = "666666666" ;
//        $prefijo = "34" ;
//        $email = "PepitoPerez@p.com" ;
//        $contrasena = "12345678" ;
//        $subscripcion = false ;
//        $imagen = "Windows/xampp/htdocs/enonluxantiques/VISTA/img/Avatar.png" ;
        
        $nombre = $array['nombre'] ;
        $apellido1 = $array['apellido1'] ;
        $apellido2 = $array['apellido2'] ;
        $contrasena = $array['contrasena'] ;
        $dni = $array['dni'] ;
        $genero = $array['genero'] ;
        $fechaNac = $array['fechaNac'] ;
        $direccion = $array['direccion'] ;
        $pais = $array['pais'] ;
        $telefono = $array['telefono'] ;
        $prefijo = $array['prefijo'] ;
        $email = $array['email'] ;
        $subscripcion = $array['subscripcion'] ;
        $imagen = $array['imagen'] ;
        
        
        
        $sql->bindParam(1, $nombre, PDO::PARAM_STR) ;
        $sql->bindParam(2, $apellido1, PDO::PARAM_STR) ;
        $sql->bindParam(3, $apellido2, PDO::PARAM_STR) ;
        $sql->bindParam(4, $contrasena, PDO::PARAM_STR) ;
        $sql->bindParam(5, $dni, PDO::PARAM_STR) ;
        $sql->bindParam(6, $genero, PDO::PARAM_STR) ;
        $sql->bindParam(7, $fechaNac, PDO::PARAM_STR) ;
        $sql->bindParam(8, $direccion, PDO::PARAM_STR) ;
        $sql->bindParam(9, $pais, PDO::PARAM_STR) ;
        $sql->bindParam(10, $telefono, PDO::PARAM_INT) ;
        $sql->bindParam(11, $prefijo, PDO::PARAM_STR) ;
        $sql->bindParam(12, $email, PDO::PARAM_STR) ;
        $sql->bindParam(13, $subscripcion, PDO::PARAM_BOOL) ;
        $sql->bindParam(14, $imagen, PDO::PARAM_STR) ;

        
        if ($sql->execute()) {
            
            header('HTTP/1.1 200 Cliente añadido');
            return 1;
        }
         else {
             
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }
        
        return null ;
    }
    
    // --------------------- PARA PRUEBAS ------------------------------
    
     public static function aniadirProducto($json) { 
         
        $array = json_decode($json, true) ;
         
        $conexion = BBDD::conectar() ;
        
        $sql = $conexion->prepare("INSERT INTO `productos` (`nombre`, `descripcion`, `precio`, `imagen`, `stock`) 
        VALUES (?, ?, ?, ?, ?) ") ;

        $nombre = $array['nombre'] ;
        $descripcion = $array['descripcion'] ;
        $precio = $array['precio'] ;
        $imagen = $array['imagen'] ;
        $stock = $array['stock'] ;
        
        $sql->bindParam(1, $nombre, PDO::PARAM_STR) ;
        $sql->bindParam(2, $descripcion, PDO::PARAM_STR) ;
        $sql->bindParam(3, $precio, PDO::PARAM_STR) ;
        $sql->bindParam(4, $imagen, PDO::PARAM_STR) ;
        $sql->bindParam(5, $stock, PDO::PARAM_BOOL) ;

        
        if ($sql->execute()) {
            
            header('HTTP/1.1 200 Producto añadido');
            return 1;
        }
         else {
             
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }
        
        return null ;
    }
    
    // Métodos para ELIMINAR los datos de la BBDD (DELETE)
    
    
    /**
     * Método que elimina un producto concreto de la BBDD.
     * 
     * @param type $id Id del producto
     * @return null No devuelve nada (null) si no se ha hecho la conexión.
     */
     public static function eliminarProductos($id) {
         
        $conexion = BBDD::conectar();
        
        $sql = $conexion->prepare("DELETE FROM productos WHERE id_producto = :id") ;
        
        $sql->bindParam(':id', $id, PDO::PARAM_STR);  
        
        if ($sql->execute()) {
            
            header('HTTP/1.1 200 Producto eliminado');
            return 1;
        }
         else {
             
            header('HTTP/1.1 404 Error con sentencia');
            return -1;
        }
        
        return null ;
    }
}