<?php


class supervisorController
{
    private $supModel;
    private $render;

    public function __construct($supModel, $render){
        $this->supModel = $supModel;
        $this->render = $render;
    }


    public function execute()
    {
        if (isset($_SESSION['usuario'])) {
            $data["supervisor"] = true;
            $data["viajesCurso"] = $this->supModel->getViajesActivos();
            $data["viajesProx"] = $this->supModel->getViajesProximos();
            echo $this->render->render("view/supervisorView.php", $data);
        } else {
            header("Location:/inicio");
            exit;
        }
    }

    public function executeModificacionVehiculo()
    {
        $dni = $_GET["dni"];
        $data["usuarioDni"] = $this->admiModel->getUsuarioPorDni($dni);
        if (isset($_SESSION['usuario'])) {
            echo $this->render->render("view/modificacionUsuario.php", $data);
        } else {
            header("Location:/inicio");
            exit;
        }
    }





}




