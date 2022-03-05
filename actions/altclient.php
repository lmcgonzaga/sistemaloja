<?php
session_start();
if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
    require("conect.php");
    $cargofunc = $_SESSION["usuario"][3];
    $nomefunc = $_SESSION["usuario"][0];
    $sobrenomefunc = $_SESSION["usuario"][1];
} else {
}
?>
<?php include("../partials/header.php"); ?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/bootstrap.css">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Dados do cliente</title>
</head>

<body>
    <?php if ($cargofunc) : ?>

        <?php
        $queryclientes = $conexao->prepare("select * from cliente clie left join pessoa p on p.idpessoa = clie.idpessoa left join pessoa_endereco pe on p.idpessoa = pe.idpessoa left join endereco e on pe.idendereco = e.idendereco ;");
        $queryclientes->execute();

        $qclientes = $queryclientes->fetchAll(PDO::FETCH_ASSOC);

        for ($i = 0; $i < sizeof($qclientes); $i++) :
            $listclientes = $qclientes[$i];
        ?>

        <?php endfor; ?>

    <?php endif; ?>


    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Dados do cliente </h3>
        </div>
        <form id="listdados" name="listdados">
            <div class="card-body">
                <?php include("../partials/dadoscliente/dadospessoais.php") ?>
                <hr class="mb-4 mt-4" name="enderecos">
                <?php include("../partials/dadoscliente/endereco.php") ?>
                <hr class="mb-4 mt-4">
                <?php include("../partials/dadoscliente/contatoscliente.php") ?>
                <div class="row float-right">
                    <div class="col-12 mb-4">

                    </div>
                </div>

            </div>

        </form>
    </div>




</body>

</html>