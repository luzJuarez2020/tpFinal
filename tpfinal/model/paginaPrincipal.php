<?php
include_once ("../view/HeaderBasic.html");

$rol = isset($_GET["rol"]) ? $_GET["rol"] :  "../view/index.php";

switch($rol){
    case "mecanico":
        ;
        break;
    case "administrador":
        include_once ("paginaPrincipalAdmi.php");
        break;
    case "conductor":
        ;
        break;
    default:
        include_once ("../view/index.php");
        break;
}



include_once ("../view/Footer.html");
?>