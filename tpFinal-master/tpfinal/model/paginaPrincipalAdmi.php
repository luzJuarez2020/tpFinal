<?php
session_start();
if(isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == 4) {
        echo "vamo";
    } else {
        header("location:../view/index.php");
    }
}




include_once("../controller/Configuracion.php");



$configuracion=new Configuracion();
$conectar = $configuracion->createDatabase();
$resultado = $conectar->query("select * from usuario");



include_once ("../view/HeaderBasic.html");

foreach ($resultado as $fila){
    echo $fila["nombre"];
}



?>





<?php
include_once ("../view/Footer.html");