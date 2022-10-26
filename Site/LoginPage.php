

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
                <form action="">
                    <input name="login" type="text" class = "loginInput" placeholder="Email">
                    <input name="senha" type="password" class = "loginInput" placeholder= "Senha" type="password">
                </form>
            </div>
            
            <div class = "btnContainer">
                <button class="botoes">Entrar</button>
                <button id = "btnregistrar" class="botoes" onclick="abreRegistrar()">Registrar</button>
            </div>
        </div>
    </div>
    <div class ="popup">
        <div class="boxpopup">
            
            <div class = "imgContainer">
                <img src = ".\Src\Novo Logo Academium Transparente.png" class = "imagemLogo">
            </div>

            
            <form action='' class = "texto">
                
                <h1 class = "titulo">Crie sua conta Academium+</h1>
                <input name="loginregis" type="text" class = "loginInput" placeholder="Digite seu nome">
                <input name="emailregis" type="email" class = "loginInput" placeholder="Email">
                <input name="senharegis" type="password" class = "loginInput" placeholder= "Senha">
                <input name="senharegis" type="password" class = "loginInput" placeholder= "Digite a sua senha novamente">
                
            <div class = "btnContainer">
                <button id = "btnregistrar" class="botoes" 'onclick="fechaRegistrar()">Registrar</button>
        
        </form>
</body>
<script src="./Scripts/registrarPopup.js"></script>
</html>
