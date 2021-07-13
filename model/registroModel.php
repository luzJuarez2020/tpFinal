<?php


class registroModel
{
    private $database;

    public function __construct($database){
        $this->database = $database;
    }


    public function execute($nombre,$contrasenia,$dni,$fecha_nac,$email,$hash){
        $sql = "INSERT INTO usuario(nombre,contrasenia,estado,dni,fecha_nac,email,hash,tipo_licencia,viajes,rol)
                value('$nombre','$contrasenia','1','$dni','$fecha_nac','$email','$hash',null,null,null)";
        $this->database->execute($sql);
    }


    public function emailConfirmacion($email,$nombre,$password,$hash){
        $para= $email;
        $tema= 'Signup | Verification';
        $msj = '
 
Gracias por registrarse!
Tu cuenta fue creada,puedes iniciar sesion luego de que el administrador le asigne su rol, y activarla presionando en el link de abajo.
 
------------------------
Nombre usuario: '.$nombre.'
Password: '.$password.'
------------------------
 
Por favor haga click en este link para activar su cuenta:
http://localhost/registro/verificacion?email='.$email.'&hash='.$hash.'
';

        $headers = 'From:noreply@yourwebsite.com' . "\r\n";
       if(mail($para, $tema, $msj,$headers)==true){
           echo $para;
       }else{
           echo "error";
       }
    }





}