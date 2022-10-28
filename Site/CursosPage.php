<?php
    include_once('config.php');

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
    <link rel="stylesheet" href="Styles\cursos.css">
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
                    <button id="BuscarCourse">Buscar</button>
                </div>
            </div>
         </div>
    </div>

    <div class = "btnContainer">
        <button id="botoes">Preço ↕</button>
        <button id="botoes">Avaliação ↕</button>
        <button id="botoes">Instrutor ↕</button>
    </div>

        <table class="table">
            
            <thead>
                <tr>
                <th class= "tableTlt">Nome</th>
                <th class= "tableTlt">Carga Horária</th>
                <th class= "tableTlt">Preço</th>
                <th class= "tableTlt">Link</th>
                <th class= "tableTlt">Avaliação</th>
                <th class= "tableTlt">Tópico</th>
                <th class= "tableTlt">Instrutor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr = class='lista'>";
                        echo "<td = class = 'lista'>".$user_data['curso_nome']."</td>";
                        echo "<td = class = 'lista' id = 'pequeno'>".$user_data['carga_horaria']."</td>";
                        echo "<td = class = 'lista' id = 'pequeno'>".$user_data['preco_curso']."</td>";
                        echo "<td = class = 'lista' >".$user_data['link_curso']."</td>";
                        echo "<td = class = 'lista' id = 'pequeno'>".$user_data['avaliacao_curso']."</td>";
                        echo "<td = class = 'lista' id = 'pequeno'>".$user_data['topico_curso']."</td>";
                        echo "<td = class = 'lista' >".$user_data['instrutor']."</td>";

                    }
                    
                ?>
            </tbody>
    
        </table>

    </div>




</body>
</html>