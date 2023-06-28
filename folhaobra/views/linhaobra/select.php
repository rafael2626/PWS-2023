
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">

            <?php foreach ($servicos as $servico) {

            ?>
            <tr>
                <td>Referência</td>
                <td>Descricao</td>
                <td>Preco/Hora</td>
                <td>Percentagem</td>
            </tr>
            <tr>
                <td><?= $servico->referencia?></td>
                <td><?= $servico->descricao?></td>
                <td><?= $servico->precohora?></td>
                <td><?= $servico->iva->percentagem?></td>
                <td> <a href="index.php?c=linhaobra&a=store"> Seleccionar </a></td>
                <?php } ?>
            </tr>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>