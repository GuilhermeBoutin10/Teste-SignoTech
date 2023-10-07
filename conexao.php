<?php
  $hostname = "localhost";
  $bancodedados = "formulario";
  $usuario = "root";
  $senha = "";


   //criando a conexão
   $conexao=mysqli_connect($hostname, $usuario, $senha, $bancodedados);

   //validação
   //if(!$conexao){
    //   print("Ocorreu uma falha de conexão com o Banco de Dados. Favor contate o administrador do sistema.");
   //}
  // else{
   // print("Conexão efetuada com sucesso");
   //}
 ?>