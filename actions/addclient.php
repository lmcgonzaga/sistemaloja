<?php
session_start();
ob_start();
include_once "conect.php";


//receber dados formulário
$idfunc = $_SESSION["idfuncionario"];
$dadosnewclt = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//inserir tabela pessoa
if (!empty($dadosnewclt['cadClient'])) {
    $querydadopessoa = "INSERT INTO pessoa
     /*campos banco de dados*/ (nomepessoa, sobrenomepessoa, datanascimento, ddd, telefone, genero, cpf, identidade, ddd2, telefone2) VALUES
     /*campos formulários   */ (:nomepessoa, :sobrenomepessoa, :datanascimento, :ddd, :telefone, :genero, :cpf, :identidade, :ddd2, :telefone2) ";
    $caddadopessoa = $conexao->prepare($querydadopessoa);
    $caddadopessoa->bindParam(':nomepessoa', $dadosnewclt['nomepessoa'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':sobrenomepessoa', $dadosnewclt['sobrenomepessoa'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':datanascimento', $dadosnewclt['datanascimento']);
    $caddadopessoa->bindParam(':ddd', $dadosnewclt['ddd'], PDO::PARAM_INT);
    $caddadopessoa->bindParam(':telefone', $dadosnewclt['telefone'], PDO::PARAM_INT);
    $caddadopessoa->bindParam(':genero', $dadosnewclt['genero'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':cpf', $dadosnewclt['cpf'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':identidade', $dadosnewclt['identidade'], PDO::PARAM_STR);
    $caddadopessoa->bindParam(':ddd2', $dadosnewclt['ddd2'], PDO::PARAM_INT);
    $caddadopessoa->bindParam(':telefone2', $dadosnewclt['telefone2'], PDO::PARAM_INT);
    $caddadopessoa->execute();
    $idpessoa = $conexao->lastInsertId();
    //inserir tabela endereco
    $queryendpessoa = "INSERT INTO endereco
     /*campos banco de dados*/ (tipologradouro, logradouro, complemento, bairro, cidade, unidadefederacao, codigopostal) VALUES
     /*campos formulários   */ (:tipologradouro, :logradouro, :complemento, :bairro, :cidade, :unidadefederacao, :codigopostal) ";
    $cadendpessoa = $conexao->prepare($queryendpessoa);
    $cadendpessoa->bindParam(':tipologradouro', $dadosnewclt['tipologradouro']);
    $cadendpessoa->bindParam(':logradouro', $dadosnewclt['logradouro'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':complemento', $dadosnewclt['complemento']);
    $cadendpessoa->bindParam(':bairro', $dadosnewclt['bairro'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':cidade', $dadosnewclt['cidade'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':unidadefederacao', $dadosnewclt['unidadefederacao'], PDO::PARAM_STR);
    $cadendpessoa->bindParam(':codigopostal', $dadosnewclt['codigopostal'], PDO::PARAM_STR);
    $cadendpessoa->execute();
    $idendereco = $conexao->lastInsertId();
    //inserir tabela pessoa_endereco
    $querypend = "INSERT INTO pessoa_endereco
                                (idpessoa, idendereco) VALUES
                                (:idpessoa, :idendereco)";
    $cadpend = $conexao->prepare($querypend);
    $cadpend->bindParam(':idpessoa', $idpessoa, PDO::PARAM_INT);
    $cadpend->bindParam(':idendereco', $idendereco, PDO::PARAM_INT);
    $cadpend->execute();
    //inserir tabela cliente
    $queryclie = "INSERT INTO cliente
                    (idpessoa, emailcliente, idcadastrante) VALUES
                    (:idpessoa, :emailcliente, :idcadastrante)";
    $cadclie = $conexao->prepare($queryclie);
    $cadclie->bindParam(':idpessoa', $idpessoa, PDO::PARAM_INT);
    $cadclie->bindParam(':emailcliente', $dadosnewclt['emailcliente'], PDO::PARAM_STR);
    $cadclie->bindParam(':idcadastrante', $_SESSION['idfuncionario'], PDO::PARAM_INT);
    $cadclie->execute();

    $_SESSION['msg'] = "<div class='alert-success errologin'>Cliente cadastrado com sucesso</div>";
    header("Location: ../newclient.php");
} else {
    $_SESSION['msg'] = "<div class='alert-danger errologin'>Usuário não cadastrado</div>";
    header("Location: ../newclient.php");
}
