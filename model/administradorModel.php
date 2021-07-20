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


    public function getUsuarioPorDni($dni){
        $sql = "SELECT * FROM usuario WHERE dni='$dni'";
        return $this->database->query($sql);
    }



    public function borrarUsuario($dni){
        return $this->database->execute("DELETE FROM usuario WHERE usuario.dni='$dni'");
    }




}