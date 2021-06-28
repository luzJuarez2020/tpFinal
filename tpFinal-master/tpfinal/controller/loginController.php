<?php


class loginController
{
    private $modelo;

    public function __construct()
    {
        include_once("../model/loginModel.php");
        $this->modelo = new LoginModel();
    }

    public function execute($usuario, $contrasenia)
    {
        $this->modelo->validarUsuario($usuario, $contrasenia);

        $usuario = $_SESSION["usuario"];
        $columna = explode("-", $usuario);

        switch ($columna[8]) {
            case 1://chofer
                header("Location: ../model/paginaPrincipalChofer.php");
                break;
            case 2://supervisor

                break;
            case 3://encargado

                break;
            case 4://administrador
                header("Location: ../model/paginaPrincipalAdmi.php");
                break;
            default:
                header("Location: ../view/index.php");
                break;
        }


    }



}

