<?php

?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Editar  Servico</h3>
            <br>
               <form action="index.php?c=servico=&a=update&id" method="post">
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao" value="<?php if(isset($servico)) { echo $servico->descricao; }?>">
                <br>
                <?php if(isset($servico->errors)){ echo $servico->errors->on('descricao'); }?>
                <br>
                <label for="precohora">Precohora</label>
                <input type="number" name="precohora" value="<?php if(isset($servico)) { echo $servico->precohora; }?>">
                <br>
                   <?php if(isset($servico->errors)){ echo $servico->errors->on('precohora'); }?>
               <br>
                   <label for="referencia">Referencia</label>
                   <input type="number" name="referencia" value="<?php if(isset($servico)) { echo $servico->referencia; }?>">
                   <br>
                   <?php if(isset($servico->errors)){ echo $servico->errors->on('referencia'); }?>
                   <br>
                   <label for="ivas_id">Iva_ID:</label>
                <select name="ivas_id">
                    <?php foreach($ivas as $iva){?>
                        <option value="<?= $iva->id?>"> <?= $iva->ivas_id; ?></option>
                    <?php } ?>
                    <br>
                    <br>
                </select>
                <button  <input type=submit" class="btn btn-success">Editar Servico </button>
            </form>
            <a href="./index.php?c=servico&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

