<?php  ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <?php
            if(is_null($servicos))
            {
                ?>
                <p>Servico não encontrado</p>
                <?php
            }
            else
            {
                ?>
                <h1>Servico</h1>
                ID do Servico : <?= $servicos->id ?><br>
                Descricao : <?= $servicos->descricao?><br>
                Preco : <?= $servicos->precohora?><br>
                Referencia : <?= $servicos->referencia?><br>
                <?php
            }
            ?>
        </div>
    </div>
    <a href="./index.php?c=servico&a=index">
        <br>
        <button class="btn btn-success">Voltar</button>
    </a>
</div>
<?php  ?>
