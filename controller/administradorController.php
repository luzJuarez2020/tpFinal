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
        $data["usuario"] = $this->admiModel->getUsuarios();
        echo $this->render->render("view/administradorView.php", $data);
    }

    public function executeModRol(){
        $dni = $_GET["dni"];
        $data["dni"]=$dni;
        echo $this->render->render("view/modificacionUsuario.php", $data);
    }


    public function modificarRol(){
        $rol=$_POST["roles"];
        $dni = $_GET["dni"];
        $this->admiModel->asignarRol($rol,$dni);
        echo $this->execute();
    }

}