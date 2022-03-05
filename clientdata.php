<?php
ob_start();
include_once "./conect.php";
include_once "./header.php";

$idcliente = filter_input(INPUT_GET, "id_cliente", FILTER_SANITIZE_NUMBER_INT);
$idpessoa = filter_input(INPUT_GET, "id_pessoa", FILTER_SANITIZE_NUMBER_INT);


if (empty($idpessoa)) {
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>";
    header("Location:./listcliente.php");
    exit();
}

?>
<?php
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

if (($resultcliente) and ($resultcliente->rowCount() != 0)) {
    $linhacliente = $resultcliente->fetch(PDO::FETCH_ASSOC);
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>";
    header("Location:./listcliente.php");
}
extract($linhacliente);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<div class="container row-cols-auto">
    <div class="card card-primary card-outline ">
        <div class="card-header list-group-item-dark">
            <h3 class="card-title">Dados de <?php echo $linhacliente['nomepessoa'] . ' ' .  $linhacliente['sobrenomepessoa']; ?> </h3>
        </div>
        <div class="row row-cols-auto" style="margin-top: 15px;">
            <div class="col-6 mb-4">
                <a href="./updata.php?id_pessoa=<?php echo $linhacliente['idpessoa'] ?>" class="btn alert-primary alert-link">Atualizar</a>
            </div>
            <div class="col-6 mb-4">
                <a href="./actions/excludeclient.php?id_pessoa=<?php echo $linhacliente['idpessoa'] ?>" class="btn alert-danger alert-link" role="danger">Excluir</a>
            </div>
        </div>
        <form id="listdados" name="listdados">
            <div class="card-body">
                <?php include("./partials/dadoscliente/dadospessoais.php") ?>
                <hr class="mb-4 mt-4" name="enderecos">
                <?php include("./partials/dadoscliente/endereco.php") ?>
                <hr class="mb-4 mt-4">
                <?php include("./partials/dadoscliente/contatoscliente.php") ?>
                <hr class="mb-4 mt-4">
            </div>

        </form>
    </div>
</div>

<body>

</body>

</html>