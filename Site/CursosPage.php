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
</head>
<body>
    <h1>hello world</h1>
    
    <div>
    <table class="table">
        
        <thead>
            <tr>
            <th scope="col">id_curso</th>
            <th scope="col">curso_nome</th>
            <th scope="col">carga_horaria</th>
            <th scope="col">preco_curso</th>
            <th scope="col">link_curso</th>
            <th scope="col">avaliacao_curso</th>
            <th scope="col">topico_curso</th>
            <th scope="col">instrutor</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$user_data['id_curso']."</td>";
                    echo "<td>".$user_data['curso_nome']."</td>";
                    echo "<td>".$user_data['carga_horaria']."</td>";
                    echo "<td>".$user_data['preco_curso']."</td>";
                    echo "<td>".$user_data['link_curso']."</td>";
                    echo "<td>".$user_data['avaliacao_curso']."</td>";
                    echo "<td>".$user_data['topico_curso']."</td>";
                    echo "<td>".$user_data['instrutor']."</td>";

                }
                
            ?>
        </tbody>
  
    </table>

    </div>




</body>
</html>