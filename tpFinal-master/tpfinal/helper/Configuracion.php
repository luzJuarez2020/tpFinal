<?php
session_start();

class Configuracion
{
    private $conexion;


    public static function createDatabase()
    {
        include_once "../helper/DataBase.php";
        $config = self::getConfigurationParameters();
        return new DataBase($config["servername"], $config["username"], $config["password"], $config["database"]);

    }


    public function queryInsert($sql){
        self::createDatabase()->queryInsert($sql);
    }


    private static function getConfigurationParameters()
    {
        return parse_ini_file("../config/config.ini");
    }

    public function inicioSesion($usuario,$contrasenia){
        include_once "../helper/DataBase.php";
        $resultado=self::createDatabase()->query("select * from usuario ");
        $user="";
        if(!empty($resultado)) {
            foreach ($resultado as $fila){
                if($fila["nombre"]==$usuario && $fila["contrasenia"]==$contrasenia){
                    $user = $fila['nombre']."-".$fila['contrasenia']."-".$fila['dni']."-".$fila['fecha_nac']."-".$fila['tipo_licencia']."-".$fila['viajes']."-".$fila['rol'];
                }
            }
        }
        $_SESSION["usuario"] = $user;

    }








    /*public static function cierreSesion(){

        if (isset($_SESSION["usuario"])) {
            session_destroy();
        }
        header("location:../view/index.php");
        exit();
    }
*/




}