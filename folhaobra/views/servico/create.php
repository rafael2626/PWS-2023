<?php

?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Registar Novo Servico</h3>
            <br>
            <form action="index.php?c=servico&a=store" method="post">
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao" value="<?php if(isset($servico)) { echo $servico->descricao; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('descricao'); }?>
                <br>
                <label for="precohora">Preco Hora</label>
                <input type="text" name="precohora" value="<?php if(isset($servico)) { echo $servico->precohora; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('precohora'); }?>
                <br>
                <label for="referencia">Referencia</label>
                <input type="number" name="referencia" value="<?php if(isset($servico)) { echo $servico->referencia; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('referencia'); }?>
                <br>
                <label for="iva_id">IVA_id:</label>
                <select name="iva_id">
                    <?php foreach($ivas as $iva){?>
                        <option value="<?= $iva->id?>"> <?= $iva->percentagem; ?></option>
                    <?php } ?>

                    <br>
                </select>
                <br>
                <button  <input type=submit" class="btn btn-success">Registar Servico </button>
            </form>
            <br>
            <a href="./index.php?c=servico&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

