
<?php

    
    $mensagem_de_erro = "Não foi possível completar o cadastro:<br>";
    if(isset($_POST['registrar']) && $_POST['registrar']!= '' && $_POST['registrar'] != null){
        echo "passou do botao";

        if ($_POST['loginregis'] != ''){
            echo "passou do login <br>";

            if ($_POST['emailregis'] != ''){
                echo "passou do email <br>";

                if ($_POST['senharegis1'] != ''){
                    echo "passou da senha 1 <br>";

                    if ($_POST['senharegis2'] != ''){
                        echo "passou da senha 2 <br>";

                        if ($_POST['senharegis1'] == $_POST['senharegis2']){
                            echo "passou da confirmação da senha <br>";


                            include_once('./ConexaoBd/conex.php');
                            echo "integrou a conexao <br>";
                            $loginrg = $_POST['loginregis'];
                            $emailrg = $_POST['emailregis'];
                            $senha1rg = $_POST['senharegis1'];
                            $senha2rg = $_POST['senharegis2'];

                            print_r($loginrg);
                            print_r($emailrg);
                            print_r($senha1rg);
                            print_r($senha2rg);
                            
                            echo "salvou tudo <br>";
                            $result = mysqli_query($conexao, "INSERT INTO usuarios (usuario, pasword, email) VALUES ('$loginrg','$senha1rg','$emailrg');");
                            if($result == TRUE){
                                echo "Rafinha estava certo <br>";
                            } else{
                                echo "Rafinha estava certo.2 <br>";
                            }
                            sleep(1);
                            echo "Comando executado <br>";
                            mysqli_close($conexao);
                            header('Location: LoginPage.php');
                            
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
            print_r("- Digite o login <br>");
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

            
            <form action="LoginPage.php" method="POST" class = "texto">
                
                <h1 class = "titulo">Crie sua conta<br>Academium+</h1>
                <input name="loginregis" type="text" class = "loginInput" placeholder="Digite seu nome">
                <input name="emailregis" type="email" class = "loginInput" placeholder="Email">
                <input name="senharegis1" type="password" class = "loginInput" placeholder= "Senha">
                <input name="senharegis2" type="password" class = "loginInput" placeholder= "Digite a sua senha novamente">
                
                <div class = "btnContainer">
                    <button type="submit" name="registrar" value="registrar" id = "btnregistrar" class="botoes" 'onclick="fechaRegistrar()">Registrar</button>
                </div>
            </form>
</body>
<script src="./Scripts/registrarPopup.js"></script>
</html>
