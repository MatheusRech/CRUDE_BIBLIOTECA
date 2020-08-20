<?php include('../config.php');?>

<!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Sistema muito louco de uma empresa muito louca</title>
    </head>
    <body>
        <center><h1>Cadastro de nova ocorrência</h1></center>
        <form action="controller.php" method="post">
            <label>ID de pessoa:</label>
            <input type="number" id="idpessoa" name="idpessoa" required="true" maxlength="11">
            <br><br>
            <label>Condominio:</label>
            <input type="number" id="condominio" name="condominio" required="true">
            <br><br>
            <label>Tipo de ocorrencia:</label><br>
            <?php
                $sql = "SELECT * FROM tipo_ocorrencia";
                if($result = $mysqli->query($sql)) {
                    for($i=0; $i < mysqli_num_rows($result); $i++){
                        $row = $result->fetch_assoc();
                        echo "<input type=\"radio\" id=\"" . $row['descrição']. "\" name=\"ocorrencia\" value=\"" . $row['id'] . "\">";
                        echo "<label for=\"" . $row['descrição'] . "\">" . $row['descrição'] . "</label><br>";
                    }
                }else{
                    echo "Erro na leitura do banco de dados, tente novamente!";
                }
            ?>
            <label>Descrição:</label>
            <textarea id="resumo" name="resumo" required="true" maxlength="500"></textarea>
            <br><br>
            <button type="submit">Cadastrar</button>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
        </form>
    </body>
</html>