<?php 
//Archivo de constantes para parametros de conexion
require('SETTINGS.php');

class Conexion {

    public static function conectar(){
        $pdo = new PDO(SERVIDOR, USUARIO_SERVER, CLAVE_SERVER);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

?>