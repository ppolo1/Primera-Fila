<?php

class Producto implements JSONSerializable{

    private $nombre;
    private $precio;
    private $img;

    public function __construct($nombre, $precio, $img){

    }

    /*
    Getters y Setters
    */
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setPrecio($precio): void{
        $this->precio = $precio;
    }

    public function getImg(){
        return $this->img;
    }

    public function setNombre($img): void{
        $this->img = $img;
    }


    public function jsonSerialize(): mixed {
        return [
            'nombre' => $this->nombre,
            'precio' => $this->precio,
            'img' => $this->img
        ];
        
    }
}

?>