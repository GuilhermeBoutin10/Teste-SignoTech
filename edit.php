<?php

    if(!empty($_GET['id']))
    {

    
    
    include_once('conexao.php');

   $id = $_GET['id'];

   $sqlselect = "SELECT * FROM crud WHERE id=$id";

  $result = $conexao->query($sqlselect);

  if($result->num_rows > 0)
  {
    while($user_data = mysqli_fetch_assoc($result))
    {
       $id = $user_data['id'];
       $nome = $user_data['nome'];
       $email = $user_data['email'];
       $endereco = $user_data['endereco'];
       $bairro = $user_data['bairro'];
       $cep = $user_data['cep'];
       $cidade = $user_data['cidade'];
       $uf = $user_data['uf'];
       $telefone = $user_data['telefone'];
       $tipo = $user_data['tipo'];
       $quantidade = $user_data['quantidade'];
       $textoarea = $user_data['textoarea'];
       $sugestao = $user_data['sugestao'];

    }

  }else{
    header('location: listagem.php');
  }





    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo2.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <title>Formulario</title>
</head>
<body>
<div class="box">
<form action="saveEdit.php" method="POST" enctype="multipart/form-data">
    <h3>> DADOS PARA ENTREGA</h3>
    <div class="inputbox">
    <div>
        <input type="text" name="nome" id="nome" class="inputuser" value="<?php echo $nome ?>" required>
        <label for="nome" class="labelinput">Nome:</label>
    </div>
    <div>
        <input type="text" name="endereco" id="endereco" class="inputuser" value="<?php echo $endereco ?>">
        <label for="endereco" class="labelinput">Endereço:</label>
    </div>
    <div>
        <input type="text" name="bairro" id="bairro" class="inputuser" value="<?php echo $bairro ?>" >
        <label for="bairro" class="labelinput">Bairro:</label>
    </div>
    <div>
        <input type="text" name="cep" id="cep" class="inputuser" value="<?php echo $cep ?>" >
        <label for="cep" class="labelinput">Cep:</label>
    </div>
    <div>
        <input type="text" name="cidade" id="cidade" class="inputuser" value="<?php echo $cidade ?>">
        <label for="cidade" class="labelinput">Cidade:</label>
    </div>
    <div>
        <input type="text" name="uf" id="uf" class="inputuser" value="<?php echo $uf ?>">
        <label for="uf" class="labelinput">UF:</label>
    </div>
    <div>
        <input type="text" name="email" id="email" class="inputuser" value="<?php echo $email ?>" required>
        <label for="email" class="labelinput">E-mail:</label>
    </div>
    <div>
        <input type="tel" name="telefone" id="telefone" class="inputuser" maxlength="15" onkeyup="handlePhone(event)" value="<?php echo $telefone ?>" required>
        <label for="telefone" class="labelinput">Telefone:</label>
    </div>
    </div>
    <h3>>DADOS PARA PRODUÇÃO</h3>
    <label for="tiporevista">Tipo Revistinha:</label>
    <input type="radio" id="convite" name="tipo" value="convite" <?php echo ($tipo == 'convite') ? 'checked' : '' ?>>
    <label for="convite">Convite</label>
    <input type="radio" id="lembranca" name="tipo" value="lembranca" <?php echo ($tipo == 'lembranca') ? 'checked' : '' ?>>
    <label for="lembranca">Lembrança</label>
    <input type="radio" id="convitelembranca" name="tipo" value="convitelembranca" <?php echo ($tipo == 'convitelembranca') ? 'checked' : '' ?>>
    <label for="convitelembranca">Convite-Lembrança</label>
    <div><br>
    <label for="quantidade" id="fquantidade">Quantidade:</label>
    <input type="text" name="quantidade" id="quantidade" value="<?php echo $quantidade ?>">
    </div>
    <div>
        <br><br>
        <textarea rows="5" style="width: 50%;" id="textoarea" name="textoarea"><?php echo htmlspecialchars($textoarea); ?></textarea>
        <label for="atracaodoevento" class="fatracao">Atrações do<br>evento:</label>
    </div>
        <input type="checkbox" id="sugestao" name="sugestao" value="sugestao_sim" <?php echo ($sugestao == 'sugestao_sim') ? 'checked' : '' ?>>
        <label for="sugestao">Aceito sugestões de texto para capa</label>
    <div><br>
        <input type="file" id="imagens" name="imagens" value="imagens" accept="image/*" value="<?php echo $imagens ?>">
        <label for="imagens">Imagens:</label>
    </div><br><br>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" id="update" name="update" value="Update" class="enviar">
</form>
</div>
</body>
</html>