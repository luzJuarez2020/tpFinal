<?php
include_once("../view/HeaderBasic.html");
include_once("../controller/loginController.php");


$user = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$contrasenia = isset($_POST["contra"]) ? $_POST["contra"] : "";

$login=new loginController();

$login->execute($user,$contrasenia);




?>
