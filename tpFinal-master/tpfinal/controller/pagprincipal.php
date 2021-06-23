<?php
include_once ("../view/HeaderBasic.html");
include_once ("../controller/Configuracion.php");


$user = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$contrasenia = isset($_POST["contra"]) ? $_POST["contra"] : "";
$configuracion=new Configuracion();
$sql = "select * from usuario ";

$database=$configuracion->createDatabase();
$resultado=$database->query($sql);


$rol=$configuracion->inicioSesion($user,$contrasenia,$resultado);



switch($rol){
    case 1:
        header("location:../model/paginaPrincipalChofer.php");
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
