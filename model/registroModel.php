<?php


class registroModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }


    public function execute($nombre,$contrasenia,$dni,$fecha_nac,$email){
        $sql = "INSERT INTO usuario(nombre,contrasenia,dni,fecha_nac,email,tipo_licencia,viajes,rol)
                value('$nombre','$contrasenia','$dni','$fecha_nac','$email',null,null,null)";
        $this->database->execute($sql);
    }





}