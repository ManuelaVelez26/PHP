<?php

if(isset($_POST(['email']) && !empty($_POST['email']))

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "manuela.ovelez@gmail.com";
$subjet = "Contato - Sigma Soft";
$body = "Nome:".$nome. "\r\n".
        "Email".$email. "\r\n".
        "Mensagem".$mensagem;
$header = "from:manuela.ovelez@gmail.com"."\r\n".
          "Reply-To:"$email."\r\n".
          "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
	echo("Email enviado com sucesso!")
}else{
	echo("Email não pode ser enviado!");


}

?>