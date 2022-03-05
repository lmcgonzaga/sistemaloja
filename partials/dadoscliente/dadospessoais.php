<?php require("./conect.php"); ?>



<form id="listdados" name="listdados">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $linhacliente['nomepessoa']; ?>" disabled>
            </div>
            <div class="form-group col-xl-6">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" id="sobrenome" name="sobrenome" class="form-control" value="<?php echo $linhacliente["sobrenomepessoa"]; ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="genero">G&ecirc;nero</label>
                <input type="text" id="genero" name="genero" class="form-control" value="<?php echo $linhacliente["genero"]; ?>" disabled>

            </div>

            <div class="form-group col-xl-6">
                <label for="data-nascimento">Data de Nascimento</label>
                <input type="date" id="data-nascimento" name="data-nascimento" class=" form-control form-control" value="<?php echo $linhacliente["datanascimento"]; ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xl-6">
                <label for="tipo-doc1">Identidade</label>
                <input type="text" id="tipo-doc1" name="tipo-doc1" class="form-control" value="<?php echo $linhacliente["identidade"]; ?>" disabled>
            </div>
            <div class="form-group col-xl-6">
                <label for="doc1">CPF</label>
                <input type="text" id="doc1" name="doc1" class="form-control" value="<?php echo $linhacliente["cpf"]; ?>" disabled>
            </div>
        </div>