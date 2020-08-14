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
            <label>Tipo de ocorrencia:</label><br>
            <input type="radio" id="roubo" name="ocorrencia" value="0">
            <label for="roubo">Roubo</label><br>
            <input type="radio" id="barulho" name="ocorrencia" value="1">
            <label for="barulho">Perturbação de sossego</label><br>
            <input type="radio" id="cachorro" name="ocorrencia" value="2">
            <label for="cachorro">Teste</label><br>
            <br><br>
            <label>Descrição:</label>
            <textarea id="resumo" name="resumo" required="true" maxlength="500"></textarea>
            <br><br>
            <button type="submit">Cadastrar</button>
            <button type="button" onclick="location.href='../index.php'">Voltar</button>
        </form>
    </body>
</html>