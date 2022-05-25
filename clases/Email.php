<?php

namespace Clases;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
    public $email;
    public $nombre;
    public $token;
    public  function __construct( $nombre,$email, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        //crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '8ec2a436c6447d';
        $mail->Password = 'fa0f2f183096d2';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuneta';
         //set html
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';


        $contenido = "<html>";
        $contenido .= "<p> <strong>  hola    "   . $this->nombre .  "</strong>   Has creado tu cuenta en appsalon, solo debes confirmarla  precionando el siguiente enlace </p>";
        $contenido .= "<p>Preciona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" .$this->token . "'>Confirmar cuenta  </a> </p>";
        $contenido .= "<p>si tu no solicitaste esta cuenta puedes ignorar el mensaje</p>";
        $contenido .= "</html>";
         $mail->Body = $contenido;

         //enviar mail

         $mail->send();
    }

    public function enviarInstrucciones(){
        
        //crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '8ec2a436c6447d';
        $mail->Password = 'fa0f2f183096d2';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Restablece tu password';
         //set html
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';


        $contenido = "<html>";
        $contenido .= "<p> <strong>  hola    "   . $this->nombre .  "</strong>   haz solicitado restablecer tu password, sigue el siguiente enlace para hacerlo </p>";
        $contenido .= "<p>Preciona aqui: <a href='http://localhost:3000/recuperar?token=" .$this->token . "'>Restablecer password  </a> </p>";
        $contenido .= "<p>si tu no solicitaste esta cuenta puedes ignorar el mensaje</p>";
        $contenido .= "</html>";
         $mail->Body = $contenido;

         //enviar mail

         $mail->send();
    }
}
