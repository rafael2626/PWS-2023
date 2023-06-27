<div class="container">
    <div class="row">

            <form action="index.php?c=user&a=store" method="post" >
                <label for="username">Username</label>
                <br>
                <input type="text" name="username" value="<?php if(isset($user)) { echo   $user->username ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" value="<?php if(isset($user)) { echo   $user->password ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('password'); }?>
                <br>
                <label for="email">Email</label>
                <br>
                <input type="text" name="email" value="<?php if(isset($user)) { echo   $user->email ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
                <br>
                <label for="telefone">Telefone</label>
                <br>
                <input type="number" name="telefone" value="<?php if(isset($user)) { echo   $user->telefone ; }?>">
                <br>

                <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
                <br>
                <label for="nif">NIF</label>
                <br>
                <input type="number" name="nif" value="<?php if(isset($user)) { echo   $user->nif ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('nif'); }?>
                <br>
                <label for="morada">Morada</label>
                <br>
                <input type="text" name="morada" value="<?php if(isset($user)) { echo   $user->morada ; }?>">
                <br>

                <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
                <br>
                <label for="codigopostal">Codigo Postal</label>
                <br>
                <input type="number" name="codigopostal" value="<?php if(isset($user)) { echo   $user->codigopostal ; }?>">
                <br>
                <?php if(isset($user->errors)){ echo $user->errors->on('codigopostal'); }?>
                <br>
                <label for="localidade">Localidade</label>
                <br>
                <input type="text" name="localidade" value="<?php if(isset($user)) { echo   $user->localidade ; }?>">
                <br>
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
                    <?php if(isset($user->errors)){ echo $user->errors->on('role'); }?>
                </select>
                <a href="./index.php?c=login&a=index">
                <button class="btn btn-success" type="submit">Registar Funcionario</button>
            </form>

</div>