<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Description of Clientes
 *
 * @author Primera Fila
 */
class Clientes {
    
    private $nombre ;
    private $apellido1 ;
    private $apellido2 ;
    private $dni ;
    private $sexo ;
    private $fechNac ;
    private $direccion ;
    private $pais ;
    private $prefijo ;
    private $telefono ;
    private $email ;
    private $contrasena ;
    private $notificaciones ;
    private $revista ;
    
    public function __construct($nombre, $apellido1, $apellido2, $dni, $sexo, $fechNac, $direccion, $pais, $prefijo, $telefono, $email, $contrasena, $notificaciones, $revista) {
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->fechNac = $fechNac;
        $this->direccion = $direccion;
        $this->pais = $pais;
        $this->prefijo = $prefijo;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->notificaciones = $notificaciones;
        $this->revista = $revista;
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

    public function getDni() {
        return $this->dni;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getFechNac() {
        return $this->fechNac;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getPais() {
        return $this->pais;
    }

    public function getPrefijo() {
        return $this->prefijo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getNotificaciones() {
        return $this->notificaciones;
    }

    public function getRevista() {
        return $this->revista;
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

    public function setDni($dni): void {
        $this->dni = $dni;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setFechNac($fechNac): void {
        $this->fechNac = $fechNac;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setPais($pais): void {
        $this->pais = $pais;
    }

    public function setPrefijo($prefijo): void {
        $this->prefijo = $prefijo;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function setNotificaciones($notificaciones): void {
        $this->notificaciones = $notificaciones;
    }

    public function setRevista($revista): void {
        $this->revista = $revista;
    }

    public function jsonSerialize(){
   
        return [
            'Nombre' => $this->nombre,
            'Apellido1' => $this->apellido1,
            'Apellido2' => $this->apellido2,
            'DNI' => $this->dni,
            'Sexo' => $this->sexo,
            'Fecha de nacimiento' => $this->fechNac,
            'Dirección' => $this->direccion,
            'País' => $this->pais,
            'Prefijo' => $this->prefijo,
            'Teléfono' => $this->telefono,
            'Email' => $this->email,
            'Contraseña' => $this->contrasena,
            'Notificaciones' => $this->notificaciones,
            'Revista' => $this->revista
        ];        
    
    }

}
