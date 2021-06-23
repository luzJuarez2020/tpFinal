<?php

$user="hola";
$user = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$contrasenia = isset($_POST["contra"]) ? $_POST["contra"] : "";


if (validarusuario($user, $contrasenia) == true) {
   header("location:paginaPrincipal.php");
}


function validarusuario($user, $contrasenia)
{
    return $user == "pablito" && $contrasenia == "1234";
}

?>

