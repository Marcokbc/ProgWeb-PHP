<?php

require_once "../src/PHPMailer.php";
require_once "../src/SMTP.php";
require_once "../src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;//NameSpace
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);//Habilitar o debug

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'MAMeira55@gmail.com';
    $mail->password = 'marcoantonio';
    $mail->Port = 587;

    
}catch(Exception $e){
    echo "Erro ao enviar mensagem {$mail->ErrorInfo}";
}