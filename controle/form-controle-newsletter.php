<?php

$email = $_POST['newsletter_email'];
$mensagem = "Assinante: $email";
$de = "no_reply@proxmeru.co.mz";

$destinatario = "suporte@proxmeru.co.mz";
$assunto = "Novo Assinante | $email";
$cabecalho = "From: $de \r\n";
$cabecalho .= "Reply-To: $de \r\n";

mail($destinatario, $assunto, $mensagem, $cabecalho);

header("Location: ../index.php");

?>