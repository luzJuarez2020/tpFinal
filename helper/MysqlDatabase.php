<?php

class MysqlDatabase{
    private $connection;

    public function __construct($servername, $username, $password, $dbname){
        $conn = mysqli_connect(
            $servername,
            $username,
            $password,
            $dbname
        );

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $this->connection = $conn;
    }

    public function query($sql){
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function verificarUsuario($sql,$nombre,$password){
        $result = mysqli_query($this->connection, $sql);
        $rol=0;
        if($result->num_rows>0){
            while($fila=$result->fetch_assoc()){
                if($nombre==$fila["nombre"] && $password==$fila["contrasenia"] && $fila["estado"]==2){
                    $rol=$fila["rol"];
                }
            }
        }
        return $rol;
    }


    public function execute($sql){
        mysqli_query($this->connection, $sql);
    }





}