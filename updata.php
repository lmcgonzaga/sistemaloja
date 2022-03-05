<?php
include_once "./header.php";
include_once "./conect.php";
ob_start();
$idcliente = filter_input(INPUT_GET, "id_cliente", FILTER_SANITIZE_NUMBER_INT);
$idpessoa = filter_input(INPUT_GET, "id_pessoa", FILTER_SANITIZE_NUMBER_INT);
$qclientdata = "SELECT *  
                FROM cliente clie 
                left join pessoa p 
                on p.idpessoa = clie.idpessoa 
                left join pessoa_endereco pe 
                on p.idpessoa = pe.idpessoa 
                left join endereco e 
                on pe.idendereco = e.idendereco 
                where p.idpessoa = $idpessoa;";

$resultcliente = $conexao->prepare($qclientdata);
$resultcliente->execute();
$linhacliente = $resultcliente->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente <?php echo $linhacliente['nomepessoa'] . " " . $linhacliente['sobrenomepessoa']; ?></title>
</head>

<div class="container row-cols-auto">
    <div class="card card-primary card-outline ">
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div class="card-header list-group-item-dark">
            <h3 class="card-title">Editar dados de <?php echo $linhacliente['nomepessoa'] . " " . $linhacliente['sobrenomepessoa']; ?> </h3>
        </div>
        <form action="./actions/editclient.php" method="POST">
            <input type="hidden" name="idpessoa" id="idpessoa" value="<?php echo $linhacliente['idpessoa'] ?>">
            <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $linhacliente['idcliente'] ?>">
            <input type="hidden" name="idendereco" id="idendereco" value="<?php echo $linhacliente['idendereco'] ?>">
            <div class="card-body">
                <?php include("./partials/upclient/dadospessoais.php") ?>
                <hr class="mb-4 mt-4" name="enderecos">
                <?php include("./partials/upclient/endereco.php") ?>
                <hr class="mb-4 mt-4">
                <?php include("./partials/upclient/contatoscliente.php") ?>
                <hr class="mb-4 mt-4">
            </div>
            <input type="submit" value="Salvar" class="btn btn-success" name="btnUpateData">
        </form>

    </div>

    <body>

    </body>

</html>