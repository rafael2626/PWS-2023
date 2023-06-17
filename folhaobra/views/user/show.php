<?php  ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <?php
            if(is_null($users))
            {
                ?>
                <p>User não encontrado</p>
                <?php
            }
            else
            {
                ?>
                <h1>User</h1>
                ID do User : <?= $users->id ?><br>
                Username : <?= $users->username?><br>
                Password : <?= $users->password?><br>
                Email : <?= $users->email?><br>
                Telefone : <?= $users->telefone?><br>
                NIF : <?= $users->nif?><br>
                Morada : <?= $users->morada?><br>
                Codigo Postal : <?= $users->codigopostal?><br>
                Localidade : <?= $users->localidade?><br>
                Role : <?= $users->role?><br>

                <?php
            }
            ?>
        </div>
    </div>
    <a href="./index.php?c=user&a=index">
        <br>
        <button class="btn btn-success">Voltar</button>
    </a>
</div>
<?php  ?>
