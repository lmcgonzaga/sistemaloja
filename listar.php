<?php
include_once "conect.php";


$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

if (!empty($pagina)) {

    //calcular o inicio da paginacao
    $qtdrespg = 10; //quantidade por página
    $inicio = ($pagina * $qtdrespg) - $qtdrespg;



    $queryclientes = "SELECT p.idpessoa,clie.idcliente,e.idendereco,pe.idpessoaendereco ,p.nomepessoa ,p.sobrenomepessoa,p.datanascimento ,e.cidade ,e.unidadefederacao 
    FROM cliente clie 
    LEFT JOIN pessoa p 
    ON p.idpessoa = clie.idpessoa 
    LEFT JOIN pessoa_endereco pe 
    ON p.idpessoa = pe.idpessoa 
    LEFT JOIN endereco e 
    ON pe.idendereco = e.idendereco 
    ORDER BY p.nomepessoa ASC 
LIMIT $inicio, $qtdrespg";
    $qclientes = $conexao->prepare($queryclientes);
    $qclientes->execute();

    $dadoslistcliente = "

<div class='table-responsive'>
<table class='table table-striped table-hover display' id='listclientes'>
    <thead>
        <tr>

            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Data de Nascimento</td>
            <td>Cidade</td>
            <td>Estado</td>

        </tr>
    </thead>
    <tbody>

";
    while ($rowcliente = $qclientes->fetch(PDO::FETCH_ASSOC)) {
        extract($rowcliente);
        $dadoslistcliente .= "<tr>

                                <td>$nomepessoa</td>
                                <td>$sobrenomepessoa</td>
                                <td>$datanascimento</td>
                                <td>$cidade</td>
                                <td>$unidadefederacao<td>
                                <td>
                                <a class='btn btn-primary btn-md' href='clientdata.php?id_pessoa=$idpessoa'  >Visualizar</a>
                                </button>
                                </td>
                            </tr>";
    }

    $dadoslistcliente .= "

</tbody>
</table>
</div>
";
    //paginacao - total clientes
    $querypg = "SELECT COUNT(idcliente) AS num_result FROM cliente";
    $resultpg = $conexao->prepare($querypg);
    $resultpg->execute();
    $rowpg = $resultpg->fetch(PDO::FETCH_ASSOC);

    //quantidade de paginas
    $qtdpg = ceil($rowpg['num_result'] / $qtdrespg);

    $max_links = 2;

    $dadoslistcliente .= '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $dadoslistcliente .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios(1)'>Primeira</a></li>";


    for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if ($pag_ant >= 1) {
            $dadoslistcliente .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios($pag_ant)' >$pag_ant</a></li>";
        }
    }

    $dadoslistcliente .= "<li class='page-item active'><a class='page-link' href='#'>$pagina</a></li>";

    for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if ($pag_dep <= $qtdpg) {
            $dadoslistcliente .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios($pag_dep)'>$pag_dep</a></li>";
        }
    }


    $dadoslistcliente .= "<li class='page-item'><a class='page-link' href='#' onclick='listarUsuarios($qtdpg)'>Última</a></li>";
    $dadoslistcliente .= '</ul></nav>';

    echo $dadoslistcliente;
} else {
    echo "<div class='alert alert-danger' role='alert'>Nenhum cliente localizado.</div>";
}
