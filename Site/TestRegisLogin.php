<?php
    session_start();

    if (isset($_POST['registrar']) && $_POST['registrar']!= '' && $_POST['registrar'] != null && $_POST['nomeregis'] != '' && $_POST['emailregis'] != '' && $_POST['senharegis1'] != '' && $_POST['senharegis1']==$_POST['senharegis2']){
        //print_r($_REQUEST);
        include_once('./ConexaoBd/conex.php');
        $emailrg = $_POST['emailregis'];
        $nomerg = $_POST['nomeregis'];
        $senharg = $_POST['senharegis1'];
        
        $checkregisuser = mysqli_query($conexao, "SELECT email FROM usuarios WHERE email = '$emailrg';");
        //print_r($checkregisuser);
        
        if (mysqli_num_rows($checkregisuser) < 1){
            print_r("Não Existe");
            $result = mysqli_query($conexao, "INSERT INTO usuarios (email, nome_user, pasword) VALUES ('$emailrg', '$nomerg','$senharg');");
            mysqli_close($conexao);
            header('Location: LoginPage.php');
        }
        header('Location: LoginPage.php');
    }

    elseif (isset($_POST['login']) && $_POST['login']!= '' && $_POST['login'] != null && $_POST['email'] != '' && $_POST['senha'] != ''){
        include_once('./ConexaoBd/conex.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $checkloginuser = mysqli_query($conexao, "SELECT email, nome_user, pasword FROM usuarios WHERE email = '$email' AND pasword = '$senha';");
        //print_r($checkloginuser);
        if(mysqli_num_rows($checkloginuser) > 0){
            $_SESSION['email'];
            $_SESSION['senha'];
            header('Location: HomePage.php');
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: LoginPage.php');
        }
        
        
    }

    else{
        header('Location: LoginPage.php');
    }
?>