<?php

class administradorController
{
    private $admiModel;
    private $render;

    public function __construct($admiModel, $render){
        $this->admiModel = $admiModel;
        $this->render = $render;
    }

    public function execute(){
        if (isset($_SESSION['usuario'])) {
            $data["usuarios"] = $this->admiModel->getUsuarios();
            $data["admin"]=true;
            echo $this->render->render("view/administradorView.php", $data);
        }else{
            header("Location:/inicio");
            exit;
        }
    }

    public function executeModificacion(){
        $dni = $_GET["dni"];
        $data["usuarioDni"]=$this->admiModel->getUsuarioPorDni($dni);
        if (isset($_SESSION['usuario'])) {
            echo $this->render->render("view/modificacionUsuario.php", $data);
        }else{
            header("Location:/inicio");
            exit;
        }
    }

    public function borrarUsuario(){
        $dni = $_GET["dni"];
        if ($this->admiModel->borrarUsuario($dni)) {
            header("Location:/administrador");
            exit;
        }
    }


    public function modificarDatos(){
        $rol=$_POST["roles"];
        $email=$_POST["email"];
        $dni = $_GET["dni"];

        $this->admiModel->modificarEmail($email,$dni);
        $this->admiModel->modificarRol($rol,$dni);
        header("Location:/administrador");
        exit;

    }

}