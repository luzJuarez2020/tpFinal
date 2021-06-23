<?php


class Configuracion
{

    public static function createDatabase()
    {
        include_once "DataBase.php";
        $config = self::getConfigurationParameters();
        return new DataBase($config["servername"], $config["username"], $config["password"], $config["database"]);

    }

    private static function getConfigurationParameters()
    {
        return parse_ini_file("config.ini");
    }

    public static function inicioSesion($usuario,$contrasenia,$resultado){
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $rol=0;
        if (!empty($resultado) ) {
            foreach ($resultado as $fila) {
                if ( $fila["rol"]!=null && $usuario == $fila["nombre"] && $contrasenia == $fila["contrasenia"]) {
                    $rol = $fila["rol"];
                    $_SESSION['usuario']=$fila["rol"];
                }
            }
        }
        return $rol;
    }

    public static function cierreSesion(){

        if (isset($_SESSION["usuario"])) {
            session_destroy();
        }
        header("location:../view/index.php");
        exit();
    }





}