<?php include('../config.php'); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from ocorrencias where id =" . $_GET['id'];
    if($result = $mysqli->query($sql)) {
        $row = $result->fetch_assoc();
        $idcondomino = $row['id_condomino'];
        $idcondominio = $row['id_condominio'];
        $descricao = $row['descricao'];
        $idtipo = $row['id_tipo'];
    }else{
        echo "Erro na leitura do banco de dados, tente novamente!";
        echo $mysqli->error;
    }
}else{
    echo "Informe o id para a busca";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema muito louco de uma empresa muito louca</title>
    </head>
    <body>
        <center><h1>Cadastro de nova ocorrência</h1></center>
        <form action="salvar.php" method="post">

            <label>ID ocorrência:</label>
            <input type="number" id="id" name="id" value="<?php echo $id ?>" readonly>
            <br><br>
            <label>ID de pessoa:</label>
            <input type="number" id="idpessoa" name="idpessoa" required="true" maxlength="11" value="<?php echo $idcondomino ?>" readonly>
            <br><br>
            <label>Condominio:</label>
            <input type="number" id="condominio" name="condominio" required="true" value="<?php echo $idcondominio; ?>">
            <br><br>
            <label>Tipo de ocorrencia:</label><br>
            <?php
            $sql = "SELECT * FROM tipo_ocorrencia";
            if($result = $mysqli->query($sql)) {
                for($i=0; $i < mysqli_num_rows($result); $i++){
                    $row = $result->fetch_assoc();
                    echo "<input type=\"radio\" id=\"" . $row['descrição'] . "\" name=\"ocorrencia\" value=\"" . $row['id'] . "\"";
                    echo ($idtipo == $row['id']) ? "checked" : null;
                    echo ">";
                    echo "<label for=\"" . $row['descrição'] . "\">" . $row['descrição'] . "</label><br>";
                }
            }else{
                echo "Erro na leitura do banco de dados, tente novamente!";
            }
            ?>
            <label>Descrição:</label>
            <textarea id="resumo" name="resumo" maxlength="500" required="true"><?php echo $descricao; ?></textarea>
            <br><br>
            <button type="submit">Alterar</button>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
        </form>
    </body>
</html>