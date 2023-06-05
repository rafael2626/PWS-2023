<?php
?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Registar Nova Linha Obra</h3>
            <br>
            <form action="index.php?c=linhaobra&a=store" method="post">
                <label for="iva">Valor</label>
                <input type="number" name="valor" value="<?php if(isset($linhaobra)) { echo   $linhaobra->valor ; }?>">
                <br>
                <?php if(isset($linhaobra->errors)){ echo $linhaobra->errors->on('valor'); }?>
                <br>
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" value="<?php if(isset($linhaobra)) { echo $linhaobra->quantidade; }?>">
                <br>
                <?php if(isset($linhaobra->errors)){ echo $linhaobra->errors->on('quantidade'); }?>
                <br>
                <label for="valoriva">Valor Iva</label>
                <input type="number" name="vigor" value="<?php if(isset($linhaobra)) { echo $linhaobra->valoriva; }?>">
                <br>
                <label for="servico_id">Percentagem:</label>
                <select name="servico_id">
                    <?php foreach($servicos as $servico){?>
                        <option value="<?= $servico->id?>"> <?= $servico->percentagem; ?></option>
                    <?php } ?>
                    <br>
                </select>
                <br>
                <label for="iva_id">Folhaobras:</label>
                <select name="folhaobro_id">
                    <?php foreach($folhaobras as $folhaobra){?>
                        <option value="<?= $folhaobra->id?>"> <?= $folhaobra->percentagem; ?></option>
                    <?php } ?>
                    <br>
                </select>
                <br>
                <label for="iva_id">IVA_id:</label>
                <select name="iva_id">
                    <?php foreach($ivas_id as $iva_id){?>
                        <option value="<?= $iva_id->id?>"> <?= $iva_id->percentagem; ?></option>
                    <?php } ?>
                    <br>
                </select>
                <br>
                <button  <input type=submit" class="btn btn-success">Registar Linha de Obra </button>
            </form>
            <br>
            <a href="./index.php?c=iva&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

