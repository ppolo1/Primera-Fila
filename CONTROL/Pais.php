<?php

/**
 * Description of Pais
 *
 * @author Primera Fila
 */
class Pais {
    
    private $nombre ;
    private $prefijo ;
    
    public function __construct($nombre, $prefijo) {
        
        $this->nombre = $nombre;
        $this->prefijo = $prefijo;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getPrefijo() {
        return $this->prefijo;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setPrefijo($prefijo): void {
        $this->prefijo = $prefijo;
    }



}
