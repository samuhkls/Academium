<?php

    include_once('./ConexaoBd/conex.php');

    $sql = "SELECT * FROM alura_cursos ORDER BY id_curso DESC";
    
    $result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Academium</title>
    <link rel="stylesheet" href=".\Styles\cursos.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href=".\Src\icon Academium.ico">
</head>
<body>    
    <div id="container">

        <div class="Content">
            <div class="SearchArea">
                <p id="TextoTitu">Aqui você tem acesso a educação A+</p>
                <p id="TextoAuxilio">Esses são os cursos que farão o seu upgrade</p>
                <div class="SearchAreaDiv">
                    <img src=".\Src\lupa.png" id="LupaEmoji">
                    <input type="text" placeholder="Oque você quer procurar?" id="InputAreaCourses">
                </div>
            </div>
        </div>
         
         <div class = "btnContainer">
             <button id="botoes">Preço ↕</button>
             <button id="botoes">Avaliação ↕</button>
             <button id="botoes">Instrutor ↕</button>
        </div>
            
        <div class="resultados_cursos">
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<div class='div_curso'>";
                        echo "<a href='".$user_data['link_curso']."' target='_blank'>";
                        echo "<p class='curso' id= 'curso_nome'>".$user_data['curso_nome']."</p>";
                        echo "<p class='curso' id= 'curso_horas'>".$user_data['carga_horaria']."h</p>";
                        echo "<p class='curso' id= 'curso_preco'>R$ ".$user_data['preco_curso']."</p>";
                        echo "<p class='curso' id= 'curso_avaliacao'>".$user_data['avaliacao_curso']."</p>";
                        echo "<p class='curso' id= 'curso_topico'>".$user_data['topico_curso']."</p>";
                        echo "<p class='curso' id= 'curso_professor '>".$user_data['instrutor']."</p>";
                        echo "</a>";
                    echo "</div>";
                }
            ?>
        </div>        
    </div>
</div>
    
    


</body>
</html>