<?php
session_start();
if(isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    $pos = explode("-", $usuario);
    echo "oka";
}





?>
