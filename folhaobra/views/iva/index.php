<h2 class="text-left top-space">Ivas Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>ID</h3></th>
            <th><h3>Percentagem</h3></th>
            <th><h3>Descrição</h3>
            <th><h3>Vigor</h3></th>

            </th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($ivas as $iva) { ?>
                <tr>
                    <td><?= $iva->id ?></td>
                    <td><?= $iva->percentagem ?></td>
                    <td><?= $iva->descricao?></td>
                    <td><?= $iva->vigor ?></td>


                    <td>
                        <a href="index.php?c=iva&a=show&id=<?= $iva->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=iva&a=edit&id=<?= $iva->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=iva&a=delete&id=<?= $iva->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new IVA</h3>
        <p>
            <a href="index.php?c=iva&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div>