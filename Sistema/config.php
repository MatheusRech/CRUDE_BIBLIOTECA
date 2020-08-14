<?php

$mysqli = new mysqli("localhost", "root", "roletador44", "condominio");

if (mysqli_connect_error()) {
    echo "Erro ao conectar com o BD: " . mysqli_connect_error();
    exit();
}