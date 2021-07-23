<?php


class administradorModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }


    public function getUsuarios(){
        return $this->database->query("SELECT * FROM usuario ");
    }


    public function getUsuarioPorDni($dni){
        $sql = "SELECT * FROM usuario WHERE dni='$dni'";
        return $this->database->query($sql);
    }


    public function borrarUsuario($dni){
        return $this->database->execute("DELETE FROM usuario WHERE usuario.dni='$dni'");
    }



    public function modificarEmail($email,$dni){
        $sql = "SELECT email FROM usuario WHERE dni='$dni'";
        $usuarioEmail= $this->database->query($sql);

        if($usuarioEmail!=$email){
            $sql = "UPDATE usuario SET email='$email' WHERE usuario.dni='$dni'";
            $this->database->execute($sql);
        }
    }

    public function modificarRol($rol,$dni){
        $usuarioRol= $this->database->query("SELECT rol FROM usuario WHERE dni='$dni'");
        /*lo lee como array?*/

        if($usuarioRol!=$rol){
            $sql = "UPDATE usuario SET rol='$rol' WHERE usuario.dni='$dni'";
            $this->database->execute($sql);
            switch ($rol){
                case 1:
                    $this->database->execute(" INSERT INTO administrador(id,dni_usuario,nombre) VALUES ('','$dni')");
                    break;
                case 2:
                    $this->database->execute(" INSERT INTO supervisor(id,nombre,dni_usuario) VALUES ('','','$dni')");
                    break;
                case 3:
                    $this->database->execute(" INSERT INTO mecanico(dni_usuario) VALUES ('$dni')");
                    break;
                case 4:
                    $this->database->execute(" INSERT INTO chofer(dni_usuario) VALUES ('$dni')");
                    break;
            }
        }
    }



}