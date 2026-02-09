<?php
class Database {
    private static $host = "bihel4lxwhpgwrl8bu7b-mysql.services.clever-cloud.com";
    private static $db_name = "bihel4lxwhpgwrl8bu7b";
    private static $user = "uttslqt4mxe5gvpu";
    private static $password = "iBYr3TGXPBgRZkBVXf6v";

    public static function conectar() {
        try {
            $conexion = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name . ";charset=utf8", self::$user, self::$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

}
