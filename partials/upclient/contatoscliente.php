<div class="row">
    <div class="form-group col-xl-12">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="emailcliente" name="emailcliente" value="<?php if (isset($dados['emailcliente'])) {
                                                                                                    echo $dados['emailcliente'];
                                                                                                } elseif (isset($linhacliente['emailcliente'])) {
                                                                                                    echo $linhacliente['emailcliente'];
                                                                                                } ?>">
    </div>
</div>
<div class="row">
    <div class="form-group col-xl-1">
        <label for="ddd">DDD</label>
        <input type="text" class="form-control" id="ddd" name="ddd" value="<?php if (isset($dados['ddd'])) {
                                                                                echo $dados['ddd'];
                                                                            } elseif (isset($linhacliente['ddd'])) {
                                                                                echo $linhacliente['ddd'];
                                                                            } ?>">
    </div>
    <div class="form-group col-xl-4">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php if (isset($dados['telefone'])) {
                                                                                            echo $dados['telefone'];
                                                                                        } elseif (isset($linhacliente['telefone'])) {
                                                                                            echo $linhacliente['telefone'];
                                                                                        } ?>">

    </div>
    <div class="form-group col-xl-1">
        <label for="ddd2">DDD</label>
        <input type="text" class="form-control" id="ddd2" name="ddd2" value="<?php if (isset($dados['ddd2'])) {
                                                                                    echo $dados['ddd2'];
                                                                                } elseif (isset($linhacliente['ddd2'])) {
                                                                                    echo $linhacliente['ddd2'];
                                                                                } ?>">
    </div>
    <div class="form-group col-xl-2">
        <label for="telefone2">Telefone</label>
        <input type="text" class="form-control" id="telefone2" name="telefone2" value="<?php if (isset($dados['telefone2'])) {
                                                                                            echo $dados['telefone2'];
                                                                                        } elseif (isset($linhacliente['telefone2'])) {
                                                                                            echo $linhacliente['telefone2'];
                                                                                        } ?>">
    </div>
</div>