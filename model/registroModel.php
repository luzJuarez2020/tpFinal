<?php

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\SMTP;
use  PHPMailer\PHPMailer\Exception ;

class registroModel
{
    private $database;


    public function __construct($database){
        $this->database = $database;

    }
//hola como estan?

    public function execute($nombre,$contrasenia,$dni,$fecha_nac,$email,$hash){
        $sql = "INSERT INTO usuario(nombre,contrasenia,estado,dni,fecha_nac,email,hash,tipo_licencia,viajes,rol)
                value('$nombre','$contrasenia','1','$dni','$fecha_nac','$email','$hash',null,null,null)";
        $this->database->execute($sql);
    }


    public function envioEmailConfirmacion($email,$hash,$nombre,$password)
    {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
        require 'PHPMailer/src/OAuth.php';

        $mail = new PHPMailer(true);

        $msj="<h2>Gracias por registrarse!</h2><br>
    <p>------------------------</p><br>
    Username: ".$nombre."<br>
    Password: ".$password."<br>
    ------------------------
    <h4>Su cuenta fue creada, puede confirmar su email en el link de abajo</h4><br>
    <p>Confirmar tu dirección de correo electrónico nos ayuda a mantener la seguridad de tu cuenta.</p><br>
    <p>Dedica un momento para avisarnos si esta es la dirección correcta: ".$email."</p><br>
   <a href='localhost/registro/verificacion?email=$email & hash=$hash'> VERIFICA TU MAIL</a>";


            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'luzjuarez2016@gmail.com';                     //SMTP username
            $mail->Password = 'Spinettalandia2022';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('luzjuarez2016@gmail.com', 'Empresa');
            $mail->addAddress($email, 'Joe User');     //Add a recipient

            //Content
            $mail->isHTML(true);
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Confirmacion Cuenta";
            $mail->Body = $msj;

            $mail->send();

    }

    public function verificacionHash($email,$hash){
        $sql = "SELECT * FROM usuario WHERE email='$email' and hash='$hash'";
        $result=$this->database->query($sql);

        if(isset($result)){
            $insert="UPDATE usuario SET estado=2 WHERE usuario.email='$email'";
            $this->database->execute($insert);
        }

    }





}