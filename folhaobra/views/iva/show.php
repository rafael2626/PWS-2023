<?php  ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <?php
            if(is_null($ivas))
            {
                ?>
                <p>IVA não encontrada</p>
                <?php
            }
            else
            {
                ?>
                <h1>Book</h1>
                ID do IVA: <?= $ivas->id ?><br>
                Percentagem: <?= $ivas->percentagem?><br>
                Descricao: <?= $ivas->descricao?><br>
                Vigor : <?= $ivas->vigor?><br>


                <?php
            }
            ?>
        </div>
    </div>
    <a href="./index.php?c=iva&a=index">
        <br>
        <button class="btn btn-success">Voltar</button>
    </a>
</div>
<?php  ?>
