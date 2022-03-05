<?php

/* Credenciais do banco de dados. */
$server = "localhost";
$usuariodb = "ludwig_gonzaga";
$senhadb = "SierraGolf@2020";
$bancodados = "minhaloja";
/* Teste de conexão com o banco de dados */
try {
    $conexao = new PDO("mysql:host=$server;dbname=$bancodados", $usuariodb, $senhadb);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $errodb) {
    echo "Erro de Conexão: {$errodb->getMessage()}";
    $conexao = null;
}
