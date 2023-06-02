<?php  ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <?php
            if(is_null($empresas))
            {
                ?>
                <p>Empresa não encontrada</p>
                <?php
            }
            else
            {
                ?>
                <h1>Book</h1>
                ID da Empresa: <?= $empresas->id ?><br>
                Designacao Social: <?= $empresas->designacao?><br>
                Capital Social : <?= $empresas->capital?><br>
                Email : <?= $empresas->email?><br>
                Telefone : <?= $empresas->telefone?><br>
                NIF : <?= $empresas->nif?><br>
                Código Postal : <?= $empresas->codigopostal?><br>
                Localidade : <?= $empresas->localidade?><br>

                <?php
            }
            ?>
        </div>
    </div>
    <a href="./index.php?c=book&a=index">
        <br>
        <button class="btn btn-success">Voltar</button>
    </a>
</div>
<?php  ?>
