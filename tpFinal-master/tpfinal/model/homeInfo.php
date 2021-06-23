<?php
require('../controller/paginaPrincipalAdmi.php');

$user = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$contrasenia = isset($_POST["contra"]) ? $_POST["contra"] : "";



function validarusuario($user, $contrasenia,$resultado){
  $variable=false;
  $roles=0;
   if ($resultado->num_rows > 0) {
      while($fila = $resultado->fetch_assoc()) {
         if($user==$fila["nombre"] && $contrasenia==$fila["contrasenia"]){
            $variable=true;
            $roles=$fila["rol"];
         }
      }
   }
   return $roles;
}

$rol=validarusuario($user, $contrasenia,$resultado);


switch ($rol){
   case 1:
      /*header("location:paginaPrincipalAdmi.php");*/
      break;
   case 2:
      /* header("location:paginaPrincipalAdmi.php");*/
      break;
   case 3:
      /*header("location:paginaPrincipalAdmi.php");*/
      break;
   case 4:
      header("location:paginaPrincipalAdmi.php");
      break;
      default:
         header("location:../view/index.php");
}




?>

