<?php

if(!empty($_GET['id']))
{
    include_once('conexao.php');

   $id = $_GET['id'];

   $sqlselect = "SELECT * FROM crud WHERE id=$id";

  $result = $conexao->query($sqlselect);

  if($result->num_rows > 0)
  {
       $sqlDelete = "DELETE FROM crud WHERE id=$id";
       $resultDelete = $conexao->query($sqlDelete);
  }
}
 header('Location: listagem.php')
?>