
<?php
#    if(isset($_POST['login']) && $_POST['login']!= '' && $_POST['login'] != null){
#        include_once('./ConexaoBd/conex.php');
#        $email = $_POST['email'];
#        $senha = $_POST['senha'];
#
#        $checklogin = mysqli_query($conexao, "SELECT email, pasword FROM usuarios WHERE email = '$email' AND pasword = '$senha';")
#        if ($checklogin ==)
#
#
#    }

    if(isset($_POST['registrar']) && $_POST['registrar']!= '' && $_POST['registrar'] != null){
        if ($_POST['nomeregis'] != ''){
            if ($_POST['emailregis'] != ''){
                if ($_POST['senharegis1'] != ''){
                    if ($_POST['senharegis2'] != ''){
                        if ($_POST['senharegis1'] == $_POST['senharegis2']){


                            include_once('./ConexaoBd/conex.php');
                            $emailrg = $_POST['emailregis'];
                            $nomerg = $_POST['nomeregis'];
                            $senha1rg = $_POST['senharegis1'];
                            $senha2rg = $_POST['senharegis2'];
                            
                            $checkregisuser = ""; #mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$emailrg';");

                            if ($checkregisuser == ""){
                                $result = mysqli_query($conexao, "INSERT INTO usuarios (email, nome_user, pasword) VALUES ('$emailrg', '$nomerg','$senha1rg');");

                                sleep(1);

                                mysqli_close($conexao);
                                header('Location: LoginPage.php');
                            }
                            
                            
                        }else{
                            echo"- As duas senhas precisam se repetir <br>";
                        }
                    }else{
                        echo"- Repita a senha a senha <br>";
                    }
                }else{
                    echo"- Digite a senha <br>";
                }
            }else{
                echo"- Digite o email <br>";
            }
        }else{
            print_r("- Digite o seu nome <br>");
        }
        
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
                    <input name="email" type="text" class = "loginInput" placeholder="Email">
                    <input name="senha" type="password" class = "loginInput" placeholder= "Senha" type="password">
                
            </div>
            
            <div class = "btnContainer">
                <button type="submit" name="login" value="login" class="botoes">Entrar</button>
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

            
            <form action="LoginPage.php" method="POST" class = "texto">
                
                <h1 class = "titulo">Crie sua conta<br>Academium+</h1>
                <input name="nomeregis" type="text" class = "loginInput" placeholder="Digite seu nome" required>
                <input name="emailregis" type="email" class = "loginInput" placeholder="Email" required>
                <input name="senharegis1" type="password" class = "loginInput" placeholder= "Senha" required>
                <input name="senharegis2" type="password" class = "loginInput" placeholder= "Digite a sua senha novamente" required>
                
                <div class = "btnContainer">
                    <button type="submit" name="registrar" value="registrar" id = "btnregistrar" class="botoes" 'onclick="fechaRegistrar()"> <?php echo "Registro"; ?> </button>
                </div>
            </form>
</body>
<script src="./Scripts/registrarPopup.js"></script>
</html>
