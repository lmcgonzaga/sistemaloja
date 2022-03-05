<?php require('../actions/conect.php'); ?>
<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (isset($_POST["login"]) && isset($_POST["password"]) && $conexao != null) {
    $query = $conexao->prepare("SELECT func.idfuncionario, p.nomepessoa, p.sobrenomepessoa, func.emailfuncionario , func.cargo, func.statusfuncionario FROM funcionario func left join pessoa p on p.idpessoa = func.idpessoa WHERE emailfuncionario = ? AND senhafuncionario = ?");
    $query->execute(array($_POST["login"], $_POST["password"]));

    if ($query->rowCount()) {
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

        session_start();
        $_SESSION["usuario"] = array($user["idfuncionario"], $user["nomepessoa"], $user["sobrenomepessoa"], $user["sobrenomepessoa"], $user["cargo"], $user["statusfuncionario"]);

        echo "<script>window.location = '../dashboard.php'</script>";
    } else {
        echo "<script>window.location = '../index.php'</script>";
    }
} else {
    echo "<script>window.location = '../index.php'</script>";
} ?>
<?php
$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
?>
