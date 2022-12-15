
<?php
// emails para quem será enviado o formulário

  
    $email    = $_POST["email"];
    $nome     = $_POST["name"];
    $assunto  = "LAWCN site contact";
    $mensagem = $_POST["message"]; 
    
    $emailenviar = "organization@lawcn.com.br";
    $destino = $emailenviar;
    $assunto = $assunto;
 
    // É necessário indicar que o formato do e-mail é html
    $headers .= 'From: '.$nome.' <'.$email.'>';
         
    $enviaremail = mail($destino, $assunto, utf8_decode($mensagem), $headers);
    if($enviaremail){
        echo "<h6><font color=\"#f7a73b\"><b>Email successfully sent!</b></font> </h6>";
    
    } else {
         echo "<h6><font color=\"red\"><b>Something wrong happened, please try again later!</b></font> </h6>";
       }

  
?>
