<h2 class="text-left top-space">Empresa Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>Designacao</h3></th>
            <th><h3>Capital Social</h3>
            <th><h3>Email</h3></th>
            <th><h3>Telefone</h3>
            <th><h3>Codigo Postal</h3>
            <th><h3>Nif</h3>
            <th><h3>Morada</h3>
            <th><h3>Localidade</h3>
            </th>
            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($empresas as $empresa) { ?>
                <tr>

                    <td><?= $empresa->id ?></td>
                    <td><?= $empresa->designacao?></td>
                    <td><?= $empresa->capital ?></td>
                    <td><?= $empresa->email ?></td>
                    <td><?= $empresa->telefone ?></td>
                    <td><?= $empresa->codigopostal ?></td>
                    <td><?= $empresa->nif ?></td>
                    <td><?= $empresa->morada ?></td>
                    <td><?= $empresa->localidade ?></td>
                    <td>
                        <a href="index.php?c=empresa&a=show&id=<?= $empresa->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=empresa&a=edit&id=<?= $empresa->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=empresa&a=delete&id=<?= $empresa->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Empresa</h3>
        <p>
            <a href="index.php?c=empresa&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div>