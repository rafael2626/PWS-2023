<?php

?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Editar  Empresa</h3>
            <br>
            <form action="index.php?c=empresa&a=store" method="post">
                <label for="designacao">Designacao</label>
                <input type="text" name="designacao" value="<?php if(isset($empresa)) { echo   $empresa->designacao; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('designacao'); }?>
                <br>
                <label for="capital">Capital Social</label>
                <input type="text" name="capital" value="<?php if(isset($empresa)) { echo $empresa->capital; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('capital'); }?>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>">
                <br>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('telefone'); }?>
                <br>
                <label for="nif">Nif</label>
                <input type="text" name="nif" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('hora'); }?>
                <br>
                <label for="morada">Morada</label>
                <input type="text" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('morada'); }?>
                <br>
                <label for="localidade">Localidade</label>
                <input type="text" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('localidade'); }?>
                <br>
                <button  <input type=submit" class="btn btn-success">Guardar Empresa</button>
            </form>
            <br>
            <a href="./index.php?c=empresa&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

