<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);

    $to = "turismoantonina@gmail.com";
    $subject = "Turismo - Antonina";
    $body = "Nome: " . $nome . "\r\n" .
        "Email: " . $email . "\r\n" .
        "Mensagem: " . $message . "\r\n";
    $header = "From:turismoantonina@gmail.com" . "\r\n" . "Reply-To:" . $email . "\r\n" . "X=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo ("Email enviado com sucesso!");
    } else {
        echo ("O Email n'ao pode ser enviado");
    }

}
?>;