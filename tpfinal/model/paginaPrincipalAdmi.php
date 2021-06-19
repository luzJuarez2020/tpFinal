<?php
include_once("../controller/DataBase.php");

$conectar = Configuracion::createDatabase();
$resultado = $conectar->query("select * from usuario");

include_once ("../view/HeaderBasic.html");
?>





<?php
include_once ("../view/Footer.html");