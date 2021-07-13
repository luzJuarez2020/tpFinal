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

}