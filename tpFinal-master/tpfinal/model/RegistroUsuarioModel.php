<?php
include_once("../helper/Configuracion.php");

class registroUsuarioModel
{
    private $conexion;

    public function __construct(){
        $this->conexion = new Configuracion();
    }

    public function executeRegistarUsuario($nombre,$contrasenia,$dni,$fecha_nac,$email){
        $sql = "INSERT INTO usuario('nombre','contrasenia','dni','fecha_nac','email','tipo_licencia','viajes','rol')
                values('$nombre','$contrasenia','$dni','$fecha_nac','$email',null,null,null,null)";
        $this->conexion->queryInsert($sql);


    }

}


?>