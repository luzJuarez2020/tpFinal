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
            $data["usuario"] = $this->admiModel->getUsuarios();
            echo $this->render->render("view/administradorView.php", $data);
        }else{
            header("Location:/inicio");
            exit;
        }
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