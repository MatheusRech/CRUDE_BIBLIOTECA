<?php

include('../config.php');
include('../functions.php');

if (!isset($_POST['ocorrencia'])) {
    echo "Você deve escolher um tipo de ocorrência";
} else if(verificaIdUsuario($_POST['idpessoa'])){
    echo "É necessario um id de pessoa valido";
} else if($_POST['resumo'] == ""){
    echo "É necessario explicar o ocorrido";
}

$ocorrencia = $_POST['ocorrencia'];
$id = $_POST['idpessoa'];
$resumo = $_POST['resumo'];
$condominio = $_POST['condominio'];

$sql = "INSERT INTO ocorrencias (descricao, id_status, id_tipo, id_condominio, id_condomino) VALUES ('$resumo', 1, $ocorrencia, $condominio, $id)";

if($mysqli->query($sql)) {
    echo "Ocorrência cadastrada!";
} else {
    echo "Erro ao cadastrar a ocorrência!";
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='menu.php'">Voltar</button>
