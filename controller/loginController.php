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
        $dni=$this->loginModel->dniUsuario($nombre);

        if(isset($rol)) {
            switch ($rol) {
                case "1":
                    $_SESSION['usuario']=$rol;
                    $_SESSION['user']=$dni;
                    header("Location:/administrador");
                    break;
                case "2":
                    $_SESSION['usuario']=$rol;
                    $_SESSION['user']=$dni;
                    header("Location:/supervisor");
                    break;
                case "3":
                    $_SESSION['usuario']=$rol;
                    $_SESSION['user']=$dni;
                    break;
                case "4":
                    $_SESSION['usuario']=$rol;
                    $_SESSION['user']=$dni;
                    header("Location:/chofer");
                    break;
                default:
                header("Location:/inicio");
                    break;
            }
        }else{
            header("Location:/inicio");
        }


    }

    public function cerrarSesion(){
        if (isset($_SESSION['usuario'])) {
            session_destroy();
        }
        header("Location:/inicio");
    }





}