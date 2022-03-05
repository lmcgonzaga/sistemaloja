<?php
session_start();
ob_start();
include_once "./conect.php";

$idpessoa = filter_input(INPUT_GET, "id_pessoa", FILTER_SANITIZE_NUMBER_INT);
//var_dump($idpessoa);

if (empty($idpessoa)) {
    $_SESSION['msg'] = "<div class='alert-danger errologin;'>Cliente não localizado!</div>";
    header("Location: ../listcliente.php");
}

$qclient = "SELECT * FROM pessoa p LEFT JOIN cliente clie ON clie.idpessoa = p.idpessoa LEFT JOIN pessoa_endereco pe ON p.idpessoa = pe.idpessoa LEFT JOIN endereco e ON pe.idendereco = e.idendereco 
WHERE p.idpessoa = $idpessoa LIMIT 1";
$resultclient = $conexao->prepare($qclient);
$resultclient->execute();
$linhacliente = $resultclient->fetch(PDO::FETCH_ASSOC);

//var_dump($linhacliente);
$idpessoaendereco = $linhacliente['idpessoaendereco'];
$idcliente = $linhacliente['idcliente'];
$idendereco = $linhacliente['idendereco'];
$idpessoa = $linhacliente['idpessoa'];

//bloco queries de exclusão

if (($resultclient) and ($resultclient->rowCount() != 0)) {
    //---------------------------------------------------------------------------------------------------------------------
    //QUERY EXCLUIR NA TABELA pessoa_endereco

    $qdelpesend = "DELETE FROM pessoa_endereco WHERE idpessoaendereco = $idpessoaendereco";
    $qdelpesend = $conexao->prepare($qdelpesend);
    $resultqdelpesend = $qdelpesend;

    //validação exclusão pessoa_endereço
    if (($resultqdelpesend) and ($resultqdelpesend->rowCount() != 0)) {
        $qdelclient = "DELETE FROM pessoa_endereco WHERE idpessoaendereco = $idpessoaendereco";
        $qdelclient = $conexao->prepare($qdelclient);

        if ($qdelclient->execute()) {
            $_SESSION['msg'] = "<p class='alert-succes errologin;'>Endereço apagado com sucesso!</p>";
        }
    }
    //---------------------------------------------------------------------------------------------------------------------
    //QUERY EXCLUIR NA TABELA cliente

    $qdelclient = "DELETE FROM cliente WHERE idcliente = $idcliente";
    $qdelclient = $conexao->prepare($qdelclient);
    $resultqdelclient = $qdelclient;

    //validação exclusão cliente
    if (($resultclient) and ($resultclient->rowCount() != 0)) {
        $qdelclient = "DELETE FROM cliente WHERE idcliente = $idcliente";
        $qdelclient = $conexao->prepare($qdelclient);

        if ($qdelclient->execute()) {
            $_SESSION['msg'] = "<p class='alert-succes errologin;'>Cliente apagado com sucesso!</p>";
        }
    }
    //---------------------------------------------------------------------------------------------------------------------
    //QUERY EXCLUIR NA TABELA endereço

    $qdelend = "DELETE FROM endereco WHERE idendereco = $idendereco";
    $qdelend = $conexao->prepare($qdelend);
    $resultqdelend = $qdelend;

    //validação exclusão endereco
    if (($resultclient) and ($resultclient->rowCount() != 0)) {
        $qdelclient = "DELETE FROM endereco WHERE idendereco = $idendereco";
        $qdelclient = $conexao->prepare($qdelclient);

        if ($qdelclient->execute()) {
            $_SESSION['msg'] = "<p class='alert-succes errologin;'>Endereço apagado com sucesso!</p>";
        }
    }
    //---------------------------------------------------------------------------------------------------------------------
    //QUERY EXCLUIR NA TABLEA pessoa
    $qdelpess = "DELETE FROM pessoa WHERE idpessoa = $idpessoa";
    $qdelpess = $conexao->prepare($qdelpess);
    $resultqdelpess = $qdelpess;

    //validação exclusão cliente
    if (($resultclient) and ($resultclient->rowCount() != 0)) {
        $qdelclient = "DELETE FROM pessoa WHERE idpessoa = $idpessoa";
        $qdelclient = $conexao->prepare($qdelclient);

        if ($qdelclient->execute()) {
            $_SESSION['msg'] = "<p class='alert-succes errologin;'>Pessoa apagado com sucesso!</p>";
        }
    }
    header("Location: ../listcliente.php");
    //---------------------------------------------------------------------------------------------------------------------
    //fim if inicial     
}
