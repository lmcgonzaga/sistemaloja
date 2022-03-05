    <?php require("./conect.php"); ?>

    <div class="row">
        <div class="form-group col-xl-4">
            <label for="logrdouro">Endereço</label>
            <input type="text" class="form-control" id="logrdouro" name="logrdouro" value="<?php echo $linhacliente["tipologradouro"] . ' ' . $linhacliente["logradouro"]; ?>" disabled>
        </div>
        <div class="form-group col-xl-4">
            <label for="cep">Complemento</label>
            <input type="text" class="form-control" id="nome-num" name="cep" value="<?php echo $linhacliente["complemento"]; ?>" disabled>
        </div>
        <div class="form-group col-xl-4">
            <label for="postal-code">CEP</label>
            <input type="text" class="form-control" id="cod-postale" name="cod-postal" value="<?php echo $linhacliente["codigopostal"]; ?>" disabled>
        </div>
    </div>


    <div class="row">
        <div class="form-group col-xl-4">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $linhacliente["bairro"]; ?>" disabled>
        </div>
        <div class="form-group col-xl-4">
            <label for="ciade">Munícipio</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $linhacliente["cidade"]; ?>" disabled>
        </div>
        <div class="form-group col-xl-4">
            <label for="unidadefederacao">Estado</label>
            <input type="text" class="form-control" id="unidadefederacao" name="unidadefederacao" value="<?php echo $linhacliente["unidadefederacao"]; ?>" disabled>
        </div>
    </div>