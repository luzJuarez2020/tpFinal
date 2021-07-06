<?php


class RegistroUsuarioController{
    private $model;

    public function __construct(){
        include_once("../model/RegistroUsuarioModel.php");
        $this->model = new RegistroUsuarioModel();
    }

    public function execute()
    {
        include_once("../view/registro.php");
    }

    public function executeRegistarUsuario($nombre,$contrasenia,$dni,$fecha_nac,$email){

        $this->model->executeRegistarUsuario($nombre,$contrasenia,$dni,$fecha_nac,$email);



    }

}