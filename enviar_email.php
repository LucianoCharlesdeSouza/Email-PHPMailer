<?php

require './Library/Mailer/PHPMailerException.php';
require './Library/Mailer/SMTP.php';
require './Library/Mailer/PHPMailer.php';
$dados_form = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dados_form['nome'])):

    $mail = new App\Library\Mailer\PHPMailer();
    try {

        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;                              
        $mail->Username = 'seuemail@gmail.com';                 
        $mail->Password = 'suasenha';                           
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;                                    
        $mail->setFrom('souzacomprog@gmail.com', 'Mailer');
        $mail->addAddress($dados_form['email'], 'Luciano Charles');     
        $mail->addAddress($dados_form['email']);               
//      $mail->addReplyTo('info@example.com', 'Information');
//      $mail->addCC('cc@example.com');
//      $mail->addBCC('bcc@example.com');
        
        //Attachments
//      $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//      $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'A Pessoa de : ' . $dados_form['nome'] . " deseja falar com a area de: " . $dados_form['opcao'];
        $mail->Body = $dados_form['messagem'];
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if ($mail->send()) {
            echo 'E-mail enviado com sucesso';
        }
    } catch (Exception $e) {
        echo 'Não foi possivel enviar o email.';
        echo 'Error: ' . $mail->ErrorInfo;
    }
        endif;


