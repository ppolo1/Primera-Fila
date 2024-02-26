<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Description of Productos
 *
 * @author Primera Fila
 */
class Productos {
    
    private $idProducto ;
    private $nombre ;
    private $descripcion ;
    private $precio ;
    private $imagen ;
    private $stock ;
    
    public function __construct($nombre, $descripcion, $precio, $imagen, $stock, $idProducto = null) 
    {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagen = $imagen;
        $this->stock = $stock;
    }

    
    public function getIdProducto() {
        return $this->idProducto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setIdProducto($idProducto): void {
        $this->idProducto = $idProducto;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setStock($stock): void {
        $this->stock = $stock;
    }

    
    public function jsonSerialize(){
   
        return [
            'Nombre' => $this->nombre,
            'Descripcion' => $this->descripcion,
            'Precio' => $this->precio,
            'Imagen' => $this->imagen,
            'Id' => $this-> idProducto,
            'Stock' => $this-> stock
        ];        
    
    }
}
