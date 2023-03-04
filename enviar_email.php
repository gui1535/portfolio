<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'class/PHPMailer/src/Exception.php';
require 'class/PHPMailer/src/PHPMailer.php';
require 'class/PHPMailer/src/SMTP.php';


// FUNCTIONS
function envia_email($email, $titulo, $mensagem)
{
    try {
        // Inicia a classe PHPMailer 
        $mail = new PHPMailer();

        // Método de envio 
        $mail->isSMTP();

        // Enviar por SMTP 
        $mail->Host = "";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = '';
        $mail->Password = '';
        $mail->SMTPSecure = PHPMAILER::ENCRYPTION_SMTPS;
        $mail->From = '';
        $mail->FromName  = "";
        $mail->AddAddress('', "-");
        $mail->IsHTML(true);
        $mail->CharSet = '';
        $mail->Subject = "";
        $mail->Body = "";
        $mail->send();
        return true;
    } catch (\Throwable $e) {
        return false;
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (envia_email($_POST['email'], $_POST['titulo'], $_POST['mensagem'])) {
        header('HTTP/1.1 200 OK');
        echo json_encode([
            'status' => 200,
            'message' => "Email enviado com sucesso."
        ]);
    } else {
        header('HTTP/1.1 500 Error');
        echo json_encode([
            'status' => 500,
            'message' => "Ocorreu um erro ao enviar o email."
        ]);
    }
}
