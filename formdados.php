<?php
include_once "conect.php";


?>


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/bootstrap.css">
    <link rel="stylesheet" href="_css/style.css">
    <title>Dados do cliente</title>
</head>

<body>
    <header><?php include("header.php"); ?></header>
    <div class="container">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Dados do cliente </h3>
            </div>
            <form id="listdados" name="listdados">
                <div class="card-body">
                    <?php include("./partials/dadoscliente/dadospessoais.php") ?>
                    <hr class="mb-4 mt-4" name="enderecos">
                    <?php include("./partials/dadoscliente/endereco.php") ?>
                    <hr class="mb-4 mt-4">
                    <?php include("./partials/dadoscliente/contatoscliente.php") ?>
                    <hr class="mb-4 mt-4">
                    <div class="row float-right">
                        <div class="col-12 mb-4">
                            <input type="button" class="btn alert-dark alert-link" value="Atualizar dados">
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</body>

</html>