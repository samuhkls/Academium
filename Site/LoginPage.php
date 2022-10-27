<?php

    if(isset($_POST['registrar']))
    {
        include_once('./ConexaoBd/conex.php');

        $loginrg = $_POST['loginregis'];
        $emailrg = $_POST['emailregis'];
        $senha1rg = $_POST['senharegis1'];
        $senha2rg = $_POST['senharegis2'];
        
        $result = msqli_query($conexao, 'INSERT INTO usuarios (usuario, password, email) VALUES ($loginrg, $emailrg, $senha1rg)');

        // print_r($_POST['loginregis']);
        // print_r($_POST['emailregis']);
        // print_r($_POST['senharegis1']);
        // print_r($_POST['senharegis2']);
        
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar no Academium+</title>
    <link rel="stylesheet" href="Styles\login.scss">
    <link rel="shortcut icon" href=".\Src\icon Academium.ico">
</head>
<body>
    
    <div id = "bgContainer">
        <img src="./Src/Contorno Academium.png" class="contornoBG">
    </div>

    <div id="container">
        
        
        <div id="box">
            

            <div class = "imgContainer">
                <img src = ".\Src\Novo Logo Academium Transparente.png" class = "imagemLogo">
            </div>
            
            <div class = "texto">
                
                <h1 class = "titulo">Fazer Login</h1>
                <form action="LoginPage.php" method="POST">
                    <input name="login" type="text" class = "loginInput" placeholder="Email">
                    <input name="senha" type="password" class = "loginInput" placeholder= "Senha" type="password">
                
            </div>
            
            <div class = "btnContainer">
                <button type="submit" name="login" class="botoes">Entrar</button>
                </form>

                <button id = "btnregistrar" class="botoes" onclick="abreRegistrar()">Registrar</button>
            </div>
                
        </div>
    </div>
    <div class ="popup">
        <div class="boxpopup">
            
            <div class = "imgContainer">
                <img src = ".\Src\Novo Logo Academium Transparente.png" class = "imagemLogo">
            </div>

            
            <form action='' action="LoginPage.php" method="POST" class = "texto">
                
                <h1 class = "titulo">Crie sua conta Academium+</h1>
                <input name="loginregis" type="text" class = "loginInput" placeholder="Digite seu nome" require>
                <input name="emailregis" type="email" class = "loginInput" placeholder="Email" require>
                <input name="senharegis1" type="password" class = "loginInput" placeholder= "Senha" require>
                <input name="senharegis2" type="password" class = "loginInput" placeholder= "Digite a sua senha novamente" require>
                
                <div class = "btnContainer">
                    <button type="submit" name="registrar" id = "btnregistrar" class="botoes" 'onclick="fechaRegistrar()">Registrar</button>
                </div>
            </form>
</body>
<script src="./Scripts/registrarPopup.js"></script>
</html>
