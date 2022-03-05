<?php
session_start();
ob_start();
include_once "conect.php";
$idpessoa = filter_input(INPUT_GET, "id_pessoa", FILTER_SANITIZE_NUMBER_INT);


//receber dados formulário
$idfunc = $_SESSION["idfuncionario"];
$updadosnewclt = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//update tabela pessoa
if (!empty($updadosnewclt['btnUpateData'])) {
    $querydadopessoa = "UPDATE pessoa SET     
    nomepessoa=:nomepessoa,
    sobrenomepessoa=:sobrenomepessoa,
    datanascimento=:datanascimento,
    ddd=:ddd,
    telefone=:telefone,
    genero=:genero,
    cpf=:cpf,
    identidade=:identidade,
    ddd2=:ddd2,
    telefone2=:telefone2 
    WHERE idpessoa=:idpessoa";
    $caddadopessoa = $conexao->prepare($querydadopessoa);
    $caddadopessoa->bindParam(':idpessoa', $updadosnewclt['idpessoa'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':nomepessoa', $updadosnewclt['nomepessoa'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':sobrenomepessoa', $updadosnewclt['sobrenomepessoa'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':datanascimento', $updadosnewclt['datanascimento']);
    $caddadopessoa->bindParam(':ddd', $updadosnewclt['ddd'], PDO::PARAM_INT);
    $caddadopessoa->bindParam(':telefone', $updadosnewclt['telefone'], PDO::PARAM_INT);
    $caddadopessoa->bindParam(':genero', $updadosnewclt['genero'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':cpf', $updadosnewclt['cpf'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':identidade', $updadosnewclt['identidade'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':ddd2', $updadosnewclt['ddd2'], PDO::PARAM_INT);
    $caddadopessoa->bindParam(':telefone2', $updadosnewclt['telefone2'], PDO::PARAM_INT);
    $caddadopessoa->execute();
    //update tabela endereco
    $queryendpessoa = "UPDATE endereco SET
    tipologradouro = :tipologradouro,
    logradouro = :logradouro,
    complemento = :complemento,
    bairro = :bairro,
    cidade = :cidade,
    unidadefederacao = :unidadefederacao,
    codigopostal = :codigopostal
    WHERE idendereco = :idendereco";
    $cadendpessoa = $conexao->prepare($queryendpessoa);
    $cadendpessoa->bindParam(':idendereco', $updadosnewclt['idendereco']);
    $cadendpessoa->bindParam(':tipologradouro', $updadosnewclt['tipologradouro']);
    $cadendpessoa->bindParam(':logradouro', $updadosnewclt['logradouro'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':complemento', $updadosnewclt['complemento']);
    $cadendpessoa->bindParam(':bairro', $updadosnewclt['bairro'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':cidade', $updadosnewclt['cidade'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':unidadefederacao', $updadosnewclt['unidadefederacao'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':codigopostal', $updadosnewclt['codigopostal'], PDO::PARAM_STR);
    $cadendpessoa->execute();
    //update tabela cliente
    $queryclie = "UPDATE cliente SET emailcliente =:emailcliente WHERE idcliente = :idcliente;";
    $cadclie = $conexao->prepare($queryclie);
    $cadclie->bindParam(':idcliente', $updadosnewclt['idcliente']);
    $cadclie->bindParam(':emailcliente', $updadosnewclt['emailcliente'], PDO::PARAM_STR);
    $cadclie->execute();

    $_SESSION['msg'] = "<div class='alert-success errologin'>Cliente atualizado com sucesso</div>";
    header("Location: ../dashboard.php");
} else {
    $_SESSION['msg'] = "<div class='alert-danger errologin'>Cliente não localizado</div>";
    header("Location: ../updata.php");
}
