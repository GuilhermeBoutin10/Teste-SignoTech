<?php

    if(isset($_POST['submit'])){
    


        $recnome=$_POST["nome"];
        $recendereco=$_POST["endereco"];
        $recbairro=$_POST["bairro"];
        $reccep=$_POST["cep"];
        $reccidade=$_POST["cidade"];
        $recuf=$_POST["uf"];
        $recmail=$_POST["email"];
        $rectelefone=$_POST["telefone"];
        $rectextoarea=$_POST["textoarea"];
        
        
        $mensagem="
        
        <p align='center'>
    </p>
    <h2 align='center'>Seu formulário foi enviado com sucesso!</h2>
    <br><br>
    <p><strong>Nome: </strong>$recnome</p>
    <p><strong>E-mail: </strong>$recmail</p>
        ";
             
        
        $dados="MIME-Version:1.1";
        $dados.="Content-type:text/html; charset=utf-8\r\n";
        $dados.="To: Formulário - Contato\r\n";
        $dados.="From: contato@teste.com.br\r\n";
        $dados.= "X-Priority: 1\n";
        
        mail($recmail, $rectextoarea, $mensagem, $dados);
        




        
        // print_r('Nome:' . $_POST['nome']);
       // print_r('<br>');
       // print_r('E-mail:' . $_POST['email']);
       // print_r('<br>');
       // print_r('Endereço:' . $_POST['endereco']);
        //print_r('<br>');
        //print_r('Bairro:' . $_POST['bairro']);
       // print_r('<br>');
        //print_r('Cep:' . $_POST['cep']);
       // print_r('<br>');
       // print_r('Cidade:' . $_POST['cidade']);
       // print_r('<br>');
       // print_r('Uf:' . $_POST['uf']);


       

       
     
     
    include_once('conexao.php');
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

       if( isset($_FILES["imagens"]) && !empty($_FILES["imagens"]))
       {
           $imagens = "./img/".$_FILES["imagens"]["name"];
           move_uploaded_file($_FILES["imagens"]["tmp_name"] ,$imagens);
       }else{
        $imagens = "";
       }

       
       $result = mysqli_query($conexao, "INSERT INTO crud(nome,email,endereco,bairro,cep,cidade,uf,telefone,tipo,quantidade,textoarea,sugestao,imagens)
       VALUES ('$nome','$email','$endereco','$bairro','$cep','$cidade','$uf','$telefone','$tipo','$quantidade','$textoarea','$sugestao','$imagens')");
           

header("location:obrigado.php");



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
<form action="index.php" method="POST" enctype="multipart/form-data">
    <h3>> DADOS PARA ENTREGA</h3>
    <div><a href="listagem.php" class="listagem">Listagem de dados</a></div>
    <div class="inputbox">
    <div>
        <input type="text" name="nome" id="nome" class="inputuser" required>
        <label for="nome" class="labelinput">Nome:</label>
    </div>
    <div>
        <input type="text" name="endereco" id="endereco" class="inputuser">
        <label for="endereco" class="labelinput">Endereço:</label>
    </div>
    <div>
        <input type="text" name="bairro" id="bairro" class="inputuser" >
        <label for="bairro" class="labelinput">Bairro:</label>
    </div>
    <div>
        <input type="text" name="cep" id="cep" class="inputuser" >
        <label for="cep" class="labelinput">Cep:</label>
    </div>
    <div>
        <input type="text" name="cidade" id="cidade" class="inputuser">
        <label for="cidade" class="labelinput">Cidade:</label>
    </div>
    <div>
        <input type="text" name="uf" id="uf" class="inputuser">
        <label for="uf" class="labelinput">UF:</label>
    </div>
    <div>
        <input type="text" name="email" id="email" class="inputuser"required>
        <label for="email" class="labelinput">E-mail:</label>
    </div>
    <div>
        <input type="tel" name="telefone" id="telefone" class="inputuser" maxlength="15" onkeyup="handlePhone(event)" required>
        <label for="telefone" class="labelinput">Telefone:</label>
    </div>
    </div>
    <h3>>DADOS PARA PRODUÇÃO</h3>
    <label for="tiporevista">Tipo Revistinha:</label>
    <input type="radio" id="convite" name="tipo" value="convite">
    <label for="convite">Convite</label>
    <input type="radio" id="lembranca" name="tipo" value="lembranca">
    <label for="lembranca">Lembrança</label>
    <input type="radio" id="convitelembranca" name="tipo" value="convitelembranca">
    <label for="convitelembranca">Convite-Lembrança</label>
    <div><br>
    <label for="quantidade" id="fquantidade">Quantidade:</label>
    <input type="text" name="quantidade" id="quantidade">
    </div>
    <div>
        <br><br>
        <textarea rows="5" style="width: 50%;" name="textoarea"></textarea>
        <label for="atracaodoevento" class="fatracao">Atrações do <br>evento:</label>
    </div>
        <input type="checkbox" id="sugestao" name="sugestao" value="sugestao_sim">
        <label for="sugestao">Aceito sugestões de texto para capa</label>
    <div><br>
        <input type="file" id="imagens" name="imagens" value="imagens" accept="image/*">
        <label for="imagens">Imagens:</label>
    </div><br><br>
    <input type="submit" id="submit" name="submit" value="Continuar" class="enviar">
</form>
</div>
</body>
</html>