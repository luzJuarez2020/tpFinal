<?php

if(isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    $pos = explode("-", $usuario);
    echo "oka";
}


include_once("../helper/Configuracion.php");

include_once("../view/HeaderBasic.html");


?>



<?php
include_once("../view/partial/Footer.html");
?>