# Email-PHPMailer

# Certifique-se que a linha: (extension=php_openssl.dll) esta descomentada no seu php.ini

Tudo que teremos de fazer para usar, será o correto preenchimento desses metodos encontrados no
arquivo enviar_email.php

```php
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;                              
        $mail->Username = 'seuemail@gmail.com';                 
        $mail->Password = 'suasenha';  
        $mail->Port = 587;  /* Essa opção poderá mudar conforme disponivel pelo seu servidor */
