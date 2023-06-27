<div class="container-fluid">
    </section>
    <div class="invoice p-3 mb-3">
        <h4> Dados da Empresa </h4>
        <?php foreach ($empresas as $empresa) { ?>
            <td><p>Designação: <?= $empresa->designacao ?></p></td>
            <td><p>Capital : <?= $empresa->capital ?></p></td>
            <td><p>Email : <?= $empresa->email ?></p></td>
            <td><p>Telefone : <?= $empresa->telefone ?></p></td>
            <td><p>NIF : <?= $empresa->nif ?></p></td>
            <td><p>Morada : <?= $empresa->morada ?></p></td>
            <td><p>Localidade : <?= $empresa->localidade ?></p></td>
        <?php } ?>

    </div>

    <div class="invoice p-3 mb-3">
        <h4> Dados do Cliente </h4>
        <?php foreach ($empresas as $empresa) { ?>
            <td><p>Designação: <?= $empresa->designacao ?></p></td>
            <td><p>Capital : <?= $empresa->capital ?></p></td>
            <td><p>Email : <?= $empresa->email ?></p></td>
            <td><p>Telefone : <?= $empresa->telefone ?></p></td>
            <td><p>NIF : <?= $empresa->nif ?></p></td>
            <td><p>Morada : <?= $empresa->morada ?></p></td>
            <td><p>Localidade : <?= $empresa->localidade ?></p></td>
        <?php } ?>
    </div>

    <div class="invoice p-3 mb-3">
        <td><p>Nºda Fatura:</p></td>
        <td><p>Data da Fatura:</p></td>
    </div>
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        </div>

        <div class="col-sm-4 invoice-col">
            <form action="index.php?c=empresa&a=store" method="post">
                <label for="referencia">Referencia</label>
                <input type="number" name="referencia" value="<?php if(isset($servico)) { echo   $servico->referencia; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('referencia'); }?>
                <br>
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao" value="<?php if(isset($servico)) { echo $servico->descricao; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('descricao'); }?>
                <br>
                <label for="quantidade">Quantidade</label>
                <input type="text" name="telefone" value="<?php if(isset($servico)) { echo $servico->telefone; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('quantidade'); }?>
                <br>
                <label for="precohora">Precohora</label>
                <input type="number" name="precohora" value="<?php if(isset($servico)) { echo $servico->precohora; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('precohora'); }?>
                <br>
                <label for="morada">Valor Total</label>
                <input type="text" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('morada'); }?>
                <br>
                <label for="alor">Valor</label>
                <input type="number" name="codigopostal" value="<?php if(isset($empresa)) { echo $empresa->codigopostal; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('codigopostal'); }?>
                <br>
                <label for="subtotal">Subtotal</label>
                <input type="text" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('localidade'); }?>
                <br>
                <input type="submit" class="btn btn-success" value="Registar Empresa">
            </form>
            <br>
            <a href="./index.php?c=empresa&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>




    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>

