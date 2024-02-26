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
        $sql = "SELECT * FROM pais";
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
        $sql = "SELECT * FROM prefijo";
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
    
    
    // Métodos para ELIMINAR los datos de la BBDD (DELETE)
    
    
    /**
     * Método que elimina un producto concreto de la BBDD.
     * 
     * @param type $id Id del producto
     * @return null No devuelve nada (null) si no se ha hecho la conexión.
     */
     public static function eliminarProductos($id) {
        $conexion = BBDD::conectar();
        $sql = "DELETE * FROM productos WHERE id=:id";
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
        
        return null ;
    }
}