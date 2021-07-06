<?php
include_once("../controller/RegistroUsuarioController.php");
$nombre=$_POST["nombre"];
$dni=$_POST["dni"];
$email=$_POST["email"];
$fecha_nac=$_POST["fecha_nac"];
$contraseña=$_POST["contra"];
$pruebaContra=$_POST["contra2"];

$registro=new RegistroUsuarioController();

if($contraseña==$pruebaContra){
    $registro->executeRegistarUsuario($nombre,$contraseña,$dni,$fecha_nac,$email);

}else{
    echo "ingrese de nuevo la contrasenia";
}