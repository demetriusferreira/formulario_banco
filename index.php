<?php
if(isset($_POST['submit'])){
    include_once('config.php');
    
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $resultado = mysqli_query($conexao, "INSERT INTO usuarios(email,nome,telefone,endereco) values('$email','$nome','$telefone', '$endereco')" );

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<style>
    body {
        
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
    }
    .form {
        background-color: red;
        color: #fff;
        align-items: center;
        
        width: 180px;
        height: 250px;
        padding: 25px;
        border-radius: 25px;
    }
</style>
<body>
    <div class="form">
    <form action="index.php" method="POST">
        <div>
            <label>Nome</label>
            <br/>
            <input type="text" name="nome"/>
        </div>
        <br/>
        <div>
            <label>E-Mail</label>
            <br/>
            <input type="email" name="email"/>
        </div>
        <br/>
        <div>
            <label>Telefone</label>
            <br/>
            <input type="number" name="telefone"/>
        </div>
        <br/>
        <div>
            <label>Endereço</label>
            <br/>
            <input type="texto" name="endereco"/>
        </div>
        <br/>
        <input type="submit" name="submit"/>
    </form>
</div>
</body>
</html>