<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <br>
            <br>
            <form action="index.php?c=user&a=store" method="post" >
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php if(isset($user)) { echo   $user->username ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
                <br>
                <label for="password">Password</label>
                <input type="text" name="password" value="<?php if(isset($user)) { echo   $user->password ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('password'); }?>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php if(isset($user)) { echo   $user->email ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
                <br>
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" value="<?php if(isset($user)) { echo   $user->telefone ; }?>">
                <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
                <br>
                <label for="nif">NIF</label>
                <input type="number" name="nif" value="<?php if(isset($user)) { echo   $user->nif ; }?>">
                <?php if(isset($user->errors)){ echo $user->errors->on('nif'); }?>
                <br>
                <label for="morada">Morada</label>
                <input type="number" name="morada" value="<?php if(isset($user)) { echo   $user->morada ; }?>">
                <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
                <br>
                <label for="codigopostal">Codigo Postal</label>
                <input type="number" name="codigopostal" value="<?php if(isset($user)) { echo   $user->codigopostal ; }?>">
                <?php if(isset($user->errors)){ echo $user->errors->on('codigopostal'); }?>
                <br>
                <label for="localidade">Localidade</label>
                <input type="text" name="localidade" value="<?php if(isset($user)) { echo   $user->localidade ; }?>">
                <?php if(isset($user->errors)){ echo $user->errors->on('localidade'); }?>
                <br>
                <label for="role">Role</label>
                <br>
                <select name="role"  class="form-control">

                    <?php
                    foreach(['','admin','funcionario','cliente']as $opcao)
                    {
                        echo "<option value='" . $opcao. "'".($opcao == $user->role?"selected":"") . ">" . $opcao . "</option>";
                    }
                    ?>
                </select>
                <a href="./index.php?c=login&a=index">
                <button class="btn btn-success" type="submit">Registar Funcionario</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>