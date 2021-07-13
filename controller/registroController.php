<?php


class registroController
{
    private $registroModel;
    private $render;

    public function __construct($registroModel,$render){
        $this->registroModel = $registroModel;
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/registroView.php");
    }


    public function registrar(){
        $nombre=$_POST['nombre'];
        $contrasenia=$_POST['contra'];
        $dni=$_POST['dni'];
        $fecha_nac=$_POST['fecha_nac'];
        $email=$_POST['email'];

        $this->registroModel->execute($nombre,$contrasenia,$dni,$fecha_nac,$email);
        echo $this->render->render("view/inicio.php");
    }



}