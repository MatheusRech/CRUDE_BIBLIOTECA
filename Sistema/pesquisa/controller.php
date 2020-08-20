<?php include('../config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema muito louco de uma empresa muito louca</title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ocorrência</th>
            </tr>
            <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "select a.id, a.descricao, b.descrição as status, c.descrição as tipo_ocorrencia from ocorrencias a left join status b on (a.id_status = b.id) left join tipo_ocorrencia c on (a.id_tipo = c.id) where a.id_condomino = " . $_GET['id'];
                    if($result = $mysqli->query($sql)) {
                        for($i=0; $i < mysqli_num_rows($result); $i++){
                            $row = $result->fetch_assoc();
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['descricao'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['tipo_ocorrencia'] . "</td>";
                            echo "</tr>";
                        }
                    }else{
                        echo "Erro na leitura do banco de dados, tente novamente!";
                        echo $mysqli->error;
                    }
                }else{
                    echo "Informe o seu id para a busca";
                }
            ?>
        </table>
        <br>
        <button type="button" onclick="location.href='menu.php'">Voltar</button>
    </body>
</html>



