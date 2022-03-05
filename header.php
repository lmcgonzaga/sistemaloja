<?php
session_start();
ob_start();
include_once("conect.php");

if ((!isset($_SESSION['nomepessoa'])) and (!isset($_SESSION['sobrenomepessoa']))) {
    $_SESSION['msg'] = "<div class='alert-primary errologin'>Necessário realizar login para acesso ao Sistema.</div>";
    header("Location: index.php");
}
?>
<html>

<head>
    <meta charset="utf-8">
    <link href="./_css/bootstrap.css" rel="stylesheet" />
    <link href="./_css/style.css" rel="stylesheet" />
    <script src="./_js/bootstrap.js"></script>
</head>

<body>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestão de Clientes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listcliente.php">Listar Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="newclient.php">Cadastrar Cliente</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./actions/logout.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid">

        <div class="principal">