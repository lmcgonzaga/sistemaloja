<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="_css/bootstrap.css" rel="stylesheet" />
    <link href="_css/style.css" rel="stylesheet" />
    <script src="_js/bootstrap.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="card2">
        <div>
            <h2>Favor insira os dados abaixo para acesso</h2>
        </div>
        <form id="formlogin" action="actions/login.php" method="POST" class="form-control card" onsubmit="return validar_campos();">

            <div class="row mb-3">
                <label for="password" class="form-label col-sm-2 col-form-label">Insira seu e-mail</label>
                <input type="email" name="login" id="login" placeholder="mail@mail.com.br">
            </div>
            <div class="row mb-3">
                <label for="password" class="form-label col-sm-2 col-form-label">Insira sua senha</label>
                <input type="password" name="password" id="password" placeholder="Insira sua senha">
            </div>
            
            <input type="submit" id="btnAcessar" class="btn alert-dark alert-link" value="Acessar">
        </form>
        <p class="text-center text-danger">
            <?php if (isset($_SESSION['loginErro'])) {
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
            ?>
        </p>
    </div>
    </div>
</body>

</html>