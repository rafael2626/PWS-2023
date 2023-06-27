<?php
?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Registar Novo IVA</h3>
            <br>
            <form action="index.php?c=iva&a=store" method="post">
                <label for="percentagem">Percentagem</label>
                <input type="number" name="percentagem" value="<?php if(isset($iva)) { echo   $iva->percentagem ; }?>">
                <br>
                <?php if(isset($iva->errors)){ echo $iva->errors->on('percentagem'); }?>
                <br>
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao" value="<?php if(isset($iva)) { echo $iva->descricao; }?>">
                <br>
                <?php if(isset($iva->errors)){ echo $iva->errors->on('descricao'); }?>
                <br>
                <label for="vigor">Vigor</label>
                <br>
                <select name="vigor"  class="form-control">
                    <?php
                    foreach(['','0','1']as $opcao)
                    {
                        echo "<option value='" . $opcao. "'".($opcao == $iva->vigor?"selected":"") . ">" . $opcao . "</option>";
                    }
                    ?>
                </select>

                <?php if(isset($iva->errors)){ echo $iva->errors->on('vigor'); }?>
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

