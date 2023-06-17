<?php
?>

<form action="/action_page.php"
    <label for="cliente_id">Search a Client:</label>
<input type="text" name="cliente" value="">
<input type="submit" value="Submit">
</form
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">

            <?php foreach ($users as $user) {


                ?>
            <tr>
                <td><?= $user->username?></td>
                <td> <a href="index.php?c=folhaobra&a=store?idcliente<?= $user->id ?>"> Seleccionar </a></td>
                <?php } ?>
            </tr>
            <tbody>
            </tbody>
        </table>
    </div>
    </div>
</div>