<?php
class BBDD {
    //put your code here
    private  static $hostname;
    private  static $usuario;
    private  static $password;
    private  static $basededatos;

    public  function __construct($hostname="localhost", $usuario="admin", $password="admin", $basededatos="EonLuxAntiques") {
        self::$hostname = $hostname;
        self::$usuario = $usuario;
        self::$password = $password;
        self::$basededatos = $basededatos;
    }

    public static function conectar()
    {
        return new mysqli("localhost", "admin", "admin", "productos");
    }
}

?>