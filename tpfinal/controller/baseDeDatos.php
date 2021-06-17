<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "equipos";
$port = "3307";
$conectar = new mysqli($servername, $username, $password, $database, $port);
$sql = "select * from usuario ";
$resultado = $conectar->query($sql);



?>
