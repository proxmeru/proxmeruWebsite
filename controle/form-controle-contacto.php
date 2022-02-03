<?php

header("Content-type: text/html; charset=utf-8");

$nome = $_POST['contacto_nome'];
$apelido = $_POST['contacto_apelido'];
$email = $_POST['contacto_email'];
$mensagem = $_POST['contacto_mensagem'];

$destinatario = "suporte@proxmeru.com";
$assunto = "Fale Conosco | $nome $apelido";
$cabecalho = "From: $email \r\n";
$cabecalho .= "Reply-To: $email \r\n";

mail($destinatario, $assunto, $mensagem, $cabecalho);

header("Location: ../index.php");

?>