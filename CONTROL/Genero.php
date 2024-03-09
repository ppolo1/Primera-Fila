<?php

/**
 * Description of Genero
 *
 * @author Primera Fila
 */
class Genero {
    
    private $tipo ;
    
    public function __construct($tipo) {
        
        $this->tipo = $tipo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }



}
