<?php
if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])){
    $to      = 'egerjoaoarnoldo@gmail.com';
    $subject = 'Contato do site';
    $message = 'hello';
    $headers = 'From: contato@egerjoaoarnoldo.com' . "\r\n" .
        'Reply-To: contato@egerjoaoarnoldo.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)){
        echo json_encode(["status" => "success", "message" => "Evnviado com sucesso"]);
    }else{
        echo json_encode(["status" => "erro", "message" => "Não foi possível enviar o e-mail"]);
    }
}else{
    echo json_encode(["status" => "erro", "message" => "Nenhum dado foi enviado"]);
}