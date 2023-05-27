<?php

?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Registar Nova Empresa</h3>
            <br>
            <form action="index.php?c=empresa&a=store" method="post">
                <label for="iva">Descricao</label>
                <input type="text" name="descricao" value="<?php if(isset($empresa)) { echo   $empresa->descricao ; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('descricao'); }?>
                <br>
                <label for="descricao">Email</label>
                <input type="text" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('email'); }?>
                <br>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" value="<?php if(isset($telefone)) { echo $empresa->telefone; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('telefone'); }?>
                <br>
                <label for="nif">Nif</label>
                <input type="text" name="nif" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('hora'); }?>
                <br>
                <label for="hora">Morada</label>
                <input type="text" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('morada'); }?>
                <br>
                <label for="localidade">Localidade</label>
                <input type="text" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('hora'); }?>
                <br>
                <label for="capitalsocial">Capital Social</label>
                <input type="text" name="capitalsocial" value="<?php if(isset($empresa)) { echo $empresa->capitalsocial; }?>">
                <br>
                <?php if(isset($empresa->errors)){ echo $empresa->errors->on('capitalsocial'); }?>
                <br>
                <button  <input type=submit" class="btn btn-success">Registar Empresa</button>
            </form>
            <br>
            <a href="./index.php?c=empresa&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

