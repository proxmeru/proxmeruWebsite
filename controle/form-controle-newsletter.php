<?php

header("Content-type: text/html; charset=utf-8");

$email = $_POST['newsletter_email'];
$mensagem = "Assinante: $email";
$de = "no_reply@proxmeru.co.mz";

$destinatario = "suporte@proxmeru.com";
$assunto = "Novo Assinante | $email";
$cabecalho = "From: $de \r\n";
$cabecalho .= "Reply-To: $de \r\n";

mail($destinatario, $assunto, $mensagem, $cabecalho);

header("Location: ../index.php");

?>