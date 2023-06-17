<?php
?>


<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">

            <?php foreach ($linhaobras as $linhaobra) {


            ?>
            <tr>
                <td><?= $linhaobra->quantidade?></td>
                <td> <a href="index.php?c=linhaobra&a=store?idcliente<?= $linhaobra->id ?>"> Seleccionar </a></td>
                <?php } ?>
            </tr>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>