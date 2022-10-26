<?php

    $dbHost = 'Localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'academium-bd';

    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if($conexao->connect_errno){ echo "Erro";}
    else{ echo "Conexão efetuada com sucesso" }

?>