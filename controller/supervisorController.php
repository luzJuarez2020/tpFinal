<?php


class supervisorController
{
    private $supModel;
    private $render;

    public function __construct($supModel, $render){
        $this->supModel = $supModel;
        $this->render = $render;
    }

    public function execute(){
        if (isset($_SESSION['usuario'])) {
            echo $this->render->render("view/supervisorView.php");
        }else{
            header("Location:/inicio");
            exit;
        }
    }

    public function proformaVista(){
        $data["numero"] =lpad;
        echo $this->render->render("view/crearProforma.php", $data);
    }


    public function crearProforma(){

    }


}