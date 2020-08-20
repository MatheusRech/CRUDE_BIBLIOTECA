<?php

include('../config.php');

function verificaIdUsuario($id){
    if($id == ""){
        return false;
    }

    if(!is_int($id)){
        return false;
    }

    $sql = "SELECT id FROM condominos WHERE id = $id)";

    if(!$mysqli->query($sql)) {
        return false;
    }

    return true;
}

function verificarOcorrencia($id){

    if($id == ""){
        return false;
    }

    if(!is_int($id)){
        return false;
    }

    $sql = "SELECT id FROM ocorrencias WHERE id = $id)";

    if(!$mysqli->query($sql)) {
        return false;
    }

    return true;

}
