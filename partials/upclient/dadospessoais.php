<?php require("./conect.php"); ?>



<form id="updados" name="updados" action="" method="POST">
    <div class="card-body" id="dadospessoais">
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="nome">Nome</label>
                <input type="text" id="nomepessoa" name="nomepessoa" class="form-control" value="<?php if (isset($dados['nomepessoa'])) {
                                                                                                        echo $dados['nomepessoa'];
                                                                                                    } elseif (isset($linhacliente['nomepessoa'])) {
                                                                                                        echo $linhacliente['nomepessoa'];
                                                                                                    } ?>">
            </div>
            <div class="form-group col-xl-6">
                <label for="sobrenomepessoa">Sobrenome</label>
                <input type="text" id="sobrenomepessoa" name="sobrenomepessoa" class="form-control" value="<?php if (isset($dados['sobrenomepessoa'])) {
                                                                                                                echo $dados['sobrenomepessoa'];
                                                                                                            } elseif (isset($linhacliente['sobrenomepessoa'])) {
                                                                                                                echo $linhacliente['sobrenomepessoa'];
                                                                                                            } ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="genero">Gênero</label>
                <input type="text" id="genero" name="genero" class="form-control" value="<?php if (isset($dados['genero'])) {
                                                                                                echo $dados['genero'];
                                                                                            } elseif (isset($linhacliente['genero'])) {
                                                                                                echo $linhacliente['genero'];
                                                                                            } ?>">
            </div>

            <div class="form-group col-xl-6">
                <label for="datanascimento">Data de Nascimento</label>
                <input type="date" id="datanascimento" name="datanascimento" class=" form-control form-control" value="<?php if (isset($dados['datanascimento'])) {
                                                                                                                            echo $dados['datanascimento'];
                                                                                                                        } elseif (isset($linhacliente['datanascimento'])) {
                                                                                                                            echo $linhacliente['datanascimento'];
                                                                                                                        } ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="identidade">Identidade</label>
                <input type="text" id="identidade" name="identidade" class="form-control" value="<?php if (isset($dados['identidade'])) {
                                                                                                        echo $dados['identidade'];
                                                                                                    } elseif (isset($linhacliente['identidade'])) {
                                                                                                        echo $linhacliente['identidade'];
                                                                                                    } ?>">
            </div>
            <div class="form-group col-xl-6">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control" value="<?php if (isset($dados['cpf'])) {
                                                                                        echo $dados['cpf'];
                                                                                    } elseif (isset($linhacliente['cpf'])) {
                                                                                        echo $linhacliente['cpf'];
                                                                                    } ?>">
            </div>
        </div>