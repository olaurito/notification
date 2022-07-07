<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use stdClass;

class Email{

    private $mail = stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName )
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = $smtpDebug;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host       = $host;                     //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mail->Username   = $user;                     //SMTP username
        $this->mail->Password   = $pass;                             //SMTP password
        $this->mail->SMTPSecure = $smtpSecure;            //Enable implicit TLS encryption
        $this->mail->Port       = $port;  
        $this->mail->Charset    = 'utf-8';  
        $this->mail->setLanguage('br');  
        $this->mail->isHTML(true);  
        $this->mail->setFrom($setFromEmail, $setFromName);  
    }

    public function sendMail($subjetc, $body, $replyEmail, $replyName, $addressEmail, $addressName){

        $this->mail->Subject = (string)$subjetc;
        $this->mail->Body = $body;

        $this->mail->addReplyTo ($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try{
            $this->mail->send();

        }catch(Exception $ex){
            echo "Erro ao enviar o email: {$this->mail->ErrorInfo} {$ex->getMessage()}";
        }

        echo "email enviado";
    }


}