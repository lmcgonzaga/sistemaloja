<?php
session_start();
ob_start();
include_once("conect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="_css/bootstrap.css" rel="stylesheet" />
    <link href="_css/style.css" rel="stylesheet" />
    <script src="_js/bootstrap.js"></script>
    <title>Gestão de Clientes</title>
</head>

<body>
    <div class="container" style="margin-top: 200px;">
        <h1>Bem vindo!</h1>
        <?php
        $dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($dadoslogin['btnAcessar'])) {
            //var_dump($dadoslogin);
            $query_usuer = "SELECT func.idfuncionario, p.nomepessoa, p.sobrenomepessoa, func.emailfuncionario , func.senhafuncionario,  func.cargo, func.statusfuncionario 
                            FROM funcionario func 
                            LEFT JOIN pessoa p ON p.idpessoa = func.idpessoa 
                            WHERE emailfuncionario =:user
                            LIMIT 1";
            $result_user = $conexao->prepare($query_usuer);
            $result_user->bindParam(':user', $dadoslogin['login']);
            $result_user->execute();

            if (($result_user) and ($result_user->rowCount() != 0)) {
                $row_usuario = $result_user->fetch(PDO::FETCH_ASSOC);
                //var_dump($row_usuario);
                if (password_verify($dadoslogin['senha'], $row_usuario['senhafuncionario'])) {
                    //echo "<div class='alert-success errologin'>Usuário logado";
                    $_SESSION['idfuncionario'] = $row_usuario['idfuncionario'];
                    $_SESSION['nomepessoa'] = $row_usuario['nomepessoa'];
                    $_SESSION['sobrenomepessoa'] = $row_usuario['sobrenomepessoa'];
                    $_SESSION['cargo'] = $row_usuario['cargo'];
                    $_SESSION['statusfuncionario'] = $row_usuario['statusfuncionario'];
                    header("Location: dashboard.php");
                } else {
                    $_SESSION['msg'] = "<div class='alert-danger errologin'>Erro: Usuário e/ou Senha inválidos!</div>";
                }
            } else {
                $_SESSION['msg'] = "<div class='alert-danger errologin'>Erro: Usuário e/ou Senha inválidos!</div>";
            }
        }
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form id="formlogin" action="" method="POST" class="form-control card">

            <div class="row mb-3">
                <label for="password" class="form-label col-sm-2 col-form-label">Insira seu e-mail</label>
                <input type="email" name="login" id="login" placeholder="mail@mail.com.br">
            </div>
            <div class="row mb-3">
                <label for="password" class="form-label col-sm-2 col-form-label">Insira sua senha</label>
                <input type="password" name="senha" id="senha" placeholder="Insira sua senha">
            </div>

            <input type="submit" id="btnAcessar" name="btnAcessar" class="btn alert-dark alert-link" value="Acessar">
        </form>
        <p class="text-center text-danger">
            <?php if (isset($_SESSION['loginErro'])) {
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
    </div>
</body>

</html>