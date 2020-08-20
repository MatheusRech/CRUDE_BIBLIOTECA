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

$id = $_POST['id'];
$ocorrencia = $_POST['ocorrencia'];
$resumo = $_POST['resumo'];
$condominio = $_POST['condominio'];

$sql = "UPDATE ocorrencias SET descricao = '$resumo', id_tipo = '$ocorrencia', id_condominio='$condominio' where id=" . $id;

if($mysqli->query($sql)) {
    echo "Ocorrência alterada!";
} else {
    echo "Erro ao alterar a ocorrência!";
    echo $mysqli->error;
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='menu.php'">Voltar</button>