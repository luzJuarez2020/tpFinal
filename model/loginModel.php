<?php


class loginModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }


    public function validarUsuario($nombre,$clave){
        $sql = "SELECT * FROM usuario";
        return $this->database->verificarUsuario($sql,$nombre,$clave);
    }





}