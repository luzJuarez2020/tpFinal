<?php


class Configuracion
{

    public static function createDatabase()
    {
        include_once "DataBase.php";
        $config = self::getConfigurationParameters();
        return new DataBase($config["servername"], $config["username"], $config["password"], $config["dbname"]);

    }

    private static function getConfigurationParameters()
    {
        return parse_ini_file("config.ini");
    }
}