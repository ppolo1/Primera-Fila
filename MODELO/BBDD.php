<?php

class BBDD {

    public static function conectar() {
        $datosconexion = self::sacarDatosJson();
        try{
           $connection = new PDO("mysql:host=$datosconexion[server];dbname=$datosconexion[dbname]",$datosconexion["user"],$datosconexion["password"]);
           $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           return $connection;
       } catch(PDOException $e){
           die("ERROR: ".$e->getMessage());
       }
    }

    public static function sacarDatosJson() {
        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion . "/" . "config.json");
        return json_decode($jsondata, true);
    }

}