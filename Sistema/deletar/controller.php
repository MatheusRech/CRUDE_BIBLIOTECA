<?php

include('../config.php');
include('../functions.php');

if (verificarOcorrencia($_GET['id'])) {
    echo "O id deve ser valido";
    exit("O id deve ser valido");
}

$id = $_GET['id'];

$sql = "DELETE FROM `condominio`.`ocorrencias` WHERE `id`='$id';";

if($mysqli->query($sql)) {
    echo "Ocorrência deletada!";
} else {
    echo "Erro ao deletar a ocorrência!";
}

$mysqli->close();
?>
<br>
<button type="button" onclick="location.href='menu.php'">Voltar</button>
