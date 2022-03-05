<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo $_SESSION['cargo'] ?> </title>
</head>

<body>

    <div class="container-fluid">
        Bem Vindo <?php echo $_SESSION['nomepessoa'] . " " . $_SESSION['sobrenomepessoa']; ?>
    </div>

    <footer><?php include("footer.php") ?></footer>
</body>

</html>