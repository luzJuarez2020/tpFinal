<?php
include_once ("../view/HeaderBasic.html");
include_once ("../controller/Configuracion.php");
session_start();


$user = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$contrasenia = isset($_POST["contra"]) ? $_POST["contra"] : "";
$configuracion=new Configuracion();
$sql = "select * from usuario ";

$database=$configuracion->createDatabase();
$resultado=$database->query($sql);


function validarusuario($user, $contrasenia,$resultado)
{
    $rol=0;
    if (!empty($resultado)) {
        foreach ($resultado as $fila) {
            if ($user == $fila["nombre"] && $contrasenia == $fila["contrasenia"]) {
                $rol = $fila["rol"];
            }
        }
    }
    return $rol;
}

$rol=validarusuario($user,$contrasenia,$resultado);


switch($rol){
    case 1:

        break;
    case 2:

        break;
    case 3:

        break;
    case 4:
        header("location:../model/paginaPrincipalAdmi.php");
        break;
    default:
        header("location:../view/index.php");
        break;
}



include_once ("../view/Footer.html");
?>