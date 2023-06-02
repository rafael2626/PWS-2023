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
                <label for="preco">Preco</label>
                <input type="text" name="preco" value="<?php if(isset($servico)) { echo $servico->preco; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('preco'); }?>
                <br>
                <label for="hora">Hora</label>
                <input type="text" name="hora" value="<?php if(isset($servico)) { echo $servico->hora; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('hora'); }?>
                <br>
                <label for="iva_id">Percentagem:</label>
                <select name="iva_id">
                    <?php foreach($ivas as $iva){?>
                        <option value="<?= $iva->id?>"> <?= $iva->percentagem; ?></option>
                    <?php } ?>
                    <br>
                    <br>
                </select>
                <br>
                <button  <input type=submit" class="btn btn-success">Registar IVA </button>
            </form>
            <br>
            <a href="./index.php?c=iva&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

