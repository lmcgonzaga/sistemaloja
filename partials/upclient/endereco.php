    <?php require("./conect.php"); ?>

    <div class="row">
        <div class="form-group col-xl-4">
            <label for="tipologradouro">Tipo Logradouro</label>
            <select name="tipologradouro" id="tipologradouro" class="form-select">
                <option value="<?php if (isset($dados['tipologradouro'])) {
                                    echo $dados['tipologradouro'];
                                } elseif (isset($linhacliente['tipologradouro'])) {
                                    echo $linhacliente['tipologradouro'];
                                } ?>" selected disabled>
                    <?php if (isset($dados['tipologradouro'])) {
                        echo $dados['tipologradouro'];
                    } elseif (isset($linhacliente['tipologradouro'])) {
                        echo $linhacliente['tipologradouro'];
                    } ?>
                </option>
                <option value="Aeroporto">Aeroporto</option>
                <option value="Alameda">Alameda</option>
                <option value="Área">Área</option>
                <option value="Avenida">Avenida</option>
                <option value="Campo">Campo</option>
                <option value="Chácara">Chácara</option>
                <option value="Colônia">Colônia</option>
                <option value="Condomínio">Condomínio</option>
                <option value="Conjunto">Conjunto</option>
                <option value="Distrito">Distrito</option>
                <option value="Esplanada">Esplanada</option>
                <option value="Estação">Estação</option>
                <option value="Estrada">Estrada</option>
                <option value="Favela">Favela</option>
                <option value="Fazenda">Fazenda</option>
                <option value="Feira">Feira</option>
                <option value="Jardim">Jardim</option>
                <option value="Ladeira">Ladeira</option>
                <option value="Lago">Lago</option>
                <option value="Lagoa">Lagoa</option>
                <option value="Largo">Largo</option>
                <option value="Loteamento">Loteamento</option>
                <option value="Morro">Morro</option>
                <option value="Núcleo">Núcleo</option>
                <option value="Parque">Parque</option>
                <option value="Passarela">Passarela</option>
                <option value="Pátio">Pátio</option>
                <option value="Praça">Praça</option>
                <option value="Quadra">Quadra</option>
                <option value="Recanto">Recanto</option>
                <option value="Residencial">Residencial</option>
                <option value="Rodovia">Rodovia</option>
                <option value="Rua">Rua</option>
                <option value="Setor">Setor</option>
                <option value="Sítio">Sítio</option>
                <option value="Travessa">Travessa</option>
                <option value="Trecho">Trecho</option>
                <option value="Trevo">Trevo</option>
                <option value="Vale">Vale</option>
                <option value="Vereda">Vereda</option>
                <option value="Via">Via</option>
                <option value="Viaduto">Viaduto</option>
                <option value="Viela">Viela</option>
                <option value="Vila">Vila</option>
            </select>
        </div>


        <div class="form-group col-xl-4">
            <label for="logradouro">Endereço</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php if (isset($dados['logradouro'])) {
                                                                                                    echo $dados['logradouro'];
                                                                                                } elseif (isset($linhacliente['logradouro'])) {
                                                                                                    echo $linhacliente['logradouro'];
                                                                                                } ?>">
        </div>
        <div class="form-group col-xl-4">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="<?php if (isset($dados['complemento'])) {
                                                                                                    echo $dados['complemento'];
                                                                                                } elseif (isset($linhacliente['complemento'])) {
                                                                                                    echo $linhacliente['complemento'];
                                                                                                } ?>">
        </div>
        <div class="form-group col-xl-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="codigopostal" name="codigopostal" value="<?php if (isset($dados['codigopostal'])) {
                                                                                                        echo $dados['codigopostal'];
                                                                                                    } elseif (isset($linhacliente['codigopostal'])) {
                                                                                                        echo $linhacliente['codigopostal'];
                                                                                                    } ?>">
        </div>
    </div>


    <div class="row">
        <div class="form-group col-xl-4">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php if (isset($dados['bairro'])) {
                                                                                            echo $dados['bairro'];
                                                                                        } elseif (isset($linhacliente['bairro'])) {
                                                                                            echo $linhacliente['bairro'];
                                                                                        } ?>">
        </div>
        <div class="form-group col-xl-4">
            <label for="ciade">Munícipio</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php if (isset($dados['cidade'])) {
                                                                                            echo $dados['cidade'];
                                                                                        } elseif (isset($linhacliente['cidade'])) {
                                                                                            echo $linhacliente['cidade'];
                                                                                        } ?>">
        </div>
        <div class="form-group col-xl-4">
            <label for="unidadefederacao">Estado</label>
            <input type="text" class="form-control" id="unidadefederacao" name="unidadefederacao" value="<?php if (isset($dados['unidadefederacao'])) {
                                                                                                                echo $dados['unidadefederacao'];
                                                                                                            } elseif (isset($linhacliente['unidadefederacao'])) {
                                                                                                                echo $linhacliente['unidadefederacao'];
                                                                                                            } ?>">
        </div>
    </div>