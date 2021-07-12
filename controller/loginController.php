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
        $data["rol"] = $this->loginModel->validarUsuario($nombre,$password);


        if(isset($rol)) {
            switch ($rol) {
                case 1://chofer
                    echo $this->render->render("view/quieroSerParteView.php", $data);
                    break;
                case 2://supervisor

                    break;
                case 3://encargado

                    break;
                case 4://administrador
                    header("Location: ../model/paginaPrincipalAdmi.php");
                    break;
                default:
                    header("Location:../view/quieroSerParteView.php");
                    break;
            }
        }


    }







}