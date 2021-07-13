<?php


class loginController{
    private $loginModel;
    private $render;

    public function __construct($loginModel,$render){
        $this->loginModel = $loginModel;
        $this->render = $render;
    }

    public function execute(){
        $nombre=$_POST["usuario"];
        $password=$_POST["password"];
        $rol=$this->loginModel->validarUsuario($nombre,$password);


        if(isset($rol)) {
            switch ($rol) {
                case 1:
                    header("Location:/chofer");
                    exit();
                    break;
                case 2:

                    break;
                case 3:

                    break;
                case 4://administrador
                    header("Location: ../model/paginaPrincipalAdmi.php");
                    break;
                default:
                 header("Location:/administrador");
                    break;
            }
        }


    }







}