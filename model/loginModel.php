<?php


class loginModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }


    public function validarUsuario($usuario,$clave){
        $sql = "SELECT rol FROM usuario where nombre = '" .$usuario . "' and contrasenia= '".$clave."'";
        return $this->database->query($sql);
    }



}