<?php
session_start();

    if($_SESSION['usuario']==1){
        echo "vamo";
    }
    else{
        header("location:../view/index.php");
    }





?>
