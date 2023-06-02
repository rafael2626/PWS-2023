<h2 class="text-left top-space">Servicos Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>Descricao</h3></th>
            <th><h3>Preco</h3>
            <th><h3>Iva_id</h3></th>

            </th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($servicos as $servico) { ?>
                <tr>

                    <td><?= $servico->id ?></td>
                    <td><?= $servico->descricao?></td>
                    <td><?= $servico->preco ?></td>
                    <td><?= $servico->hora ?></td>
                    <td><?= $servico->iva_id ?></td>

                    <td>
                        <a href="index.php?c=servico&a=show&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=servico&a=edit&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=servico&a=delete&id=<?= $servico->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a Servico</h3>
        <p>
            <a href="index.php?c=empresa&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div>