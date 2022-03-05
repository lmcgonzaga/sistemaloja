<?php
session_start();
ob_start();
unset($_SESSION['idfuncionario'], $_SESSION['nomepessoa'], $_SESSION['sobrenomepessoa']);
$_SESSION['msg'] = "<div class='alert-warning errologin'>Deslogado com sucesso, tenha um ótimo dia! :-)</div>";
header("Location: ../index.php");
