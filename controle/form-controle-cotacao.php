<?php

$entidade = $_POST['cotacao_entidade'];
$nomeComercial = $_POST['cotacao_nomeComercial'];
$email = $_POST['cotacao_email'];
$nome = $_POST['cotacao_nome'];
$apelido = $_POST['cotacao_apelido'];
$telefone = $_POST['cotacao_telefone'];
$grau = $_POST['cotacao_grau'];
$endereco = $_POST['cotacao_endereco'];
$servico = $_POST['cotacao_servico'];
$descricao = $_POST['cotacao_descricao'];

$nomeTitulo = "$nome $apelido";

if($nomeComercial == '') {
    $nomeComercial = "Entidade Pessoal";
} else {
    $nomeTitulo = $nomeComercial;
}

if($descricao == '') {
    $descricao = "Não especificado";
}

foreach ($servico as $valores){
    $servicos .= "\n- $valores";
}

$mensagem = "Requisitante: $nome $apelido\nEmpresa: $nomeComercial\nTelefone: $telefone\nEndereço: $endereco\nGrau de urgência do Projecto: $grau\nServiço(s):$servicos\nDescrição: $descricao";

$destinatario = "suporte@proxmeru.co.mz";
$assunto = "Pedido de Cotação | $nomeTitulo";
$cabecalho = "From: $email \r\n";
$cabecalho .= "Reply-To: $email \r\n";

mail($destinatario, $assunto, $mensagem, $cabecalho);

header("Location: ../index.php");

?>