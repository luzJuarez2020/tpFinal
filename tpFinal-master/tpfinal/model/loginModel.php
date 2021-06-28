<?php
include_once("../helper/Configuracion.php");

class loginModel
{
    private $conexion;

    public function __construct(){
        $this->conexion = new Configuracion();
    }

    public function validarUsuario($usuario,$clave){
        $this->conexion->inicioSesion($usuario,$clave);
    }




}