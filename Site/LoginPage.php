


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
            
            <form action="TestRegisLogin.php" method="POST">
                <div class = "texto">
                    <h1 class = "titulo">Fazer Login</h1>
                        <input name="email" type="text" class = "loginInput" placeholder="Email" require>
                        <input name="senha" type="password" class = "loginInput" placeholder= "Senha" require>
                </div>
                <div class = "btnContainer">
                    <button type="submit" name="login" value="login" class="botoes">Entrar</button>
                </div>
            </form>
                <div class = "btnContainer">
                    <button id = "btnredreg" class="botoes" onclick="abreRegistrar()">Não tem conta?</button>
                </div>
                
        </div>
    </div>
    <div class ="popup">
        <div class="boxpopup">
            
            <div class = "imgContainer">
                <img src = ".\Src\Novo Logo Academium Transparente.png" class = "imagemLogo">
            </div>

            
            <form action="TestRegisLogin.php" method="POST" class = "texto">
                
                <h1 class = "titulo">Crie sua conta<br>Academium+</h1>
                <input name="nomeregis" type="text" class = "loginInput" placeholder="Digite seu nome" require>
                <input name="emailregis" type="email" class = "loginInput" placeholder="Email" require>
                <input name="senharegis1" type="password" class = "loginInput" placeholder= "Senha" require>
                <input name="senharegis2" type="password" class = "loginInput" placeholder= "Repita a Senha" require>
                
                <div class = "btnContainer">
                    <button type="submit" name="registrar" value="registrar" id = "btnregistrar" class="botoes" 'onclick="fechaRegistrar()"> <?php echo "Registro"; ?> </button>
                </div>
            </form>
</body>
<script src="./Scripts/registrarPopup.js"></script>
</html>
