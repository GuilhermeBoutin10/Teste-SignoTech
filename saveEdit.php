<?php

include_once('conexao.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $tipo = $_POST['tipo'];
    $quantidade = $_POST['quantidade'];
    $textoarea = $_POST['textoarea'];
    $sugestao = $_POST['sugestao'];

    $sqlupdate = "UPDATE crud SET nome='$nome' ,email='$email' ,endereco='$endereco' ,bairro='$bairro' ,cep='$cep' ,cidade='$cidade' ,uf='$uf' ,telefone='$telefone' ,tipo='$tipo' ,quantidade='$quantidade' ,textoarea='$textoarea' ,sugestao='$sugestao'
    WHERE id='$id'";

    $result = $conexao->query($sqlupdate);
}
header('location: listagem.php');


?>