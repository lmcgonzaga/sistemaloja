<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/bootstrap.css">
    <link rel="stylesheet" href="./_css/style.css">
    <title>Cadastrar Cliente</title>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="card card-primary card-outline">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }


        ?>
        <div class="card-header">
            <h3 class="card-title">Dados do cliente para Cadastro</h3>
        </div>
        <form method="POST" action="actions/addclient.php" id="new-client">
            <div class="card-body">
                <?php include("partials/forms/dadospessoais.php") ?>
                <hr class="mb-4 mt-4" name="enderecos">
                <?php include("partials/forms/endereco.php") ?>
                <hr class="mb-4 mt-4">
                <?php include("partials/forms/contatos.php") ?>
                <div class="row float-right">
                    <div class="col-12 mb-4">

                    </div>
                </div>

            </div>
            <input type="submit" value="Cadastrar" name="cadClient">
        </form>
    </div>




</body>

</html>