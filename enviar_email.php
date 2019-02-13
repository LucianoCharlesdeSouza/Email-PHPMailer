<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

$dados_form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dados_form['nome'])) :

    $mail = new PHPMailer();

try {

    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];
    $mail->isSMTP();
    /**
     * Debug
     */
    // $mail->SMTPDebug = 3;

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'souzacomprog@gmail.com';
    $mail->Password = 'sua senha aqui';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    /**
     * Quem esta enviando
     */
    $mail->setFrom($dados_form['email'], $dados_form['nome']);/*opcional*/
    /**
     * Quem irá receber
     */
    $mail->addAddress('souzacomprog@gmail.com', 'Enviado do Site X');
    /**
     * REsponder para
     */
    $mail->addReplyTo($dados_form['email'], $dados_form['nome']);

    /**
     * Anexos
     */
    $mail->addAttachment('assets/img/php.jpg'); 
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // nome opcional para o anexo

    /**
     * formato do email (texto ou html)
     */
    $mail->isHTML(true);
    /**
     * Assunto do email
     */
    $mail->Subject = 'A Pessoa de : ' . $dados_form['nome'] . " deseja falar com a area de: " . $dados_form['opcao'];
    /**
     * Mensagem no corpo do email
     */
    $mail->Body = $dados_form['messagem'];

    if ($mail->send()) {
        echo 'E-mail enviado com sucesso';
    }
} catch (Exception $e) {
    echo '<p>Não foi possivel enviar o email.</p>';
    echo 'Error: ' . $mail->ErrorInfo;
}
endif;


