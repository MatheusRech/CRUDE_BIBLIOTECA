<?php

include('../config.php');

if (!isset($_POST['ocorrencia'])) {
    echo "Você deve escolher um tipo de ocorrência";
} else if(verificaIdUsuario($_POST['idpessoa'])){
    echo "É necessario um id de pessoa valido";
} else if($_POST['resumo'] == ""){
    echo "É necessario explicar o ocorrido";
}

$sql = "INSERT INTO ocorrencias (descricao, tipo, status, id_condomino) VALUES ('$titulo', '$resumo', $estoque_atual)";

if($mysqli->query($sql)) {
    echo "Ocorrência cadastrada!";
} else {
    echo "Erro ao adicionar o livro, contate o administrador do Sistema!";
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='menu.php'">Voltar</button>
