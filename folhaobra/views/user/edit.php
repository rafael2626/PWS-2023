<?php

?>
<div class="container" xmlns="http://www.w3.org/1999/html">

    <div class="row mt-5">
        <div class="col">
            <h3>Editar  Funcionario</h3>
            <br>

            <form action="index.php?c=user&a=update&id=<?= $user->id ?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php if(isset($user)) { echo   $user->username ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
                <br>
                <label for="password">Password</label>
                <input type="password" name="password"  value="<?php if(isset($user)) { echo   $user->password ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('password'); }?>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php if(isset($user)) { echo $user->email; }?>"readonly>
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
                <br>
                <label for="telefone">telefone</label>
                <input type="number" name="telefone" value="<?php if(isset($user)) { echo $user->telefone; }?>"readonly>
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
                <br>
                <label for="nif">NIF</label>
                <input type="text" name="nif" value="<?php if(isset($user)) { echo $user->nif; }?>"readonly>
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('nif'); }?>
                <br>
                <label for="morada">morada</label>
                <input type="text" name="nif" value="<?php if(isset($user)) { echo $user->morada; }?>"readonly>
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
                <br>
                <label for="codigopostaal">codigopostal</label>
                <input type="number" name="codigopostal" value="<?php if(isset($user)) { echo $user->codigopostal; }?>"readonly>
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('codigopostal'); }?>
                <br>
                <label for="localidade">localidade</label>
                <input type="text" name="localidade" value="<?php if(isset($user)) { echo $user->localidade; }?>"readonly>
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('localidade'); }?>
                <br>
                <label for="role">Role</label>
                <br>
                <select name="role"  class="form-control"


                    <?php
                    foreach(['','admin','funcionario','cliente']as $opcao)
                    {
                        echo "<option value='" . $opcao. "'".($opcao == $user->role?"selected":"") . ">" . $opcao . "</option>";
                    }
                    ?>
                </select>
                <br>
                <button  <input type=submit" class="btn btn-success">Guardar Funcionario </button>
            </form>
            <br>
            <a href="./index.php?c=user&a=index">
                <button  class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>
</div>

