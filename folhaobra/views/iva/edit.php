<?php

?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Editar  IVA</h3>
            <br>
            <form action="index.php?c=iva&a=store" method="post">
                <label for="iva">Percentagem</label>
                <input type="text" name="percentagem" value="<?php if(isset($iva)) { echo   $iva->percentagem ; }?>">
                <br>
                <?php if(isset($iva->errors)){ echo $iva->errors->on('percentagem'); }?>
                <br>
                <label for="descricao">Descricao</label>
                <input type="text" name="isbn" value="<?php if(isset($iva)) { echo $iva->descricao; }?>">
                <br>
                <?php if(isset($iva->errors)){ echo $iva->errors->on('descricao'); }?>
                <br>
                <label for="descricao">vigor</label>
                <input type="text" name="vigor" value="<?php if(isset($iva)) { echo $iva->vigor; }?>">
                <br>
                <?php if(isset($iva->errors)){ echo $iva->errors->on('vigor'); }?>
                <br>


                <br>
                <button  <input type=submit" class="btn btn-success">Guardar IVA </button>
            </form>
            <br>
            <a href="./index.php?c=iva&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

