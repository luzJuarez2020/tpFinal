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
        $hash = md5( rand(0,1000) );
        $nombre=$_POST['nombre'];
        $contrasenia=$_POST['contra'];
        $password=md5($contrasenia);
        $dni=$_POST['dni'];
        $fecha_nac=$_POST['fecha_nac'];
        $email=$_POST['email'];

        $this->registroModel->execute($nombre,$password,$dni,$fecha_nac,$email,$hash);
        $this->registroModel->envioEmailConfirmacion($email,$hash,$nombre,$password);
        echo $this->render->render("view/inicio.php");
    }


    public function verificacion(){
        $email=$_GET['email'];
        $hash=$_GET['hash'];
        $this->registroModel->verificacionHash($email,$hash);
        echo $this->render->render("view/inicio.php");

    }



}