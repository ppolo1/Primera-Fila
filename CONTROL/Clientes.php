<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Description of Clientes
 *
 * @author Primera Fila
 */
class Clientes { // ¿DEBERÍA LLEVAR EL IMPLEMENTS JSONSERIALIZABLE?
    
    /*
     * En caso de llevar el implements JsonSserializable dará un error que se 
     * solventa añadiendo mixed en el método de jsonSerialize().
     * 
     * Lo mismo se aplica para la clase Productos.
     */
    
    private $nombre ;
    private $apellido1 ;
    private $apellido2 ;
    private $contrasena ;
    private $dni ;
    private $genero ;
    private $fechaNac ;
    private $direccion ;
    private $pais ;
    private $telefono ;
    private $prefijo ;
    private $email ;
    private $suscripcion ;
    private $imagen ;
    
    
    public function __construct($nombre, $apellido1, $apellido2, $contrasena, $dni, $genero, $fechaNac, $direccion, $pais, $telefono, $prefijo, $email, $suscripcion, $imagen) {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->contrasena = $contrasena;
        $this->dni = $dni;
        $this->genero = $genero;
        $this->fecha_nac = $fechaNac;
        $this->direccion = $direccion;
        $this->pais = $pais;
        $this->telefono = $telefono;
        $this->prefijo = $prefijo;
        $this->email = $email;
        $this->suscripcion = $suscripcion;
        $this->imagen = $imagen;
    }
    
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getPrefijo() {
        return $this->prefijo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSuscripcion() {
        return $this->suscripcion;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1): void {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2): void {
        $this->apellido2 = $apellido2;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function setDni($dni): void {
        $this->dni = $dni;
    }

    public function setGenero($genero): void {
        $this->genero = $genero;
    }

    public function setFecha_nac($fecha_nac): void {
        $this->fecha_nac = $fecha_nac;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setPais($pais): void {
        $this->pais = $pais;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setPrefijo($prefijo): void {
        $this->prefijo = $prefijo;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSuscripcion($suscripcion): void {
        $this->suscripcion = $suscripcion;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }
    

    public function jsonSerialize(){
   
        return [
            'Nombre' => $this->nombre,
            'Apellido1' => $this->apellido1,
            'Apellido2' => $this->apellido2,
            'DNI' => $this->dni,
            'Género' => $this->genero,
            'Fecha de nacimiento' => $this->fechaNac,
            'Dirección' => $this->direccion,
            'País' => $this->pais,
            'Prefijo' => $this->prefijo,
            'Teléfono' => $this->telefono,
            'Email' => $this->email,
            'Contraseña' => $this->contrasena,
            'Suscripción' => $this->suscripcion,
            'Imagen' => $this->imagen
        ];        
    
    }

}
