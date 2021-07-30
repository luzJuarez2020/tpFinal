<?php


class choferController
{
    private $choferModel;
    private $render;

    public function __construct($choferModel, $render){
        $this->choferModel = $choferModel;
        $this->render = $render;
    }

    public function execute(){
        $user=$_SESSION['user'];
        $dni=$user[0]["dni"];

        if (isset($_SESSION['usuario'])) {
            $data["chofer"]=true;
            if ($this->choferModel->verificarLicencia($dni)==null){
                echo $this->perfilChofer();
            }else {
                $data["viajeActual"] = $this->choferModel->getViajeActual($dni);
                $data["viajes"] = $this->choferModel->getViajes($dni);
                $data["chofer"] = true;
                echo $this->render->render("view/choferView.php", $data);
            }
        }else{
            header("Location:/inicio");
            exit;
        }
    }


    public function perfilChofer(){
        $user=$_SESSION['user'];
        $dni=$user[0]["dni"];
        $data["user"]=$_SESSION['user'];
        $data["userChofer"]=$this->choferModel->perfilChofer($dni);
        $data["chofer"] = true;
        echo $this->render->render("view/perfilView.php", $data);
    }

    public function cargarLicencia(){
        $dni= $_GET["dni"];
        $tipo_licencia=$_POST['nroLicencia'];
        $this->choferModel->insertLicencia($dni,$tipo_licencia);
        $this->execute();
    }






}