<?php


class administradorModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario ");
    }


    public function asignarRol($rol,$dni){
        $sql = "UPDATE usuario SET rol='$rol' WHERE usuario.dni='$dni'";
        return $this->database->execute($sql);
    }





}